@extends('site.layouts.app')

@section('title', 'يمن استيل - تقديم مناقصة')

@section('styles')
    @vite(['resources/css/service-details.css'])
    <style>
        .tender-info {
            background: var(--orange-subtle);
            padding: var(--s6);
            border-radius: var(--r-xl);
            border: 1px solid var(--orange);
            margin-bottom: var(--s7);
        }
        .tender-info h3 { color: var(--orange); margin-bottom: var(--s3); }
        .tender-meta { display: grid; grid-template-columns: 1fr 1fr; gap: var(--s4); color: var(--tm); }
        .tender-meta span strong { color: #fff; }
    </style>
@endsection

@section('content')
<div class="service-details-page">
    <section class="service-hero">
        <div class="container">
            <span class="sec-label">المناقصات والعقود</span>
            <h1>تقديم عرض مناقصة</h1>
            <p>بوابة الشركاء والموردين لتقديم العروض الفنية والمالية</p>
        </div>
    </section>

    <section class="section-py">
        <div class="container">
            <div class="service-content-grid">
                <div class="service-main-info reveal-up">
                    <div class="tender-info">
                        <h3>تفاصيل المناقصة المختارة</h3>
                        <div class="tender-meta">
                            <span>رقم المناقصة: <strong>YS-2024-00{{ rand(1,9) }}</strong></span>
                            <span>تاريخ الإغلاق: <strong>30 مايو 2024</strong></span>
                            <span>نوع العمل: <strong>توريد مواد بناء</strong></span>
                            <span>الموقع: <strong>صنعاء - المقر الرئيسي</strong></span>
                        </div>
                    </div>

                    <h2>تعليمات تقديم العروض</h2>
                    <p class="service-description">
                        يرجى التأكد من إرفاق كافة المستندات المطلوبة، بما في ذلك السجل التجاري، البطاقة الضريبية، والعرض الفني والمالي المفصل. يجب أن تكون جميع الملفات بصيغة PDF ولا يتجاوز حجم الملف الواحد 10 ميجابايت.
                    </p>

                    <div class="achievements-list">
                        <div class="achievement-item">
                            <i class="fas fa-info-circle"></i>
                            <span>يتم تقييم العروض بناءً على الجودة والسعر وسابقة الأعمال.</span>
                        </div>
                        <div class="achievement-item">
                            <i class="fas fa-lock"></i>
                            <span>جميع البيانات المقدمة تعامل بسرية تامة.</span>
                        </div>
                    </div>
                </div>

                <aside class="request-sidebar reveal-up" style="--delay: 200ms">
                    <div class="request-card">
                        <h3>نموذج تقديم العرض</h3>
                        <form action="#" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="company">اسم الشركة / المورد</label>
                                <input type="text" id="company" name="company" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="contact_person">اسم الشخص المسؤول</label>
                                <input type="text" id="contact_person" name="contact_person" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">رقم التواصل</label>
                                <input type="tel" id="phone" name="phone" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="proposal">العرض الفني والمالي (PDF)</label>
                                <input type="file" id="proposal" name="proposal" class="form-control" accept=".pdf" required>
                            </div>
                            <div class="form-group">
                                <label for="notes">ملاحظات إضافية</label>
                                <textarea id="notes" name="notes" class="form-control" placeholder="أي تفاصيل أخرى تود إضافتها..."></textarea>
                            </div>
                            <button type="submit" class="cta-primary" style="width: 100%; justify-content: center;">
                                <span>إرسال العرض</span>
                                <span class="cta-ico"><i class="fas fa-file-contract"></i></span>
                            </button>
                        </form>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</div>
@endsection
