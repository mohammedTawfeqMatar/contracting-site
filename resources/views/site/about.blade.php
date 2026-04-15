@extends('site.layouts.app')

@section('title', 'يمن استيل - من نحن')

@section('styles')
@vite(['resources/css/about.css'])
    {{-- <link rel="stylesheet" href="{{ asset('css/about.css') }}" /> --}}
@endsection

@section('content')
<section id="about" class="about section-py">
    <div class="container">
        <div class="about-grid">
            <div class="about-visuals reveal">
                <div class="aimg-main">
                    <img src="{{ $siteSettings['about_main_image'] ?? 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?auto=format&fit=crop&w=900&q=80' }}" alt="عن الشركة" loading="lazy">
                </div>
            </div>
            <div class="about-text reveal" style="--delay:120ms">
                <span class="sec-label">من نحن</span>
                <h2>{{ $siteSettings['about_title'] ?? 'يمن استيل للمقاولات' }}</h2>
                <p>{{ $siteSettings['about_text_1'] ?? 'نقدم خدمات مقاولات متكاملة بإدارة احترافية وجودة عالية.' }}</p>
                <p>{{ $siteSettings['about_text_2'] ?? 'هدفنا بناء مشاريع مستدامة وتحقيق رضا العملاء.' }}</p>
                <div class="about-stats" aria-label="إحصائيات">
                    <div class="ast"><h4>{{ $stats['projects'] }}</h4><p>مشروع</p></div>
                    <div class="ast"><h4>{{ $stats['services'] }}</h4><p>خدمة</p></div>
                    <div class="ast"><h4>{{ $stats['years'] }}</h4><p>سنة خبرة</p></div>
                    <div class="ast"><h4>{{ $stats['jobs'] }}</h4><p>وظيفة متاحة</p></div>
                </div>
                <a href="{{ route('contact') }}" class="cta-primary"><span>ابدأ مشروعك معنا</span></a>
            </div>
        </div>
    </div>
</section>
@endsection
