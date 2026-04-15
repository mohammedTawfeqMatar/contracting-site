@extends('site.layouts.app')

@section('title', 'نتائج البحث')

@section('content')
<section class="section-py">
    <div class="container">
        <div class="sec-head">
            <span class="sec-label">البحث</span>
            <h1>نتائج البحث عن: {{ $q ?: '---' }}</h1>
        </div>

        @php
            $sections = [
                'الخدمات' => $services,
                'المشاريع' => $projects,
                'الأخبار' => $news,
                'الوظائف' => $jobs,
                'المناقصات' => $tenders,
                'الصفحات' => $pages,
            ];
        @endphp

        @foreach($sections as $sectionName => $items)
            <div class="card" style="margin-bottom:20px;padding:16px;border:1px solid #eee;border-radius:10px;">
                <h3 style="margin-bottom:12px;">{{ $sectionName }} ({{ $items->count() }})</h3>
                @if($items->isEmpty())
                    <p class="text-muted">لا نتائج.</p>
                @else
                    <ul>
                        @foreach($items as $item)
                            <li style="margin-bottom:8px;">
                                @if($sectionName === 'الخدمات')
                                    <a href="{{ route('services.details', $item->slug) }}">{{ $item->title }}</a>
                                @elseif($sectionName === 'المشاريع')
                                    <a href="{{ route('projects.details', $item->slug) }}">{{ $item->title }}</a>
                                @elseif($sectionName === 'الأخبار')
                                    <a href="{{ route('news.details', $item->slug) }}">{{ $item->title }}</a>
                                @elseif($sectionName === 'الوظائف')
                                    <a href="{{ route('careers.apply', $item->id) }}">{{ $item->title }}</a>
                                @elseif($sectionName === 'المناقصات')
                                    <a href="{{ route('tenders.request', $item->id) }}">{{ $item->title }}</a>
                                @else
                                    <a href="{{ route('pages.show', $item->slug) }}">{{ $item->title }}</a>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        @endforeach
    </div>
</section>
@endsection
