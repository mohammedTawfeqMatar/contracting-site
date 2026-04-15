<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tender;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class TenderController extends Controller
{
    public function index()
    {
        $q = trim((string) request('q', ''));
        $tenders = Tender::query()
            ->when($q !== '', fn ($query) => $query->where(function ($sub) use ($q) {
                $sub->where('title', 'like', "%{$q}%")
                    ->orWhere('slug', 'like', "%{$q}%")
                    ->orWhere('description', 'like', "%{$q}%")
                    ->orWhere('work_type', 'like', "%{$q}%")
                    ->orWhere('location', 'like', "%{$q}%");
            }))
            ->latest()
            ->paginate(15)
            ->withQueryString();

        return view('admin.tenders.index', compact('tenders', 'q'));
    }

    public function create()
    {
        return view('admin.tenders.create');
    }

    public function store(Request $request)
    {
        $validated = $this->validateTender($request);
        $validated['slug'] = $this->resolveSlug($validated['slug'] ?? null, $validated['title']);
        $validated['is_published'] = $request->boolean('is_published');

        Tender::create($validated);

        return redirect()->route('admin.tenders.index')->with('success', 'تمت إضافة المناقصة بنجاح.');
    }

    public function edit(Tender $tender)
    {
        return view('admin.tenders.edit', compact('tender'));
    }

    public function update(Request $request, Tender $tender)
    {
        $validated = $this->validateTender($request, $tender->id);
        $validated['slug'] = $this->resolveSlug($validated['slug'] ?? null, $validated['title'], $tender->id);
        $validated['is_published'] = $request->boolean('is_published');

        $tender->update($validated);

        return redirect()->route('admin.tenders.index')->with('success', 'تم تحديث المناقصة بنجاح.');
    }

    public function destroy(Tender $tender)
    {
        $tender->delete();

        return redirect()->route('admin.tenders.index')->with('success', 'تم حذف المناقصة بنجاح.');
    }

    private function validateTender(Request $request, ?int $ignoreId = null): array
    {
        return $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', Rule::unique('tenders', 'slug')->ignore($ignoreId)],
            'description' => ['nullable', 'string'],
            'work_type' => ['nullable', 'string', 'max:255'],
            'location' => ['nullable', 'string', 'max:255'],
            'closing_date' => ['required', 'date'],
            'status' => ['required', Rule::in(['open', 'closed', 'completed'])],
        ]);
    }

    private function resolveSlug(?string $slug, string $title, ?int $ignoreId = null): string
    {
        $baseSlug = Str::slug($slug ?: $title);
        $candidate = $baseSlug;
        $counter = 1;

        while (
            Tender::where('slug', $candidate)
                ->when($ignoreId, fn ($query) => $query->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $candidate = $baseSlug . '-' . $counter++;
        }

        return $candidate;
    }
}
