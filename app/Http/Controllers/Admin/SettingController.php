<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::query()->orderBy('key')->paginate(20);

        return view('admin.settings.index', compact('settings'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'key' => ['required', 'string', 'max:255', 'alpha_dash', Rule::unique('settings', 'key')],
            'value' => ['nullable', 'string'],
            'type' => ['required', Rule::in(['text', 'longtext', 'image', 'color', 'json', 'boolean', 'integer'])],
            'description' => ['nullable', 'string', 'max:255'],
        ]);

        if ($validated['type'] === 'boolean') {
            $validated['value'] = $request->boolean('value') ? '1' : '0';
        }

        Setting::create($validated);

        return redirect()->route('admin.settings.index')->with('success', 'تمت إضافة الإعداد بنجاح.');
    }

    public function update(Request $request, Setting $setting)
    {
        $validated = $request->validate([
            'key' => ['required', 'string', 'max:255', 'alpha_dash', Rule::unique('settings', 'key')->ignore($setting->id)],
            'value' => ['nullable', 'string'],
            'type' => ['required', Rule::in(['text', 'longtext', 'image', 'color', 'json', 'boolean', 'integer'])],
            'description' => ['nullable', 'string', 'max:255'],
        ]);

        if ($validated['type'] === 'boolean') {
            $validated['value'] = $request->boolean('value') ? '1' : '0';
        }

        $setting->update($validated);

        return redirect()->route('admin.settings.index')->with('success', 'تم تحديث الإعداد بنجاح.');
    }

    public function destroy(Setting $setting)
    {
        $setting->delete();

        return redirect()->route('admin.settings.index')->with('success', 'تم حذف الإعداد بنجاح.');
    }
}
