@extends('site.layouts.app')

@section('title', 'يمن استيل - الوظائف')

@section('styles')
@vite(['resources/css/careers.css'])
    {{-- <link rel="stylesheet" href="{{ asset('css/careers.css') }}" /> --}}
@endsection

@section('content')
    <!-- ═══ CAREERS HERO ═══ -->
    <section class="careers-hero">
        <div class="container">
            <div class="hero-content reveal">
                <span class="sec-label">انضم إلينا</span>
                <h1>فرص وظيفية مميزة</h1>
                <p>نبحث عن مواهب متميزة للانضمام إلى فريقنا المتخصص في مجال المقاولات والبناء</p>
                <a href="#openings" class="cta-primary">
                    <span>استعرض الوظائف</span>
                    <i class="fas fa-arrow-left" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- ═══ COMPANY CULTURE ═══ -->
    <section class="culture section-py">
        <div class="container">
            <div class="sec-head reveal">
                <span class="sec-label">ثقافتنا</span>
                <h2>بيئة عمل محفزة وداعمة</h2>
                <p>نؤمن بأن النجاح يأتي من خلال فريق متماسك ومتحفز</p>
            </div>

            <div class="culture-grid">
                <div class="culture-card reveal" style="--delay:0ms">
                    <div class="cc-icon"><i class="fas fa-users"></i></div>
                    <h3>فريق متخصص</h3>
                    <p>نعمل مع أفضل المهندسين والفنيين في المجال لتحقيق أعلى معايير الجودة.</p>
                </div>

                <div class="culture-card reveal" style="--delay:80ms">
                    <div class="cc-icon"><i class="fas fa-graduation-cap"></i></div>
                    <h3>التطوير المستمر</h3>
                    <p>نوفر برامج تدريب وتطوير مهني لضمان نمو مسارك الوظيفي.</p>
                </div>

                <div class="culture-card reveal" style="--delay:160ms">
                    <div class="cc-icon"><i class="fas fa-shield-alt"></i></div>
                    <h3>الأمان والسلامة</h3>
                    <p>السلامة المهنية أولويتنا الأساسية في جميع مشاريعنا.</p>
                </div>

                <div class="culture-card reveal" style="--delay:240ms">
                    <div class="cc-icon"><i class="fas fa-award"></i></div>
                    <h3>تقدير الإنجازات</h3>
                    <p>نقدر ونكافئ الأداء المتميز والمساهمات الفعالة.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ OPEN POSITIONS ═══ -->
    <section id="openings" class="openings section-py">
        <div class="container">
            <div class="sec-head reveal">
                <span class="sec-label">الوظائف المتاحة</span>
                <h2>فرص عمل حالية</h2>
                <p>استعرض الوظائف المتاحة والمتطلبات الخاصة بكل منها</p>
            </div>

            <div class="jobs-list">
                <!-- Job 1 -->
                <div class="job-card reveal" style="--delay:0ms">
                    <div class="job-header">
                        <div>
                            <h3>مهندس مدني أول</h3>
                            <p class="job-location"><i class="fas fa-map-marker-alt"></i> صنعاء</p>
                        </div>
                        <span class="job-type">دوام كامل</span>
                    </div>
                    <div class="job-details">
                        <div class="detail-item">
                            <span class="detail-label">الخبرة المطلوبة:</span>
                            <span>5+ سنوات</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">المؤهل:</span>
                            <span>بكالوريوس هندسة مدنية</span>
                        </div>
                    </div>
                    <p class="job-desc">نبحث عن مهندس مدني ذي خبرة عملية واسعة في إدارة المشاريع الكبرى والإشراف على الأعمال الإنشائية.</p>
                    <div class="job-skills">
                        <span class="skill">إدارة المشاريع</span>
                        <span class="skill">الرسومات الهندسية</span>
                        <span class="skill">الإشراف الميداني</span>
                        <span class="skill">معايير الجودة</span>
                    </div>
                    <a href="{{ route('contact') }}" class="job-apply">
                        <span>تقديم الطلب</span>
                        <i class="fas fa-arrow-left"></i>
                    </a>
                </div>

                <!-- Job 2 -->
                <div class="job-card reveal" style="--delay:80ms">
                    <div class="job-header">
                        <div>
                            <h3>مهندس كهرباء</h3>
                            <p class="job-location"><i class="fas fa-map-marker-alt"></i> صنعاء</p>
                        </div>
                        <span class="job-type">دوام كامل</span>
                    </div>
                    <div class="job-details">
                        <div class="detail-item">
                            <span class="detail-label">الخبرة المطلوبة:</span>
                            <span>3+ سنوات</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">المؤهل:</span>
                            <span>بكالوريوس هندسة كهربائية</span>
                        </div>
                    </div>
                    <p class="job-desc">متخصص في تصميم وتركيب الأنظمة الكهربائية للمباني السكنية والتجارية بمعايير عالية.</p>
                    <div class="job-skills">
                        <span class="skill">الأنظمة الكهربائية</span>
                        <span class="skill">التصميم بـ CAD</span>
                        <span class="skill">الطاقة الشمسية</span>
                        <span class="skill">الأتمتة</span>
                    </div>
                    <a href="{{ route('contact') }}" class="job-apply">
                        <span>تقديم الطلب</span>
                        <i class="fas fa-arrow-left"></i>
                    </a>
                </div>

                <!-- Job 3 -->
                <div class="job-card reveal" style="--delay:160ms">
                    <div class="job-header">
                        <div>
                            <h3>فني صحي ومعالجة مياه</h3>
                            <p class="job-location"><i class="fas fa-map-marker-alt"></i> صنعاء</p>
                        </div>
                        <span class="job-type">دوام كامل</span>
                    </div>
                    <div class="job-details">
                        <div class="detail-item">
                            <span class="detail-label">الخبرة المطلوبة:</span>
                            <span>2+ سنوات</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">المؤهل:</span>
                            <span>دبلوم فني أو خبرة عملية</span>
                        </div>
                    </div>
                    <p class="job-desc">فني متخصص في تركيب وصيانة الأنظمة الصحية ومعالجة المياه في المشاريع الكبرى.</p>
                    <div class="job-skills">
                        <span class="skill">الأنظمة الصحية</span>
                        <span class="skill">معالجة المياه</span>
                        <span class="skill">الصيانة الدورية</span>
                        <span class="skill">السلامة المهنية</span>
                    </div>
                    <a href="{{ route('contact') }}" class="job-apply">
                        <span>تقديم الطلب</span>
                        <i class="fas fa-arrow-left"></i>
                    </a>
                </div>

                <!-- Job 4 -->
                <div class="job-card reveal" style="--delay:240ms">
                    <div class="job-header">
                        <div>
                            <h3>مدير مشاريع</h3>
                            <p class="job-location"><i class="fas fa-map-marker-alt"></i> صنعاء</p>
                        </div>
                        <span class="job-type">دوام كامل</span>
                    </div>
                    <div class="job-details">
                        <div class="detail-item">
                            <span class="detail-label">الخبرة المطلوبة:</span>
                            <span>7+ سنوات</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">المؤهل:</span>
                            <span>بكالوريوس + شهادة PMP</span>
                        </div>
                    </div>
                    <p class="job-desc">قيادة فريق متخصص وإدارة المشاريع الكبرى من البداية حتى الانتهاء مع ضمان الجودة والالتزام بالمواعيد.</p>
                    <div class="job-skills">
                        <span class="skill">إدارة الفريق</span>
                        <span class="skill">إدارة الميزانية</span>
                        <span class="skill">التخطيط الاستراتيجي</span>
                        <span class="skill">التواصل</span>
                    </div>
                    <a href="{{ route('contact') }}" class="job-apply">
                        <span>تقديم الطلب</span>
                        <i class="fas fa-arrow-left"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ BENEFITS ═══ -->
    <section class="benefits section-py">
        <div class="container">
            <div class="sec-head reveal">
                <span class="sec-label">المزايا</span>
                <h2>ما نقدمه لموظفينا</h2>
                <p>نقدم حزمة شاملة من المزايا والحوافز</p>
            </div>

            <div class="benefits-grid">
                <div class="benefit-card reveal" style="--delay:0ms">
                    <div class="bc-icon"><i class="fas fa-briefcase"></i></div>
                    <h3>راتب تنافسي</h3>
                    <p>رواتب تنافسية وفقاً لسنوات الخبرة والمؤهلات.</p>
                </div>

                <div class="benefit-card reveal" style="--delay:80ms">
                    <div class="bc-icon"><i class="fas fa-heart"></i></div>
                    <h3>تأمين صحي</h3>
                    <p>تأمين صحي شامل للموظف والعائلة.</p>
                </div>

                <div class="benefit-card reveal" style="--delay:160ms">
                    <div class="bc-icon"><i class="fas fa-calendar-alt"></i></div>
                    <h3>إجازات مدفوعة</h3>
                    <p>إجازات سنوية مدفوعة وإجازات مرضية.</p>
                </div>

                <div class="benefit-card reveal" style="--delay:240ms">
                    <div class="bc-icon"><i class="fas fa-book"></i></div>
                    <h3>تدريب مستمر</h3>
                    <p>برامج تدريب وتطوير مهني منتظمة.</p>
                </div>

                <div class="benefit-card reveal" style="--delay:320ms">
                    <div class="bc-icon"><i class="fas fa-chart-line"></i></div>
                    <h3>فرص ترقي</h3>
                    <p>مسارات وظيفية واضحة وفرص للترقي.</p>
                </div>

                <div class="benefit-card reveal" style="--delay:400ms">
                    <div class="bc-icon"><i class="fas fa-handshake"></i></div>
                    <h3>بيئة عمل ممتازة</h3>
                    <p>بيئة عمل إيجابية وداعمة وتعاونية.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ CTA SECTION ═══ -->
    <section class="careers-cta section-py">
        <div class="container">
            <div class="cta-content reveal">
                <h2>هل أنت مهتم بالانضمام إلينا؟</h2>
                <p>أرسل لنا سيرتك الذاتية وتفاصيل خبرتك</p>
                <a href="{{ route('contact') }}" class="cta-primary cta-lg">
                    <span>تواصل معنا الآن</span>
                    <i class="fas fa-arrow-left" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </section>
@endsection
