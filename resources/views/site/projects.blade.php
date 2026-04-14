@extends('site.layouts.app')

@section('title', 'يمن استيل - أعمالنا')

@section('styles')
@vite(['resources/css/projects.css'])
@endsection

@section('content')
    <section id="projects" class="projects section-py">
      <div class="container">
        <div class="sec-head reveal">
          <span class="sec-label">أعمالنا</span>
          <h2>مشاريع نفخر بها</h2>
          <p>نفتخر بتنفيذ مشاريع متنوعة في مختلف أنحاء اليمن</p>
        </div>
        <div class="proj-grid">
          <a class="proj-card proj-lg reveal" style="--delay:0ms" href="{{ route('projects.details', 'villa-sanaa') }}">
            <div class="proj-img"><img src="{{ asset('imag/sn.jpg') }}" alt="فيلا سكنية صنعاء" loading="lazy"/></div>
            <div class="proj-info"><span class="proj-tag">سكني</span><h4>فيلا سكنية — صنعاء</h4><p>بناء فيلا سكنية فاخرة</p></div>
          </a>
          <a class="proj-card reveal" style="--delay:100ms" href="{{ route('projects.details', 'building-taiz') }}">
            <div class="proj-img"><img src="{{ asset('imag/taiz.jpg') }}" alt="مبنى تجاري تعز" loading="lazy"/></div>
            <div class="proj-info"><span class="proj-tag">تجاري</span><h4>مبنى تجاري — تعز</h4><p>مبنى متعدد الطوابق</p></div>
          </a>
          <a class="proj-card reveal" style="--delay:200ms" href="{{ route('projects.details', 'complex-marib') }}">
            <div class="proj-img"><img src="{{ asset('imag/marib.jpg') }}" alt="مجمع سكني مأرب" loading="lazy"/></div>
            <div class="proj-info"><span class="proj-tag">مجمع</span><h4>مجمع سكني — مأرب</h4><p>مجمع متكامل الخدمات</p></div>
          </a>
          <a class="proj-card proj-wide reveal" style="--delay:300ms" href="{{ route('projects.details', 'warehouse-hodeida') }}">
            <div class="proj-img"><img src="{{ asset('imag/hodeida.jpg') }}" alt="مستودع صناعي الحديدة" loading="lazy"/></div>
            <div class="proj-info"><span class="proj-tag">صناعي</span><h4>مستودع صناعي — الحديدة</h4><p>مستودع ضخم المساحة</p></div>
          </a>
        </div>
      </div>
    </section>
@endsection
