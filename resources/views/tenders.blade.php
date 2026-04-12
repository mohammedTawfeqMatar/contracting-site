@extends('layouts.app')

@section('title', 'يمن استيل - المناقصات')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/tenders.css') }}" />
@endsection

@section('content')
    <!-- ═══ TENDERS HERO ═══ -->
    <section class="tenders-hero">
        <div class="container">
            <div class="hero-content reveal">
                <span class="sec-label">فرص العمل</span>
                <h1>مناقصات وفرص تعاقد</h1>
                <p>فرص تعاقدية مع شركة يمن استيل للمقاولات والبناء للموردين والمقاولين من الباطن</p>
                <a href="#current-tenders" class="cta-primary">
                    <span>استعرض المناقصات</span>
                    <i class="fas fa-arrow-left" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- ═══ TENDER GUIDELINES ═══ -->
    <section class="guidelines section-py">
        <div class="container">
            <div class="sec-head reveal">
                <span class="sec-label">شروط المشاركة</span>
                <h2>متطلبات تقديم العروض</h2>
                <p>تعرف على الشروط والمتطلبات الأساسية للمشاركة في مناقصاتنا</p>
            </div>

            <div class="guidelines-grid">
                <div class="guideline-card reveal" style="--delay:0ms">
                    <div class="gc-num">01</div>
                    <h3>التسجيل والترخيص</h3>
                    <p>يجب أن تكون الشركة مسجلة رسمياً ولديها جميع التراخيص والموافقات اللازمة.</p>
                </div>

                <div class="guideline-card reveal" style="--delay:80ms">
                    <div class="gc-num">02</div>
                    <h3>الخبرة والكفاءة</h3>
                    <p>إثبات خبرة سابقة في مجال التخصص مع مراجع من عملاء سابقين.</p>
                </div>

                <div class="guideline-card reveal" style="--delay:160ms">
                    <div class="gc-num">03</div>
                    <h3>الموارد المالية</h3>
                    <p>توفر الموارد المالية والقدرة على تنفيذ العقد بكفاءة.</p>
                </div>

                <div class="guideline-card reveal" style="--delay:240ms">
                    <div class="gc-num">04</div>
                    <h3>المعدات والآليات</h3>
                    <p>توفر المعدات والآليات اللازمة لتنفيذ الأعمال المطلوبة.</p>
                </div>

                <div class="guideline-card reveal" style="--delay:320ms">
                    <div class="gc-num">05</div>
                    <h3>الكوادر الفنية</h3>
                    <p>توفر فريق فني متخصص وذي خبرة في المجال.</p>
                </div>

                <div class="guideline-card reveal" style="--delay:400ms">
                    <div class="gc-num">06</div>
                    <h3>السلامة والجودة</h3>
                    <p>الالتزام بمعايير السلامة والجودة الدولية.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ CURRENT TENDERS ═══ -->
    <section id="current-tenders" class="current-tenders section-py">
        <div class="container">
            <div class="sec-head reveal">
                <span class="sec-label">المناقصات الحالية</span>
                <h2>فرص تعاقدية متاحة</h2>
                <p>استعرض المناقصات المتاحة حالياً والتواريخ النهائية للتقديم</p>
            </div>

            <div class="tenders-list">
                <!-- Tender 1 -->
                <div class="tender-card reveal" style="--delay:0ms">
                    <div class="tender-header">
                        <div class="tender-info">
                            <span class="tender-id">المناقصة #001/2026</span>
                            <h3>توريد مواد البناء والخرسانة</h3>
                        </div>
                        <span class="tender-status active">مفتوحة</span>
                    </div>

                    <div class="tender-details">
                        <div class="detail-row">
                            <span class="detail-label"><i class="fas fa-briefcase"></i> نوع العمل:</span>
                            <span>توريد مواد</span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label"><i class="fas fa-map-marker-alt"></i> الموقع:</span>
                            <span>صنعاء - ضواحي المدينة</span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label"><i class="fas fa-calendar"></i> آخر موعد للتقديم:</span>
                            <span>30 أبريل 2026</span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label"><i class="fas fa-file-pdf"></i> الميزانية التقريبية:</span>
                            <span>$150,000 - $200,000</span>
                        </div>
                    </div>

                    <p class="tender-desc">مناقصة لتوريد مواد البناء عالية الجودة والخرسانة الجاهزة للمشاريع السكنية الكبرى.</p>

                    <div class="tender-requirements">
                        <h4>المتطلبات:</h4>
                        <ul>
                            <li>شهادات الجودة والمطابقة للمواصفات الدولية</li>
                            <li>خبرة سابقة في توريد مواد البناء</li>
                            <li>القدرة على التسليم المنتظم والالتزام بالمواعيد</li>
                            <li>ضمان جودة المنتجات</li>
                        </ul>
                    </div>

                    <div class="tender-actions">
                        <a href="{{ route('contact') }}" class="tender-apply">
                            <span>تقديم عرض</span>
                            <i class="fas fa-arrow-left"></i>
                        </a>
                        <a href="{{ route('contact') }}" class="tender-info-btn">
                            <span>طلب المزيد من المعلومات</span>
                            <i class="fas fa-question-circle"></i>
                        </a>
                    </div>
                </div>

                <!-- Tender 2 -->
                <div class="tender-card reveal" style="--delay:80ms">
                    <div class="tender-header">
                        <div class="tender-info">
                            <span class="tender-id">المناقصة #002/2026</span>
                            <h3>أعمال الحفر والتسوية</h3>
                        </div>
                        <span class="tender-status active">مفتوحة</span>
                    </div>

                    <div class="tender-details">
                        <div class="detail-row">
                            <span class="detail-label"><i class="fas fa-briefcase"></i> نوع العمل:</span>
                            <span>أعمال إنشائية</span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label"><i class="fas fa-map-marker-alt"></i> الموقع:</span>
                            <span>تعز - منطقة التطوير</span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label"><i class="fas fa-calendar"></i> آخر موعد للتقديم:</span>
                            <span>25 أبريل 2026</span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label"><i class="fas fa-file-pdf"></i> الميزانية التقريبية:</span>
                            <span>$80,000 - $120,000</span>
                        </div>
                    </div>

                    <p class="tender-desc">مناقصة لأعمال الحفر والتسوية والتجهيز الأساسي للموقع قبل بدء الأعمال الإنشائية.</p>

                    <div class="tender-requirements">
                        <h4>المتطلبات:</h4>
                        <ul>
                            <li>معدات حفر وتسوية حديثة وفي حالة جيدة</li>
                            <li>فريق عمل متخصص وذي خبرة</li>
                            <li>التزام بمعايير السلامة والبيئة</li>
                            <li>خبرة سابقة في مشاريع مماثلة</li>
                        </ul>
                    </div>

                    <div class="tender-actions">
                        <a href="{{ route('contact') }}" class="tender-apply">
                            <span>تقديم عرض</span>
                            <i class="fas fa-arrow-left"></i>
                        </a>
                        <a href="{{ route('contact') }}" class="tender-info-btn">
                            <span>طلب المزيد من المعلومات</span>
                            <i class="fas fa-question-circle"></i>
                        </a>
                    </div>
                </div>

                <!-- Tender 3 -->
                <div class="tender-card reveal" style="--delay:160ms">
                    <div class="tender-header">
                        <div class="tender-info">
                            <span class="tender-id">المناقصة #003/2026</span>
                            <h3>أعمال الكهرباء والتوزيع</h3>
                        </div>
                        <span class="tender-status active">مفتوحة</span>
                    </div>

                    <div class="tender-details">
                        <div class="detail-row">
                            <span class="detail-label"><i class="fas fa-briefcase"></i> نوع العمل:</span>
                            <span>أعمال متخصصة</span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label"><i class="fas fa-map-marker-alt"></i> الموقع:</span>
                            <span>عدن - المنطقة الصناعية</span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label"><i class="fas fa-calendar"></i> آخر موعد للتقديم:</span>
                            <span>28 أبريل 2026</span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label"><i class="fas fa-file-pdf"></i> الميزانية التقريبية:</span>
                            <span>$120,000 - $180,000</span>
                        </div>
                    </div>

                    <p class="tender-desc">مناقصة لتنفيذ أعمال الكهرباء والتوزيع والأنظمة الكهربائية للمشروع السكني الكبير.</p>

                    <div class="tender-requirements">
                        <h4>المتطلبات:</h4>
                        <ul>
                            <li>شهادات مهندسين كهربائيين معتمدين</li>
                            <li>خبرة في الأنظمة الكهربائية الحديثة</li>
                            <li>الالتزام بالمواصفات الفنية الدولية</li>
                            <li>تأمين شامل للعمال والمعدات</li>
                        </ul>
                    </div>

                    <div class="tender-actions">
                        <a href="{{ route('contact') }}" class="tender-apply">
                            <span>تقديم عرض</span>
                            <i class="fas fa-arrow-left"></i>
                        </a>
                        <a href="{{ route('contact') }}" class="tender-info-btn">
                            <span>طلب المزيد من المعلومات</span>
                            <i class="fas fa-question-circle"></i>
                        </a>
                    </div>
                </div>

                <!-- Tender 4 -->
                <div class="tender-card reveal" style="--delay:240ms">
                    <div class="tender-header">
                        <div class="tender-info">
                            <span class="tender-id">المناقصة #004/2026</span>
                            <h3>أعمال الديكور والتشطيبات</h3>
                        </div>
                        <span class="tender-status closing">قريبة الإغلاق</span>
                    </div>

                    <div class="tender-details">
                        <div class="detail-row">
                            <span class="detail-label"><i class="fas fa-briefcase"></i> نوع العمل:</span>
                            <span>تشطيبات وديكور</span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label"><i class="fas fa-map-marker-alt"></i> الموقع:</span>
                            <span>صنعاء - الشرقية</span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label"><i class="fas fa-calendar"></i> آخر موعد للتقديم:</span>
                            <span>20 أبريل 2026</span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label"><i class="fas fa-file-pdf"></i> الميزانية التقريبية:</span>
                            <span>$90,000 - $140,000</span>
                        </div>
                    </div>

                    <p class="tender-desc">مناقصة لأعمال الديكور الداخلي والتشطيبات النهائية للمشروع السكني الفاخر.</p>

                    <div class="tender-requirements">
                        <h4>المتطلبات:</h4>
                        <ul>
                            <li>خبرة واسعة في الديكور والتشطيبات الفاخرة</li>
                            <li>فريق عمل متخصص في الديكور الحديث</li>
                            <li>معرفة بأحدث الاتجاهات والمواد</li>
                            <li>ضمان جودة التشطيب والالتزام بالتفاصيل</li>
                        </ul>
                    </div>

                    <div class="tender-actions">
                        <a href="{{ route('contact') }}" class="tender-apply">
                            <span>تقديم عرض</span>
                            <i class="fas fa-arrow-left"></i>
                        </a>
                        <a href="{{ route('contact') }}" class="tender-info-btn">
                            <span>طلب المزيد من المعلومات</span>
                            <i class="fas fa-question-circle"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ SUBMISSION PROCESS ═══ -->
    <section class="submission-process section-py">
        <div class="container">
            <div class="sec-head reveal">
                <span class="sec-label">العملية</span>
                <h2>خطوات تقديم العرض</h2>
                <p>اتبع هذه الخطوات البسيطة لتقديم عرضك</p>
            </div>

            <div class="process-steps">
                <div class="step reveal" style="--delay:0ms">
                    <div class="step-num">1</div>
                    <h3>اختر المناقصة</h3>
                    <p>اختر المناقصة التي تناسب تخصصك وإمكانياتك</p>
                </div>

                <div class="step reveal" style="--delay:80ms">
                    <div class="step-num">2</div>
                    <h3>اجمع المستندات</h3>
                    <p>جهز جميع المستندات والشهادات المطلوبة</p>
                </div>

                <div class="step reveal" style="--delay:160ms">
                    <div class="step-num">3</div>
                    <h3>أرسل عرضك</h3>
                    <p>أرسل عرضك وجميع المرفقات عبر البريد الإلكتروني</p>
                </div>

                <div class="step reveal" style="--delay:240ms">
                    <div class="step-num">4</div>
                    <h3>انتظر التقييم</h3>
                    <p>سيتم تقييم عرضك من قبل لجنة متخصصة</p>
                </div>

                <div class="step reveal" style="--delay:320ms">
                    <div class="step-num">5</div>
                    <h3>النتيجة</h3>
                    <p>سيتم إخطارك بنتيجة التقييم والقرار النهائي</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ CTA SECTION ═══ -->
    <section class="tenders-cta section-py">
        <div class="container">
            <div class="cta-content reveal">
                <h2>هل لديك استفسارات؟</h2>
                <p>تواصل معنا للحصول على معلومات إضافية حول المناقصات</p>
                <a href="{{ route('contact') }}" class="cta-primary cta-lg">
                    <span>تواصل معنا الآن</span>
                    <i class="fas fa-arrow-left" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </section>
@endsection
