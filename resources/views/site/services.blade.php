@extends('site.layouts.app')

@section('title', 'يمن استيل - خدماتنا')

@section('styles')
@vite(['resources/css/services.css'])
@endsection

@section('content')
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
                    <p>{{ \Illuminate\Support\Str::limit(strip_tags($service->description), 120) }}</p>
                    <div class="svc-line"></div>
                </a>
            @empty
                <p>لا توجد خدمات منشورة حالياً.</p>
            @endforelse
            <div class="svc-card svc-cta reveal">
                <p>هل تحتاج خدمة مخصصة؟</p>
                <h3>تحدث معنا مباشرة</h3>
                <a href="{{ route('contact') }}" class="cta-primary cta-sm"><span>اتصل الآن</span></a>
            </div>
        </div>
    </div>
</section>
@endsection
