<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    public function index()
    {
        $q = trim((string) request('q', ''));
        $jobs = Job::query()
            ->when($q !== '', fn ($query) => $query->where(function ($sub) use ($q) {
                $sub->where('title', 'like', "%{$q}%")
                    ->orWhere('slug', 'like', "%{$q}%")
                    ->orWhere('description', 'like', "%{$q}%")
                    ->orWhere('location', 'like', "%{$q}%")
                    ->orWhere('type', 'like', "%{$q}%");
            }))
            ->latest()
            ->paginate(15)
            ->withQueryString();

        return view('admin.jobs.index', compact('jobs', 'q'));
    }

    public function create()
    {
        return view('admin.jobs.create');
    }

    public function store(Request $request)
    {
        $validated = $this->validateJob($request);
        $validated['slug'] = $this->resolveSlug($validated['slug'] ?? null, $validated['title']);
        $validated['is_active'] = $request->boolean('is_active');
        $validated['requirements'] = $this->toArrayFromLines($request->input('requirements'));
        $validated['skills'] = $this->toArrayFromLines($request->input('skills'));

        Job::create($validated);

        return redirect()->route('admin.jobs.index')->with('success', 'تمت إضافة الوظيفة بنجاح.');
    }

    public function edit(Job $job)
    {
        return view('admin.jobs.edit', compact('job'));
    }

    public function update(Request $request, Job $job)
    {
        $validated = $this->validateJob($request, $job->id);
        $validated['slug'] = $this->resolveSlug($validated['slug'] ?? null, $validated['title'], $job->id);
        $validated['is_active'] = $request->boolean('is_active');
        $validated['requirements'] = $this->toArrayFromLines($request->input('requirements'));
        $validated['skills'] = $this->toArrayFromLines($request->input('skills'));

        $job->update($validated);

        return redirect()->route('admin.jobs.index')->with('success', 'تم تحديث الوظيفة بنجاح.');
    }

    public function destroy(Job $job)
    {
        $job->delete();

        return redirect()->route('admin.jobs.index')->with('success', 'تم حذف الوظيفة بنجاح.');
    }

    private function validateJob(Request $request, ?int $ignoreId = null): array
    {
        return $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', Rule::unique('job_posts', 'slug')->ignore($ignoreId)],
            'location' => ['nullable', 'string', 'max:255'],
            'type' => ['nullable', 'string', 'max:255'],
            'experience' => ['nullable', 'string', 'max:255'],
            'qualification' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'requirements' => ['nullable', 'string'],
            'skills' => ['nullable', 'string'],
            'closing_date' => ['nullable', 'date'],
        ]);
    }

    private function toArrayFromLines(?string $value): array
    {
        if (!$value) {
            return [];
        }

        return collect(preg_split('/\r\n|\r|\n/', $value))
            ->map(fn ($line) => trim((string) $line))
            ->filter()
            ->values()
            ->all();
    }

    private function resolveSlug(?string $slug, string $title, ?int $ignoreId = null): string
    {
        $baseSlug = Str::slug($slug ?: $title);
        $candidate = $baseSlug;
        $counter = 1;

        while (
            Job::where('slug', $candidate)
                ->when($ignoreId, fn ($query) => $query->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $candidate = $baseSlug . '-' . $counter++;
        }

        return $candidate;
    }
}
