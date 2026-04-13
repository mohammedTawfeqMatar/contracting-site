@extends('site.layouts.app')

@section('title', 'يمن استيل - خدماتنا')

@section('styles')
@vite(['resources/css/services.css'])
    {{-- <link rel="stylesheet" href="{{ asset('css/services.css') }}" /> --}}
@endsection

@section('content')
    <section id="services" class="services section-py">
      <div class="container">
        <div class="sec-head reveal">
          <span class="sec-label">خدماتنا</span>
          <h2>حلول بناء متكاملة</h2>
          <p>نقدم خدمات شاملة من التصميم حتى التسليم النهائي</p>
        </div>

        <div class="svc-grid">
          <a class="svc-card reveal" href="{{ route('services.construction') }}" aria-label="التعمير والبناء" style="--delay:0ms">
            <div class="svc-num">01</div>
            <div class="svc-icon"><i class="fas fa-city"></i></div>
            <h3>التعمير والبناء</h3>
            <p>تنفيذ مشاريع البناء من الأساس حتى التشطيب النهائي بأعلى جودة.</p>
            <div class="svc-line"></div>
          </a>
          <a class="svc-card reveal" href="{{ route('services.architecture') }}" aria-label="التصميم المعماري" style="--delay:80ms">
            <div class="svc-num">02</div>
            <div class="svc-icon"><i class="fas fa-pencil-ruler"></i></div>
            <h3>أعمال الهناجر والبيوت الجاهزة </h3>
            <p>تصاميم عصرية وعملية تناسب ذوقك واحتياجات المشروع.</p>
            <div class="svc-line"></div>
          </a>
          <a class="svc-card reveal" href="{{ route('services.finishes') }}" aria-label="التشطيبات" style="--delay:160ms">
            <div class="svc-num">03</div>
            <div class="svc-icon"><i class="fas fa-tools"></i></div>
            <h3>التشطيبات</h3>
            <p>أعمال التشطيب الداخلي والخارجي على أعلى مستوى.</p>
            <div class="svc-line"></div>
          </a>
          <a class="svc-card reveal" href="{{ route('services.civil') }}" aria-label="الهندسة المدنية" style="--delay:240ms">
            <div class="svc-num">04</div>
            <div class="svc-icon"><i class="fas fa-ruler-combined"></i></div>
            <h3>الهندسة المدنية</h3>
            <p>تصميم وتنفيذ الأعمال الإنشائية بكفاءة عالية.</p>
            <div class="svc-line"></div>
          </a>
          <a class="svc-card reveal" href="{{ route('services.equipment') }}" aria-label="المعدات الثقيلة" style="--delay:320ms">
            <div class="svc-num">05</div>
            <div class="svc-icon"><i class="fas fa-truck-pickup"></i></div>
            <h3>المعدات الثقيلة</h3>
            <p>أسطول كامل من المعدات الحديثة لتنفيذ المشاريع الكبرى.</p>
            <div class="svc-line"></div>
          </a>
           <a class="svc-card reveal" aria-label="أعمال أبواب مدرعة" style="--delay:320ms">
            <div class="svc-num">06</div>
            <div class="svc-icon"><i class="fas fa-door-closed"></i></div>
            <h3>أعمال أبواب مدرعة </h3>
            <p>أعمال أبواب مدرعة ونوافذ ضد الرصاص  .</p>
            <div class="svc-line"></div>
          </a>
           <a class="svc-card reveal" aria-label="الديكورات والإثاث" style="--delay:320ms">
            <div class="svc-num">07</div>
            <div class="svc-icon"><i class="fas fa-chair"></i></div>
            <h3>الديكورات والإثاث </h3>
            <p>  تصاميم عصرية تضيف لمسة جمال وأناقة لمساحتك   .</p>
            <div class="svc-line"></div>
          </a>
           <a class="svc-card reveal" aria-label="المضلات والخيام" style="--delay:320ms">
            <div class="svc-num">08</div>
            <div class="svc-icon"><i class="fas fa-campground"></i></div>
            <h3> المضلات والخيام</h3>
            <p>       تنفيذ المضلات والخيام بأحدث التصاميم وجودة عالية تناسب مختلف الاستخدامات.</p>
            <div class="svc-line"></div>
          </a>
          <div class="svc-card svc-cta reveal" style="--delay:400ms">
            <p>هل تحتاج خدمة مخصصة؟</p>
            <h3>تحدث معنا مباشرة</h3>
            <a href="{{ route('contact') }}" class="cta-primary cta-sm">
              <span>اتصل الآن</span>
              <span class="cta-ico"><i class="fas fa-chevron-left"></i></span>
            </a>
          </div>
        </div>
      </div>
    </section>
@endsection
