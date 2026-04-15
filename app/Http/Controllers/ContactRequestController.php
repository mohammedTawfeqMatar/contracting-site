<?php

namespace App\Http\Controllers;

use App\Events\ContactRequestSubmitted;
use App\Models\Contact;
use App\Models\Job;
use App\Models\Service;
use App\Models\Tender;
use Illuminate\Http\Request;

class ContactRequestController extends Controller
{
    public function storeGeneral(Request $request)
    {
        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string'],
            'request_type' => ['nullable', 'in:general,service,career'],
            'service_requested' => ['nullable', 'string', 'max:255'],
            'cv_file' => ['nullable', 'file', 'mimes:pdf', 'max:5120'],
        ]);

        $validated['request_type'] = $validated['request_type'] ?? 'general';
        $validated['status'] = 'pending';

        if ($request->hasFile('cv_file')) {
            $validated['cv_file'] = $request->file('cv_file')->store('cv-files', 'public');
        }

        $contact = Contact::create($validated);
        event(new ContactRequestSubmitted($contact));

        return back()->with('success', 'تم استلام طلبك بنجاح، وسيتم التواصل معك قريبًا.');
    }

    public function storeServiceRequest(Request $request, Service $service)
    {
        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:100'],
            'email' => ['nullable', 'email', 'max:255'],
            'message' => ['required', 'string'],
        ]);

        $contact = Contact::create([
            'full_name' => $validated['full_name'],
            'phone' => $validated['phone'],
            'email' => $validated['email'] ?? 'unknown@example.com',
            'request_type' => 'service',
            'service_requested' => $service->title,
            'message' => $validated['message'],
            'status' => 'pending',
        ]);
        event(new ContactRequestSubmitted($contact));

        return back()->with('success', 'تم إرسال طلب الخدمة بنجاح.');
    }

    public function storeJobApplication(Request $request, Job $job)
    {
        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['nullable', 'string'],
            'cv_file' => ['required', 'file', 'mimes:pdf', 'max:5120'],
        ]);

        $contact = Contact::create([
            'full_name' => $validated['full_name'],
            'phone' => $validated['phone'],
            'email' => $validated['email'],
            'request_type' => 'career',
            'service_requested' => $job->title,
            'cv_file' => $request->file('cv_file')->store('job-applications', 'public'),
            'message' => $validated['message'] ?? ('طلب توظيف على وظيفة: ' . $job->title),
            'status' => 'pending',
        ]);
        event(new ContactRequestSubmitted($contact));

        return back()->with('success', 'تم إرسال طلب التوظيف بنجاح.');
    }

    public function storeTenderRequest(Request $request, Tender $tender)
    {
        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string'],
            'proposal_file' => ['nullable', 'file', 'mimes:pdf', 'max:10240'],
        ]);

        $contact = Contact::create([
            'full_name' => $validated['full_name'],
            'phone' => $validated['phone'],
            'email' => $validated['email'],
            'request_type' => 'service',
            'service_requested' => 'Tender: ' . $tender->title,
            'cv_file' => $request->hasFile('proposal_file')
                ? $request->file('proposal_file')->store('tender-proposals', 'public')
                : null,
            'message' => $validated['message'],
            'status' => 'pending',
        ]);
        event(new ContactRequestSubmitted($contact));

        return back()->with('success', 'تم إرسال عرض المناقصة بنجاح.');
    }
}
