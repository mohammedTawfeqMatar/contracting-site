@extends('layouts.app')
@section('title', 'يمن استيل - المشاريع')
@section('styles')
@endsection
@section('content')
    <section id="project" class="project-detail section-py">
      <div class="container">
        <div class="sec-head reveal">
          <span class="sec-label">أعمالنا</span>
          <h2>فيلا سكنية — صنعاء</h2>
          <p>مشروع فيلا سكنية فاخرة صُمم للتوازن بين الراحة والأناقة في أرقى أحياء العاصمة.</p>
        </div>
        <div class="project-hero reveal">
          <div class="project-hero-grid">
            <div class="project-hero-content">
              <span class="sec-label">مشروع مميز</span>
              <h1>فيلا سكنية متكاملة تشطيب فاخر</h1>
              <p>نفذنا هذا المشروع لتقديم فيلا مميزة تتضمن صالة واسعة، غرف نوم مطلة، حدائق خاصة، وأنظمة عزل حراري وصوتي عالية الجودة.</p>
              <div class="project-meta">
                <div class="meta-item"><strong>الموقع</strong><span>صنعاء، اليمن</span></div>
                <div class="meta-item"><strong>نوع المشروع</strong><span>سكني فاخر</span></div>
                <div class="meta-item"><strong>المساحة</strong><span>420 متر مربع</span></div>
                <div class="meta-item"><strong>مدة التنفيذ</strong><span>10 أشهر</span></div>
              </div>
              <a href="../projects.html" class="back-link"><i class="fas fa-arrow-right"></i>عودة إلى المشاريع</a>
            </div>
            <div class="project-hero-media">
              <img src="../imag/sn.jpg" alt="فيلا سكنية فاخرة" loading="lazy" />
            </div>
          </div>
        </div>
        <div class="project-gallery reveal" style="--delay:100ms">
          <img src="../imag/ff.jpg" alt="جلسة خارجية في الفيلا" loading="lazy" />
          <img src="../imag/fff.jpg" alt="مدخل الفيلا" loading="lazy" />
          <img src="../imag/f.jpg" alt="تصميم داخلي فاخر" loading="lazy" />
        </div>
      </div>
    </section>
@endsection
