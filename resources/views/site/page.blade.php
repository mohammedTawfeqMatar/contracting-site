@extends('site.layouts.app')

@section('title', $page->title)

@section('content')
<section class="section-py">
    <div class="container">
        <div class="sec-head">
            <span class="sec-label">صفحة</span>
            <h1>{{ $page->title }}</h1>
        </div>
        <div class="service-main-info">
            {!! $page->content !!}
        </div>
    </div>
</section>
@endsection
