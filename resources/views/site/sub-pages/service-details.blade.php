@extends('site.layouts.app')

@section('title', 'يمن استيل - تفاصيل الخدمة')

@section('styles')
    @vite(['resources/css/service-details.css'])
@endsection

@section('content')
<div class="service-details-page">
    <!-- ═══ HERO SECTION ═══ -->
    <section class="service-hero">
        <div class="container">
            <span class="sec-label">تفاصيل الخدمة</span>
            <h1>{{ $slug == 'construction' ? 'التعمير والبناء' : ($slug == 'architecture' ? 'أعمال الهناجر والبيوت الجاهزة' : 'خدماتنا المتميزة') }}</h1>
            <p>نحن نبني المستقبل بأعلى معايير الجودة والاحترافية</p>
        </div>
    </section>

    <!-- ═══ CONTENT SECTION ═══ -->
    <section class="section-py">
        <div class="container">
            <div class="service-content-grid">
                <!-- Main Info -->
                <div class="service-main-info reveal-up">
                    <h2>نظرة عامة على الخدمة</h2>
                    <p class="service-description">
                        نقدم في يمن استيل حلولاً متكاملة في مجال {{ $slug == 'construction' ? 'التعمير والبناء' : 'المقاولات العامة' }}، حيث نجمع بين الخبرة الطويلة والتقنيات الحديثة لضمان تنفيذ مشاريعكم بأعلى دقة وفي الوقت المحدد.
                    </p>

                    <h2>أبرز الإنجازات في هذه الخدمة</h2>
                    <div class="achievements-list">
                        <div class="achievement-item">
                            <i class="fas fa-check-circle"></i>
                            <span>تنفيذ أكثر من 50 مشروعاً سكنياً وتجارياً بنجاح باهر.</span>
                        </div>
                        <div class="achievement-item">
                            <i class="fas fa-award"></i>
                            <span>الحصول على شهادات جودة عالمية في معايير السلامة والبناء.</span>
                        </div>
                        <div class="achievement-item">
                            <i class="fas fa-clock"></i>
                            <span>الالتزام التام بالجداول الزمنية المحددة مع العملاء.</span>
                        </div>
                        <div class="achievement-item">
                            <i class="fas fa-users"></i>
                            <span>فريق عمل متخصص من المهندسين والفنيين ذوي الخبرة العالية.</span>
                        </div>
                    </div>

                    <h2>لماذا تختار يمن استيل؟</h2>
                    <p class="service-description">
                        نحن لا نبني جدراناً فقط، بل نبني علاقات ثقة مستدامة مع عملائنا من خلال الشفافية المطلقة والجودة التي لا تضاهى في كل تفصيلة من تفاصيل المشروع.
                    </p>
                </div>

                <!-- Request Sidebar -->
                <aside class="request-sidebar reveal-up" style="--delay: 200ms">
                    <div class="request-card">
                        <h3>طلب هذه الخدمة</h3>
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
                                <label for="email">البريد الإلكتروني</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="example@mail.com">
                            </div>
                            <div class="form-group">
                                <label for="project_type">نوع المشروع</label>
                                <select id="project_type" name="project_type" class="form-control">
                                    <option value="residential">سكني</option>
                                    <option value="commercial">تجاري</option>
                                    <option value="industrial">صناعي</option>
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
    </section>
</div>
@endsection
