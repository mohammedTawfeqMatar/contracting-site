@extends('site.layouts.app')

@section('title', 'يمن استيل - للمقاولات والبناء')

@section('styles')
@vite(['resources/css/index.css'])
@vite(['resources/css/services.css'])
    {{-- <link rel="stylesheet" href="{{ asset('css/index.css') }}" /> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/services.css') }}" /> --}}
@endsection

@section('content')
    <!-- ═══ HERO ═══ -->
    <section id="home" class="hero" aria-label="الرئيسية">
      <div class="hero-media" aria-hidden="true">
        <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=1920&auto=format&fit=crop&q=85"
             alt="" loading="eager" fetchpriority="high"/>
        <div class="hero-vignette"></div>
      </div>
      <div class="hero-grid-lines" aria-hidden="true"></div>
      <div class="hero-shapes" aria-hidden="true">
        <span class="sh sh-1"></span>
        <span class="sh sh-2"></span>
        <span class="sh sh-3"></span>
        <span class="sh sh-4"></span>
      </div>

      <div class="container hero-body">
        <div class="hero-badge reveal-up">
          <span class="badge-dot"></span>
          شركة مقاولات رائدة منذ 2009
        </div>

        <h1 class="hero-title reveal-up" style="--d:80ms">
          نبني <em>المستقبل</em>
          <span class="hero-title-small">بأمانة وإتقان</span>
        </h1>

        <p class="hero-desc reveal-up" style="--d:200ms">
          يمن استيل — شريكك الموثوق في تنفيذ المشاريع السكنية والتجارية والصناعية بأعلى معايير الجودة.
        </p>

        <div class="hero-actions reveal-up" style="--d:320ms">
          <a href="#projects" class="cta-primary">
            <span>استعرض مشاريعنا</span>
            <span class="cta-ico"><i class="fas fa-chevron-left"></i></span>
          </a>
          <a href="#contact" class="cta-ghost">تحدث معنا</a>
        </div>

        <div class="hero-metrics reveal-up" style="--d:440ms">
          <div class="metric"><b>+150</b><span>مشروع منجز</span></div>
          <div class="metric-div" aria-hidden="true"></div>
          <div class="metric"><b>+200</b><span>عميل راضٍ</span></div>
          <div class="metric-div" aria-hidden="true"></div>
          <div class="metric"><b>15+</b><span>سنة خبرة</span></div>
        </div>
      </div>

      <a href="#services" class="hero-scroll" aria-label="التمرير للأسفل">
        <i class="fas fa-chevron-down"></i>
      </a>
    </section>

    <!-- ═══ TRUST BAR ═══ -->
    <div class="trust-bar" aria-label="مؤشرات الثقة">
      <div class="container trust-inner">
        <div class="trust-item reveal"><i class="fas fa-hard-hat" aria-hidden="true"></i><div><strong>فريق متخصص</strong><span>مهندسون ذوو خبرة</span></div></div>
        <div class="trust-sep" aria-hidden="true"></div>
        <div class="trust-item reveal" style="--delay:80ms"><i class="fas fa-clock" aria-hidden="true"></i><div><strong>التزام بالمواعيد</strong><span>تسليم في الوقت المحدد</span></div></div>
        <div class="trust-sep" aria-hidden="true"></div>
        <div class="trust-item reveal" style="--delay:160ms"><i class="fas fa-medal" aria-hidden="true"></i><div><strong>جودة مضمونة</strong><span>أفضل المواد العالمية</span></div></div>
        <div class="trust-sep" aria-hidden="true"></div>
        <div class="trust-item reveal" style="--delay:240ms"><i class="fas fa-shield-alt" aria-hidden="true"></i><div><strong>معايير السلامة</strong><span>أعلى معايير الأمان</span></div></div>
      </div>
    </div>

    <!-- ═══ SERVICES ═══ -->
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
            <h3>التصميم المعماري</h3>
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
          <div class="svc-card svc-cta reveal" style="--delay:400ms">
            <p>هل تحتاج خدمة مخصصة؟</p>
            <h3>تحدث معنا مباشرة</h3>
            <a href="#contact" class="cta-primary cta-sm">
              <span>اتصل الآن</span>
              <span class="cta-ico"><i class="fas fa-chevron-left"></i></span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- ═══ ABOUT ═══ -->
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

            <a href="#contact" class="cta-primary">
              <span>ابدأ مشروعك معنا</span>
              <span class="cta-ico"><i class="fas fa-chevron-left"></i></span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- ═══ PROJECTS ═══ -->
    <section id="projects" class="projects section-py">
      <div class="container">
        <div class="sec-head reveal">
          <span class="sec-label">أعمالنا</span>
          <h2>مشاريع نفخر بها</h2>
          <p>نفتخر بتنفيذ مشاريع متنوعة في مختلف أنحاء اليمن</p>
        </div>
        <div class="proj-grid">
          <a class="proj-card proj-lg reveal" style="--delay:0ms" href="{{ route('projects.villa-sanaa') }}">
            <div class="proj-img"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=900&q=80" alt="فيلا سكنية صنعاء" loading="lazy"/></div>
            <div class="proj-info"><span class="proj-tag">سكني</span><h4>فيلا سكنية — صنعاء</h4><p>بناء فيلا سكنية فاخرة</p></div>
          </a>
          <a class="proj-card reveal" style="--delay:100ms" href="{{ route('projects.building-taiz') }}">
            <div class="proj-img"><img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=600&q=80" alt="مبنى تجاري تعز" loading="lazy"/></div>
            <div class="proj-info"><span class="proj-tag">تجاري</span><h4>مبنى تجاري — تعز</h4><p>مبنى متعدد الطوابق</p></div>
          </a>
          <a class="proj-card reveal" style="--delay:200ms" href="{{ route('projects.complex-marib') }}">
            <div class="proj-img"><img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?auto=format&fit=crop&w=600&q=80" alt="مجمع سكني مأرب" loading="lazy"/></div>
            <div class="proj-info"><span class="proj-tag">مجمع</span><h4>مجمع سكني — مأرب</h4><p>مجمع متكامل الخدمات</p></div>
          </a>
          <a class="proj-card proj-wide reveal" style="--delay:300ms" href="{{ route('projects.warehouse-hodeida') }}">
            <div class="proj-img"><img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=900&q=80" alt="مستودع صناعي الحديدة" loading="lazy"/></div>
            <div class="proj-info"><span class="proj-tag">صناعي</span><h4>مستودع صناعي — الحديدة</h4><p>مستودع ضخم المساحة</p></div>
          </a>
        </div>
      </div>
    </section>

    <!-- ═══ CONTACT ═══ -->
    <section id="contact" class="contact section-py">
      <div class="container">
        <div class="sec-head reveal">
          <span class="sec-label">اتصل بنا</span>
          <h2>نحن هنا لمساعدتك</h2>
          <p>أرسل لنا رسالتك وسنتواصل معك في أقرب وقت</p>
        </div>
        <div class="contact-layout">
          <div class="contact-card reveal">
            <h3>معلومات التواصل</h3>
            <p class="cc-sub">نسعد بخدمتك على مدار أيام العمل</p>
            <ul class="ci-list" role="list">
              <li>
                <div class="ci-icon"><i class="fas fa-map-marker-alt"></i></div>
                <div><strong>العنوان</strong><span>صنعاء — شارع القيادة، مقابل جامعة العلوم والتكنولوجيا</span></div>
              </li>
              <li>
                <div class="ci-icon"><i class="fas fa-phone-alt"></i></div>
                <div><strong>الهاتف</strong><span>+967774984145</span><span>+967774984145</span></div>
              </li>
              <li>
                <div class="ci-icon"><i class="fas fa-envelope"></i></div>
                <div><strong>البريد الإلكتروني</strong><span>alselwiabdulsamad@gmail.com</span></div>
              </li>
              <li>
                <div class="ci-icon"><i class="fas fa-clock"></i></div>
                <div><strong>أوقات العمل</strong><span>السبت — الخميس: 8ص — 6م</span></div>
              </li>
            </ul>
            <div class="cc-social" aria-label="تواصل اجتماعي">
              <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
              <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
              <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
              <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>

          <form class="contact-form reveal" id="contactForm" style="--delay:150ms" novalidate>
            <h3>أرسل رسالتك</h3>
            <div class="frow">
              <div class="fg">
                <label for="fullName">الاسم الكامل</label>
                <input id="fullName" name="fullName" type="text" placeholder="ABDULSAMAD ALSELWI " autocomplete="name" required />
              </div>
              <div class="fg">
                <label for="phone">رقم الهاتف</label>
                <input id="phone" name="phone" type="tel" placeholder="+967774984145" autocomplete="tel" />
              </div>
            </div>
            <div class="fg">
              <label for="email">البريد الإلكتروني</label>
              <input id="email" name="email" type="email" placeholder="alselwiabdulsamad@gmail.com" autocomplete="email" required />
            </div>
            <div class="fg">
              <label for="message">رسالتك</label>
              <textarea id="message" name="message" placeholder="أخبرنا عن مشروعك..." rows="5" required></textarea>
            </div>
            <button type="submit" class="btn-submit">
              <span>إرسال الرسالة</span>
              <i class="fas fa-paper-plane" aria-hidden="true"></i>
            </button>
            <p class="form-note"><i class="fas fa-lock" aria-hidden="true"></i> بياناتك محفوظة بأمان تام</p>
          </form>
        </div>
      </div>
    </section>
@endsection
