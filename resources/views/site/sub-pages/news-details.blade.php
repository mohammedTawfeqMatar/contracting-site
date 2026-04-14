@extends('site.layouts.app')

@section('title', 'يمن استيل - تفاصيل الخبر')

@section('styles')
    @vite(['resources/css/news.css', 'resources/css/service-details.css'])
    <style>
        .news-article-content {
            color: var(--tm);
            line-height: 1.8;
            font-size: var(--t-md);
        }
        .news-article-content h2, .news-article-content h3 {
            color: var(--tw);
            margin: var(--s6) 0 var(--s4);
        }
        .news-article-content p {
            margin-bottom: var(--s5);
        }
        .news-article-content img {
            border-radius: var(--r-xl);
            margin: var(--s6) 0;
            width: 100%;
            height: auto;
            border: 1px solid rgba(255, 122, 26, 0.1);
        }
        .share-article {
            margin-top: var(--s8);
            padding-top: var(--s6);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            gap: var(--s4);
        }
        .share-article span {
            color: var(--tw);
            font-weight: 700;
        }
        .share-links {
            display: flex;
            gap: var(--s3);
        }
        .share-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.05);
            display: grid;
            place-items: center;
            color: var(--ts);
            transition: all var(--tf);
        }
        .share-btn:hover {
            background: var(--orange);
            color: var(--tw);
            transform: translateY(-3px);
        }
        .related-news {
            margin-top: var(--s10);
        }
        .related-news h2 {
            color: var(--tw);
            margin-bottom: var(--s6);
        }
    </style>
@endsection

@section('content')
<div class="service-details-page">
    <!-- ═══ NEWS HERO ═══ -->
    <section class="service-hero">
        <div class="container">
            <div class="hero-content reveal">
                <span class="sec-label">أخبار وتحديثات</span>
                <h1>{{ $slug == 'news-item-1' ? 'إطلاق مشروع سكني كبير في صنعاء' : ($slug == 'news-item-2' ? 'يمن استيل تفوز بجائزة أفضل شركة مقاولات' : 'أخبار وتطورات يمن استيل') }}</h1>
                <div class="news-meta" style="justify-content: center; margin-top: var(--s4);">
                    <span class="news-category">مشاريع</span>
                    <span class="news-date"><i class="far fa-calendar-alt"></i> 12 أبريل 2026</span>
                    <span class="news-read-time"><i class="far fa-clock"></i> 5 دقائق</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ ARTICLE CONTENT ═══ -->
    <section class="section-py">
        <div class="container">
            <div class="service-content-grid">
                <!-- Main Article -->
                <div class="service-main-info reveal-up">
                    <div class="news-article-content">
                        <img src="{{ asset('imag/m' . (rand(1,5)) . '.jpg') }}" alt="News Image">
                        
                        <p>تواصل شركة يمن استيل للمقاولات والبناء مسيرتها في تقديم أفضل الحلول الإنشائية في اليمن، حيث نعلن اليوم عن تفاصيل جديدة تتعلق بهذا الخبر الهام الذي يعكس التزامنا بالتطوير المستمر وخدمة المجتمع اليمني بأعلى المعايير.</p>
                        
                        <h2>تفاصيل الإنجاز الجديد</h2>
                        <p>لقد عمل فريقنا المتخصص من المهندسين والفنيين على مدار الساعة لضمان تحقيق النتائج المرجوة، حيث تم استخدام أحدث التقنيات العالمية في هذا المجال لضمان الجودة والمتانة التي تتميز بها مشاريعنا دائماً.</p>
                        
                        <blockquote>
                            "نحن في يمن استيل نؤمن بأن الجودة ليست مجرد خيار، بل هي الأساس الذي نبني عليه كل طوبة في مشاريعنا."
                        </blockquote>

                        <h3>الخطوات المستقبلية</h3>
                        <p>هذا الخبر ليس سوى البداية لسلسلة من التطورات التي نخطط لها في العام 2026، حيث نسعى لتوسيع نطاق خدماتنا لتشمل كافة المحافظات اليمنية، مع التركيز على الاستدامة والابتكار في كل ما نقدمه.</p>
                        
                        <div class="news-tags">
                            <span class="tag">تطوير</span>
                            <span class="tag">يمن استيل</span>
                            <span class="tag">إنشاءات</span>
                            <span class="tag">2026</span>
                        </div>

                        <div class="share-article">
                            <span>شارك الخبر:</span>
                            <div class="share-links">
                                <a href="#" class="share-btn"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="share-btn"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="share-btn"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" class="share-btn"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Related News -->
                    <div class="related-news">
                        <h2>أخبار ذات صلة</h2>
                        <div class="news-grid" style="grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));">
                            <article class="news-card">
                                <div class="news-image" style="height: 180px;">
                                    <img src="{{ asset('imag/m2.jpg') }}" alt="خبر متعلق">
                                </div>
                                <div class="news-content">
                                    <h3>يمن استيل تفوز بجائزة أفضل شركة مقاولات</h3>
                                    <a href="{{ route('news.details', ['slug' => 'news-item-2']) }}" class="news-link">اقرأ المزيد</a>
                                </div>
                            </article>
                            <article class="news-card">
                                <div class="news-image" style="height: 180px;">
                                    <img src="{{ asset('imag/m3.jpg') }}" alt="خبر متعلق">
                                </div>
                                <div class="news-content">
                                    <h3>توسع عمليات الشركة إلى محافظات جديدة</h3>
                                    <a href="{{ route('news.details', ['slug' => 'news-item-3']) }}" class="news-link">اقرأ المزيد</a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <aside class="request-sidebar reveal-up" style="--delay: 200ms">
                    <div class="request-card">
                        <h3>اشترك في النشرة البريدية</h3>
                        <p style="color: var(--ts); font-size: var(--t-sm); margin-bottom: var(--s5);">احصل على آخر الأخبار والتحديثات مباشرة في بريدك الإلكتروني.</p>
                        <form action="#" method="POST" class="request-form">
                            @csrf
                            <div class="form-group">
                                <label for="email">البريد الإلكتروني</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="example@mail.com" required>
                            </div>
                            <button type="submit" class="cta-primary" style="width: 100%; justify-content: center;">
                                <span>اشترك الآن</span>
                                <span class="cta-ico"><i class="fas fa-paper-plane"></i></span>
                            </button>
                        </form>
                    </div>

                    <div class="request-card" style="margin-top: var(--s6); background: linear-gradient(135deg, var(--orange-light), var(--orange-dark));">
                        <h3 style="color: var(--tw);">هل لديك استفسار؟</h3>
                        <p style="color: rgba(255,255,255,0.9); font-size: var(--t-sm); margin-bottom: var(--s5);">فريقنا جاهز للرد على جميع تساؤلاتكم حول مشاريعنا وخدماتنا.</p>
                        <a href="{{ route('contact') }}" class="cta-primary" style="width: 100%; justify-content: center; background: var(--tw); color: var(--orange-dark);">
                            <span>تواصل معنا</span>
                            <span class="cta-ico"><i class="fas fa-headset"></i></span>
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</div>
@endsection
