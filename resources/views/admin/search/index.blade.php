@extends('admin.layouts.app')

@section('title', 'بحث لوحة التحكم')
@section('page_title', 'نتائج البحث')

@section('breadcrumb')
    <li class="breadcrumb-item active">البحث</li>
@endsection

@section('content')
<div class="mb-3">
    <strong>كلمة البحث:</strong> {{ $q ?: '---' }}
</div>

@php
    $sections = [
        'المشاريع' => $projects,
        'الخدمات' => $services,
        'الأخبار' => $news,
        'الصفحات' => $pages,
        'المناقصات' => $tenders,
        'الوظائف' => $jobs,
        'الرسائل' => $contacts,
    ];
@endphp

@foreach($sections as $name => $items)
    <div class="card mb-3">
        <div class="card-header"><strong>{{ $name }}</strong> ({{ $items->count() }})</div>
        <div class="card-body">
            @if($items->isEmpty())
                <span class="text-muted">لا نتائج.</span>
            @else
                <ul class="mb-0">
                    @foreach($items as $item)
                        <li>
                            {{ $item->title ?? $item->full_name ?? ('#' . $item->id) }}
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
@endforeach
@endsection
