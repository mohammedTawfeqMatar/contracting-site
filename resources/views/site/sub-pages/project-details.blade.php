@extends('site.layouts.app')

@section('title', 'يمن استيل - تفاصيل المشروع')

@section('styles')
    @vite(['resources/css/project-details.css', 'resources/css/service-details.css'])
@endsection

@section('content')
<div class="project-details-page">
    <!-- ═══ HERO SECTION ═══ -->
    <section class="project-hero">
        <div class="container">
            <span class="sec-label">تفاصيل المشروع</span>
            <h1>{{ $slug == 'villa-sanaa' ? 'فيلا سكنية - صنعاء' : ($slug == 'building-taiz' ? 'برج تجاري - تعز' : 'مشروع متميز') }}</h1>
        </div>
    </section>

    <div class="container">
        <!-- Meta Bar -->
        <div class="project-meta-bar reveal-up">
            <div class="meta-item">
                <span>الموقع</span>
                <strong>{{ $slug == 'villa-sanaa' ? 'صنعاء، اليمن' : 'تعز، اليمن' }}</strong>
            </div>
            <div class="meta-item">
                <span>المساحة</span>
                <strong>1200 متر مربع</strong>
            </div>
            <div class="meta-item">
                <span>الحالة</span>
                <strong>مكتمل بنجاح</strong>
            </div>
            <div class="meta-item">
                <span>التاريخ</span>
                <strong>أبريل 2024</strong>
            </div>
        </div>

        <div class="service-content-grid">
            <!-- Main Info -->
            <div class="service-main-info reveal-up">
                <h2>عن المشروع</h2>
                <p class="service-description">
                    يعتبر هذا المشروع من أبرز إنجازات يمن استيل، حيث تم تصميمه وتنفيذه ليكون نموذجاً يحتذى به في العمارة الحديثة التي تجمع بين الأصالة والوظيفة. تم استخدام أحدث تقنيات البناء لضمان الاستدامة والجودة العالية.
                </p>

                <h2>التحديات والحلول</h2>
                <div class="challenge-solution-grid">
                    <div class="cs-card challenge-card">
                        <h3><i class="fas fa-exclamation-triangle"></i> التحديات</h3>
                        <p>واجهنا تحديات كبيرة في طبيعة التربة الجبلية للموقع، بالإضافة إلى ضيق الجدول الزمني المطلوب للتسليم قبل موسم الأمطار.</p>
                    </div>
                    <div class="cs-card solution-card">
                        <h3><i class="fas fa-lightbulb"></i> الحلول الذكية</h3>
                        <p>قمنا باستخدام تقنيات تدعيم تربة متطورة، وزيادة ورديات العمل مع فريق هندسي متواجد على مدار الساعة لضمان الجودة والسرعة.</p>
                    </div>
                </div>

                <h2>إنجازات الشركة في هذا المشروع</h2>
                <div class="achievements-list">
                    <div class="achievement-item">
                        <i class="fas fa-check-circle"></i>
                        <span>تحقيق صفر حوادث عمل طوال فترة التنفيذ.</span>
                    </div>
                    <div class="achievement-item">
                        <i class="fas fa-award"></i>
                        <span>تسليم المشروع قبل الموعد المحدد بـ 15 يوماً.</span>
                    </div>
                    <div class="achievement-item">
                        <i class="fas fa-leaf"></i>
                        <span>استخدام مواد بناء صديقة للبيئة بنسبة 30%.</span>
                    </div>
                </div>
            </div>

            <!-- Request Sidebar (Same as Service Form) -->
            <aside class="request-sidebar reveal-up" style="--delay: 200ms">
                <div class="request-card">
                    <h3>اطلب خدمة مماثلة</h3>
                    <p style="font-size: var(--t-xs); color: var(--ink-s); margin-bottom: var(--s4); text-align: center;">هل أعجبك هذا المشروع؟ اطلب خدمتنا الآن</p>
                    <form action="#" method="POST" class="request-form">
                        @csrf
                        <div class="form-group">
                            <label for="name">الاسم الكامل</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="أدخل اسمك الكامل" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">رقم الهاتف</label>
                            <input type="tel" id="phone" name="phone" class="form-control" placeholder="00967..." required>
                        </div>
                        <div class="form-group">
                            <label for="service_type">الخدمة المطلوبة</label>
                            <select id="service_type" name="service_type" class="form-control">
                                <option value="construction">التعمير والبناء</option>
                                <option value="architecture">الهناجر والبيوت الجاهزة</option>
                                <option value="finishes">التشطيبات</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">تفاصيل إضافية</label>
                            <textarea id="message" name="message" class="form-control" placeholder="اشرح لنا المزيد عن طلبك..."></textarea>
                        </div>
                        <button type="submit" class="cta-primary" style="width: 100%; justify-content: center;">
                            <span>إرسال الطلب</span>
                            <span class="cta-ico"><i class="fas fa-paper-plane"></i></span>
                        </button>
                    </form>
                </div>
            </aside>
        </div>
    </div>
</div>
@endsection
