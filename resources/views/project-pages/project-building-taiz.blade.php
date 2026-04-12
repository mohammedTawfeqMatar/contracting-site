@extends('layouts.app')
@section('title', 'يمن استيل - المشاريع')
@section('styles')
    <link rel='stylesheet' href='{{ asset("css/project-building-taiz.css") }}' />
@endsection
@section('content')
    <section id="project" class="project-detail section-py">
      <div class="container">
        <div class="sec-head reveal">
          <span class="sec-label">أعمالنا</span>
          <h2>مبنى تجاري — تعز</h2>
          <p>مشروع مبنى تجاري متعدد الطوابق يوفر مساحات مكتبية ومحلات تجارية مع تصميم حضري عصري.</p>
        </div>
        <div class="project-hero reveal">
          <div class="project-hero-grid">
            <div class="project-hero-content">
              <span class="sec-label">إنجاز مبتكر</span>
              <h1>مبنى تجاري عصري بواجهات زجاجية</h1>
              <p>أنشأنا هذا المبنى التجاري ليدعم الأعمال بمساحات مرنة، مصاعد حديثة، ومواقف سيارات داخلية مع تشطيبات عصرية.</p>
              <div class="project-meta">
                <div class="meta-item"><strong>الموقع</strong><span>تعز، اليمن</span></div>
                <div class="meta-item"><strong>نوع المشروع</strong><span>تجاري متعدد الطوابق</span></div>
                <div class="meta-item"><strong>عدد الطوابق</strong><span>8 طوابق</span></div>
                <div class="meta-item"><strong>مدة التنفيذ</strong><span>12 شهر</span></div>
              </div>
              <a href="../projects.html" class="back-link"><i class="fas fa-arrow-right"></i>عودة إلى المشاريع</a>
            </div>
            <div class="project-hero-media">
              <img src="../imag/taiz.jpg" alt="مبنى تجاري في تعز" loading="lazy" />
            </div>
          </div>
        </div>
        <div class="project-gallery reveal" style="--delay:100ms">
          <img src="../imag/ta1.jpg" alt="واجهة المبنى التجاري" loading="lazy" />
          <img src="../imag/ta2.jpg" alt="تصميم داخلي للمبنى" loading="lazy" />
          <img src="../imag/ta3.jpg" alt="ممر داخلي في المبنى" loading="lazy" />
        </div>
      </div>
    </section>
@endsection
