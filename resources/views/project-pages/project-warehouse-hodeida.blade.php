@extends('layouts.app')
@section('title', 'يمن استيل - المشاريع')
@section('styles')
@endsection
@section('content')
    <section id="project" class="project-detail section-py">
      <div class="container">
        <div class="sec-head reveal">
          <span class="sec-label">أعمالنا</span>
          <h2>مستودع صناعي — الحديدة</h2>
          <p>مشروع مستودع صناعي واسع يوفر مساحة تخزين لوجستية متطورة وموقعاً استراتيجياً على الطريق الرئيسي.</p>
        </div>
        <div class="project-hero reveal">
          <div class="project-hero-grid">
            <div class="project-hero-content">
              <span class="sec-label">مشروع صناعي</span>
              <h1>مستودع أمني ومساحات تخزين كبيرة</h1>
              <p>تم تصميم المستودع لتعزيز كفاءة العمليات اللوجستية مع أرضية محملة، أنظمة تهوية متطورة ومداخل شاحنة جاهزة للعمل.</p>
              <div class="project-meta">
                <div class="meta-item"><strong>الموقع</strong><span>الحديدة، اليمن</span></div>
                <div class="meta-item"><strong>نوع المشروع</strong><span>صناعي</span></div>
                <div class="meta-item"><strong>المساحة</strong><span>2500 متر مربع</span></div>
                <div class="meta-item"><strong>مدة التنفيذ</strong><span>9 أشهر</span></div>
              </div>
              <a href="../projects.html" class="back-link"><i class="fas fa-arrow-right"></i>عودة إلى المشاريع</a>
            </div>
            <div class="project-hero-media">
              <img src="../imag/hodeida.jpg" alt="مستودع صناعي في الحديدة" loading="lazy" />
            </div>
          </div>
        </div>
        <div class="project-gallery reveal" style="--delay:100ms">
          <img src="../imag/ho1.jpg" alt="داخل المستودع الصناعي" loading="lazy" />
          <img src="../imag/ho2.jpg" alt="مساحة تخزين وجاهزية شاحنات" loading="lazy" />
          <img src="../imag/m4.jpg" alt="أرفف داخلية للمستودع" loading="lazy" />
        </div>
      </div>
    </section>
@endsection
