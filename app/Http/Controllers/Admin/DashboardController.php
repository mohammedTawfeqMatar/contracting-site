<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Job;
use App\Models\News;
use App\Models\Page;
use App\Models\Project;
use App\Models\Service;
use App\Models\Tender;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'projects' => Project::count(),
            'services' => Service::count(),
            'new_messages' => Contact::where('status', 'pending')->count(),
            'active_tenders' => Tender::where('status', 'open')->where('closing_date', '>=', now())->count(),
            'news' => News::count(),
            'pages' => Page::count(),
            'jobs' => Job::count(),
        ];

        $latestContacts = Contact::latest()->limit(5)->get();
        $latestProjects = Project::latest()->limit(5)->get();

        return view('admin.dashboard', compact('stats', 'latestContacts', 'latestProjects'));
    }
}
