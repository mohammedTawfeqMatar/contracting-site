@extends('site.layouts.app')

@section('title', 'يمن استيل - للمقاولات والبناء')

@section('styles')
@vite(['resources/css/index.css'])
@vite(['resources/css/services.css'])
    {{-- <link rel="stylesheet" href="{{ asset('css/index.css') }}" /> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/services.css') }}" /> --}}
@endsection

@section('content')
<section id="home" class="hero" aria-label="الرئيسية">
    <div class="hero-media" aria-hidden="true">
        <img src="{{ $siteSettings['home_hero_image'] ?? 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=1920&auto=format&fit=crop&q=85' }}" alt="">
    </div>
    <div class="container hero-body">
        <div class="hero-badge reveal-up">{{ $siteSettings['home_hero_badge'] ?? 'شركة مقاولات رائدة منذ 2009' }}</div>
        <h1 class="hero-title reveal-up">{{ $siteSettings['home_hero_title'] ?? 'نبني المستقبل بأمانة وإتقان' }}</h1>
        <p class="hero-desc reveal-up">{{ $siteSettings['home_hero_description'] ?? 'حلول متكاملة في المقاولات والبناء للمشاريع السكنية والتجارية والصناعية.' }}</p>
        <div class="hero-actions reveal-up">
            <a href="{{ route('projects') }}" class="cta-primary"><span>استعرض مشاريعنا</span></a>
            <a href="{{ route('contact') }}" class="cta-ghost">تواصل معنا</a>
        </div>
    </div>
</section>

<section id="services" class="services section-py">
    <div class="container">
        <div class="sec-head reveal">
            <span class="sec-label">خدماتنا</span>
            <h2>حلول بناء متكاملة</h2>
        </div>
        <div class="svc-grid">
            @forelse($services as $service)
                <a class="svc-card reveal" href="{{ route('services.details', $service->slug) }}">
                    <div class="svc-icon"><i class="{{ $service->icon ?: 'fas fa-tools' }}"></i></div>
                    <h3>{{ $service->title }}</h3>
                    <p>{{ \Illuminate\Support\Str::limit(strip_tags($service->description), 110) }}</p>
                    <div class="svc-line"></div>
                </a>
            @empty
                <p>لا توجد خدمات منشورة حالياً.</p>
            @endforelse
        </div>
    </div>
</section>

<section id="projects" class="projects section-py">
    <div class="container">
        <div class="sec-head reveal">
            <span class="sec-label">أعمالنا</span>
            <h2>أحدث المشاريع</h2>
        </div>
        <div class="proj-grid">
            @forelse($projects as $project)
                <a class="proj-card reveal" href="{{ route('projects.details', $project->slug) }}">
                    <div class="proj-img">
                        <img src="{{ $project->image_url ?: 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=900&q=80' }}" alt="{{ $project->title }}">
                    </div>
                    <div class="proj-info">
                        <span class="proj-tag">{{ $project->category ?: 'مشروع' }}</span>
                        <h4>{{ $project->title }}</h4>
                        <p>{{ \Illuminate\Support\Str::limit(strip_tags($project->description), 90) }}</p>
                    </div>
                </a>
            @empty
                <p>لا توجد مشاريع منشورة حالياً.</p>
            @endforelse
        </div>
    </div>
</section>

<section class="news-section section-py">
    <div class="container">
        <div class="sec-head reveal">
            <span class="sec-label">الأخبار</span>
            <h2>آخر المستجدات</h2>
        </div>
        <div class="news-grid">
            @forelse($news as $item)
                <article class="news-card reveal">
                    <div class="news-image">
                        <img src="{{ $item->image_url ?: asset('imag/m1.jpg') }}" alt="{{ $item->title }}">
                        <span class="news-date">{{ optional($item->published_at)->format('Y-m-d') }}</span>
                    </div>
                    <div class="news-content">
                        <h3>{{ $item->title }}</h3>
                        <p>{{ $item->getExcerpt(120) }}</p>
                        <a href="{{ route('news.details', $item->slug) }}" class="news-link">اقرأ المزيد</a>
                    </div>
                </article>
            @empty
                <p>لا توجد أخبار منشورة حالياً.</p>
            @endforelse
        </div>
    </div>
</section>
@endsection
