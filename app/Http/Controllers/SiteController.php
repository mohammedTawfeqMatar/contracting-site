<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\News;
use App\Models\Project;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Tender;
use Illuminate\Support\Collection;

class SiteController extends Controller
{
    public function home()
    {
        $services = Service::query()->published()->limit(8)->get();
        $projects = Project::query()->published()->latest()->limit(6)->get();
        $news = News::query()->published()->latest('published_at')->limit(3)->get();

        return view('site.index', [
            'services' => $services,
            'projects' => $projects,
            'news' => $news,
            'settings' => $this->siteSettings(),
        ]);
    }

    public function about()
    {
        return view('site.about', [
            'settings' => $this->siteSettings(),
            'stats' => $this->mainStats(),
        ]);
    }

    public function services()
    {
        $services = Service::query()->published()->get();

        return view('site.services', compact('services'));
    }

    public function serviceDetails(string $slug)
    {
        $service = Service::query()->where('slug', $slug)->firstOrFail();
        $relatedProjects = Project::query()
            ->where('service_id', $service->id)
            ->published()
            ->latest()
            ->limit(4)
            ->get();

        return view('site.sub-pages.service-details', compact('service', 'relatedProjects'));
    }

    public function projects()
    {
        $projects = Project::query()->published()->latest()->paginate(9);

        return view('site.projects', compact('projects'));
    }

    public function projectDetails(string $slug)
    {
        $project = Project::query()->with('service')->where('slug', $slug)->firstOrFail();
        $relatedProjects = Project::query()
            ->where('id', '!=', $project->id)
            ->when($project->service_id, fn ($q) => $q->where('service_id', $project->service_id))
            ->published()
            ->latest()
            ->limit(3)
            ->get();

        return view('site.sub-pages.project-details', compact('project', 'relatedProjects'));
    }

    public function news()
    {
        $news = News::query()->published()->latest('published_at')->paginate(9);

        return view('site.news', compact('news'));
    }

    public function newsDetails(string $slug)
    {
        $newsItem = News::query()->where('slug', $slug)->firstOrFail();
        $relatedNews = News::query()
            ->where('id', '!=', $newsItem->id)
            ->when($newsItem->category, fn ($q) => $q->where('category', $newsItem->category))
            ->published()
            ->latest('published_at')
            ->limit(3)
            ->get();

        return view('site.sub-pages.news-details', compact('newsItem', 'relatedNews'));
    }

    public function tenders()
    {
        $tenders = Tender::query()->published()->latest('closing_date')->paginate(10);

        return view('site.tenders', compact('tenders'));
    }

    public function tenderRequest(int $tenderId)
    {
        $tender = Tender::query()->findOrFail($tenderId);

        return view('site.sub-pages.tender-request', compact('tender'));
    }

    public function careers()
    {
        $jobs = Job::query()->published()->paginate(10);

        return view('site.careers', compact('jobs'));
    }

    public function jobApply(int $jobId)
    {
        $job = Job::query()->findOrFail($jobId);

        return view('site.sub-pages.job-application', compact('job'));
    }

    public function contact()
    {
        return view('site.contact', [
            'settings' => $this->siteSettings(),
            'services' => Service::query()->published()->orderBy('title')->get(),
        ]);
    }

    public function page(string $slug)
    {
        $page = \App\Models\Page::query()->published()->where('slug', $slug)->firstOrFail();

        return view('site.page', compact('page'));
    }

    public function search(\Illuminate\Http\Request $request)
    {
        $q = trim((string) $request->query('q', ''));

        $services = Service::query()
            ->published()
            ->when($q !== '', fn ($query) => $query->where(function ($sub) use ($q) {
                $sub->where('title', 'like', "%{$q}%")->orWhere('description', 'like', "%{$q}%");
            }))
            ->limit(8)
            ->get();

        $projects = Project::query()
            ->published()
            ->when($q !== '', fn ($query) => $query->where(function ($sub) use ($q) {
                $sub->where('title', 'like', "%{$q}%")->orWhere('description', 'like', "%{$q}%");
            }))
            ->limit(8)
            ->get();

        $news = News::query()
            ->published()
            ->when($q !== '', fn ($query) => $query->where(function ($sub) use ($q) {
                $sub->where('title', 'like', "%{$q}%")->orWhere('content', 'like', "%{$q}%");
            }))
            ->limit(8)
            ->get();

        $jobs = Job::query()
            ->published()
            ->when($q !== '', fn ($query) => $query->where(function ($sub) use ($q) {
                $sub->where('title', 'like', "%{$q}%")->orWhere('description', 'like', "%{$q}%");
            }))
            ->limit(8)
            ->get();

        $tenders = Tender::query()
            ->published()
            ->when($q !== '', fn ($query) => $query->where(function ($sub) use ($q) {
                $sub->where('title', 'like', "%{$q}%")->orWhere('description', 'like', "%{$q}%");
            }))
            ->limit(8)
            ->get();

        $pages = \App\Models\Page::query()
            ->published()
            ->when($q !== '', fn ($query) => $query->where(function ($sub) use ($q) {
                $sub->where('title', 'like', "%{$q}%")->orWhere('content', 'like', "%{$q}%");
            }))
            ->limit(8)
            ->get();

        return view('site.search', compact('q', 'services', 'projects', 'news', 'jobs', 'tenders', 'pages'));
    }

    private function siteSettings(): Collection
    {
        return Setting::query()->get()->mapWithKeys(fn ($setting) => [$setting->key => $setting->parseValue()]);
    }

    private function mainStats(): array
    {
        return [
            'projects' => Project::count(),
            'services' => Service::count(),
            'years' => (int) date('Y') - 2009,
            'jobs' => Job::active()->count(),
        ];
    }
}
