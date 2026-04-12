@extends('layouts.app')
@section('title', 'يمن استيل - المشاريع')
@section('styles')
@endsection
@section('content')
    <section id="project" class="project-detail section-py">
      <div class="container">
        <div class="sec-head reveal">
          <span class="sec-label">أعمالنا</span>
          <h2>مجمع سكني — مأرب</h2>
          <p>مجمع سكني متكامل الخدمات يوفر وحدات حديثة ومساحات خضراء في بيئة آمنة ومجهزة بالكامل.</p>
        </div>
        <div class="project-hero reveal">
          <div class="project-hero-grid">
            <div class="project-hero-content">
              <span class="sec-label">مجمع متكامل</span>
              <h1>مجمع سكني بمرافق نقية ومساحات واسعة</h1>
              <p>صمم المشروع ليشمل وحدات سكنية، موقف للمركبات، حدائق داخلية، ومسارات مشاة مريحة مع تشطيبات عالية الجودة.</p>
              <div class="project-meta">
                <div class="meta-item"><strong>الموقع</strong><span>مأرب، اليمن</span></div>
                <div class="meta-item"><strong>نوع المشروع</strong><span>مجمع سكني</span></div>
                <div class="meta-item"><strong>عدد الوحدات</strong><span>24 وحدة</span></div>
                <div class="meta-item"><strong>مدة التنفيذ</strong><span>14 شهر</span></div>
              </div>
              <a href="../projects.html" class="back-link"><i class="fas fa-arrow-right"></i>عودة إلى المشاريع</a>
            </div>
            <div class="project-hero-media">
              <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?auto=format&fit=crop&w=1100&q=80" alt="مجمع سكني في مأرب" loading="lazy" />
            </div>
          </div>
        </div>
        <div class="project-gallery reveal" style="--delay:100ms">
          <img src="../imag/m1.jpg" alt="حديقة في المجمع السكني" loading="lazy" />
          <img src="../imag/ma2.jpg" alt="مشهد داخلي للمجمع السكني" loading="lazy" />
          <img src="../imag/ma3.jpg" alt="مساحات خضراء في المجمع" loading="lazy" />
        </div>
      </div>
    </section>
@endsection
