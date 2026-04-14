@extends('site.layouts.app')

@section('title', 'يمن استيل - طلب وظيفة')

@section('styles')
    @vite(['resources/css/service-details.css'])
    <style>
        .job-requirements {
            background: var(--d700);
            padding: var(--s6);
            border-radius: var(--r-xl);
            margin-bottom: var(--s7);
        }
        .job-requirements h3 { color: var(--orange); margin-bottom: var(--s4); }
        .job-requirements ul { list-style: none; }
        .job-requirements li { margin-bottom: var(--s3); display: flex; align-items: center; gap: var(--s3); color: var(--tm); }
        .job-requirements li i { color: var(--orange); font-size: 14px; }
    </style>
@endsection

@section('content')
<div class="service-details-page">
    <section class="service-hero">
        <div class="container">
            <span class="sec-label">انضم لفريقنا</span>
            <h1>تقديم طلب توظيف</h1>
            <p>نحن نبحث عن المبدعين والمتميزين للانضمام إلى عائلة يمن استيل</p>
        </div>
    </section>

    <section class="section-py">
        <div class="container">
            <div class="service-content-grid">
                <div class="service-main-info reveal-up">
                    <div class="job-requirements">
                        <h3>متطلبات الوظيفة العامة</h3>
                        <ul>
                            <li><i class="fas fa-check"></i> درجة بكالوريوس في التخصص المطلوب أو ما يعادلها.</li>
                            <li><i class="fas fa-check"></i> خبرة عملية لا تقل عن 3 سنوات في مجال المقاولات.</li>
                            <li><i class="fas fa-check"></i> مهارات تواصل ممتازة والقدرة على العمل ضمن فريق.</li>
                            <li><i class="fas fa-check"></i> إجادة استخدام البرامج الهندسية والتقنية ذات الصلة.</li>
                            <li><i class="fas fa-check"></i> الالتزام بمعايير السلامة والجودة المهنية.</li>
                        </ul>
                    </div>

                    <h2>لماذا تعمل معنا؟</h2>
                    <p class="service-description">
                        في يمن استيل، نحن نؤمن بأن موظفينا هم رأس مالنا الحقيقي. نوفر بيئة عمل محفزة، فرصاً للتطور المهني، وحزم مكافآت تنافسية تليق بخبراتكم وإبداعاتكم.
                    </p>
                </div>

                <aside class="request-sidebar reveal-up" style="--delay: 200ms">
                    <div class="request-card">
                        <h3>نموذج التقديم</h3>
                        <form action="#" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">الاسم الكامل</label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">البريد الإلكتروني</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">رقم الهاتف</label>
                                <input type="tel" id="phone" name="phone" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="position">الوظيفة المستهدفة</label>
                                <select id="position" name="position" class="form-control">
                                    <option value="engineer">مهندس مدني</option>
                                    <option value="architect">مهندس معماري</option>
                                    <option value="supervisor">مشرف موقع</option>
                                    <option value="other">أخرى</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="cv">السيرة الذاتية (PDF)</label>
                                <input type="file" id="cv" name="cv" class="form-control" accept=".pdf">
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
