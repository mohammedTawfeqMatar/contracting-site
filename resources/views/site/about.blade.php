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
              <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?auto=format&fit=crop&w=900&q=80"
                   alt="فريق يمن استيل" loading="lazy"/>
              <div class="aimg-glow" aria-hidden="true"></div>
            </div>
            <div class="aimg-sec">
              <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=400&q=80"
                   alt="موقع بناء" loading="lazy"/>
            </div>
            <div class="aexp-badge">
              <span class="aexp-num">15+</span>
              <span class="aexp-txt">عاماً<br>من الخبرة</span>
            </div>
          </div>

          <div class="about-text reveal" style="--delay:120ms">
            <span class="sec-label">من نحن</span>
            <h2>يمن استيل للمقاولات</h2>
            <p>تأسست شركة <strong>يمن استيل</strong> على يد نخبة من المهندسين والخبراء بهدف تقديم خدمات مقاولات متميزة في السوق اليمني.</p>
            <p>نؤمن بأن البناء ليس مجرد إنشاء مبانٍ، بل هو بناء ثقة وسمعة تُبنى على أساس المتانة والأمانة.</p>

            <ul class="about-list" role="list">
              <li><i class="fas fa-check" aria-hidden="true"></i><span>استخدام مواد بناء عالية الجودة</span></li>
              <li><i class="fas fa-check" aria-hidden="true"></i><span>الاستعانة بمهندسين ذوي خبرة واسعة</span></li>
              <li><i class="fas fa-check" aria-hidden="true"></i><span>الالتزام التام بالمواعيد المحددة</span></li>
              <li><i class="fas fa-check" aria-hidden="true"></i><span>تقديم أسعار تنافسية ومناسبة</span></li>
            </ul>

            <div class="about-stats" aria-label="إحصائيات">
              <div class="ast"><h4 class="counter" data-target="150">0</h4><p>مشروع منجز</p></div>
              <div class="ast"><h4 class="counter" data-target="200">0</h4><p>عميل سعيد</p></div>
              <div class="ast"><h4 class="counter" data-target="15">0</h4><p>سنة خبرة</p></div>
            </div>

            <a href="{{ route('contact') }}" class="cta-primary">
              <span>ابدأ مشروعك معنا</span>
              <span class="cta-ico"><i class="fas fa-chevron-left"></i></span>
            </a>
          </div>
        </div>
      </div>
    </section>
@endsection
