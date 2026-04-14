@extends('site.layouts.app')

@section('title', 'يمن استيل - الأخبار والمدونة')

@section('styles')
@vite(['resources/css/news.css'])
    {{-- <link rel="stylesheet" href="{{ asset('css/news.css') }}" /> --}}
@endsection

@section('content')
    <!-- ═══ NEWS HERO ═══ -->
    <section class="news-hero">
        <div class="container">
            <div class="hero-content reveal">
                <span class="sec-label">آخر الأخبار</span>
                <h1>أخبار وتحديثات الشركة</h1>
                <p>تابع أحدث الأخبار والمستجدات من شركة يمن استيل للمقاولات والبناء</p>
            </div>
        </div>
    </section>

    <!-- ═══ NEWS GRID ═══ -->
    <section class="news-section section-py">
        <div class="container">
            <div class="sec-head reveal">
                <span class="sec-label">مستجدات</span>
                <h2>أحدث الأخبار</h2>
                <p>تابع آخر التطورات والإنجازات والمشاريع الجديدة</p>
            </div>

            <div class="news-grid">
                @php $news_items = [1,2,3,4,5,6]; @endphp
                @foreach($news_items as $item)
                @php $loop = (object)['iteration' => $item]; @endphp
                @if($item == 1)
                <!-- News 1 -->
                <article class="news-card reveal" style="--delay:0ms">
                    <div class="news-image">
                        <img src="{{ asset('imag/m1.jpg') }}" alt="مشروع جديد في صنعاء">
                        <span class="news-date">12 أبريل 2026</span>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-category">مشاريع</span>
                            <span class="news-read-time">5 دقائق</span>
                        </div>
                        <h3>إطلاق مشروع سكني كبير في صنعاء</h3>
                        <p>أعلنت شركة يمن استيل عن إطلاق مشروع سكني متكامل في منطقة الشرقية يضم 150 وحدة سكنية حديثة بتصاميم عصرية وخدمات متكاملة.</p>
                        <div class="news-tags">
                            <span class="tag">مشاريع سكنية</span>
                            <span class="tag">صنعاء</span>
                            <span class="tag">2026</span>
                        </div>
                        <a href="{{ route('news.details', ['slug' => 'news-item-' . $loop->iteration]) }}" class="news-link">
                            <span>اقرأ المزيد</span>
                            <i class="fas fa-arrow-left"></i>
                        </a>
                    </div>
                </article>
                @endif

                @if($item == 2)
                <!-- News 2 -->
                <article class="news-card reveal" style="--delay:80ms">
                    <div class="news-image">
                        <img src="{{ asset('imag/m2.jpg') }}" alt="جائزة أفضل شركة">
                        <span class="news-date">8 أبريل 2026</span>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-category">جوائز</span>
                            <span class="news-read-time">3 دقائق</span>
                        </div>
                        <h3>يمن استيل تفوز بجائزة أفضل شركة مقاولات</h3>
                        <p>حصلت شركة يمن استيل على جائزة أفضل شركة مقاولات في اليمن للعام 2026 تقديراً لالتزامها بمعايير الجودة والسلامة المهنية.</p>
                        <div class="news-tags">
                            <span class="tag">جوائز</span>
                            <span class="tag">إنجازات</span>
                            <span class="tag">جودة</span>
                        </div>
                        <a href="{{ route('news.details', ['slug' => 'news-item-' . $loop->iteration]) }}" class="news-link">
                            <span>اقرأ المزيد</span>
                            <i class="fas fa-arrow-left"></i>
                        </a>
                    </div>
                </article>
                @endif
                @if($item == 3)
                <!-- News 3 -->
                <article class="news-card reveal" style="--delay:160ms">
                    <div class="news-image">
                        <img src="{{ asset('imag/m3.jpg') }}" alt="توسع العمليات">
                        <span class="news-date">5 أبريل 2026</span>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-category">توسع</span>
                            <span class="news-read-time">4 دقائق</span>
                        </div>
                        <h3>توسع عمليات الشركة إلى محافظات جديدة</h3>
                        <p>أعلنت يمن استيل عن توسع عملياتها لتشمل محافظات تعز وعدن وحضرموت مع فتح مكاتب إقليمية جديدة وتوظيف كوادر متخصصة.</p>
                        <div class="news-tags">
                            <span class="tag">توسع</span>
                            <span class="tag">عمليات</span>
                            <span class="tag">نمو</span>
                        </div>
                        <a href="{{ route('news.details', ['slug' => 'news-item-' . $loop->iteration]) }}" class="news-link">
                            <span>اقرأ المزيد</span>
                            <i class="fas fa-arrow-left"></i>
                        </a>
                    </div>
                </article>
                @endif
                @if($item == 4)
                <!-- News 4 -->
                <article class="news-card reveal" style="--delay:240ms">
                    <div class="news-image">
                        <img src="{{ asset('imag/m4.jpg') }}" alt="مبادرة السلامة">
                        <span class="news-date">1 أبريل 2026</span>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-category">مبادرات</span>
                            <span class="news-read-time">6 دقائق</span>
                        </div>
                        <h3>إطلاق مبادرة السلامة المهنية الشاملة</h3>
                        <p>أطلقت يمن استيل مبادرة شاملة لتحسين معايير السلامة المهنية في جميع مشاريعها بتدريب العمال وتوفير معدات الحماية الحديثة.</p>
                        <div class="news-tags">
                            <span class="tag">سلامة</span>
                            <span class="tag">تدريب</span>
                            <span class="tag">مبادرات</span>
                        </div>
                        <a href="{{ route('news.details', ['slug' => 'news-item-' . $loop->iteration]) }}" class="news-link">
                            <span>اقرأ المزيد</span>
                            <i class="fas fa-arrow-left"></i>
                        </a>
                    </div>
                </article>
                @endif
                @if($item == 5)
                <!-- News 5 -->
                <article class="news-card reveal" style="--delay:320ms">
                    <div class="news-image">
                        <img src="{{ asset('imag/m5.jpg') }}" alt="تقنيات حديثة">
                        <span class="news-date">28 مارس 2026</span>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-category">تقنية</span>
                            <span class="news-read-time">5 دقائق</span>
                        </div>
                        <h3>تبني تقنيات البناء الحديثة والمستدامة</h3>
                        <p>استثمرت يمن استيل في أحدث التقنيات والمعدات الحديثة لتحسين كفاءة المشاريع وتقليل الفاقد وتحقيق الاستدامة البيئية.</p>
                        <div class="news-tags">
                            <span class="tag">تقنية</span>
                            <span class="tag">استدامة</span>
                            <span class="tag">ابتكار</span>
                        </div>
                        <a href="{{ route('news.details', ['slug' => 'news-item-' . $loop->iteration]) }}" class="news-link">
                            <span>اقرأ المزيد</span>
                            <i class="fas fa-arrow-left"></i>
                        </a>
                    </div>
                </article>
                @endif
                @if($item == 6)
                <!-- News 6 -->
                <article class="news-card reveal" style="--delay:400ms">
                    <div class="news-image">
                        <img src="{{ asset('imag/m51.jpg') }}" alt="شراكات استراتيجية">
                        <span class="news-date">25 مارس 2026</span>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-category">شراكات</span>
                            <span class="news-read-time">4 دقائق</span>
                        </div>
                        <h3>توقيع اتفاقيات شراكة استراتيجية دولية</h3>
                        <p>وقعت يمن استيل اتفاقيات شراكة مع شركات عالمية رائدة لنقل الخبرات والتقنيات الحديثة وتحسين جودة الخدمات المقدمة.</p>
                        <div class="news-tags">
                            <span class="tag">شراكات</span>
                            <span class="tag">دولي</span>
                            <span class="tag">تعاون</span>
                        </div>
                        <a href="{{ route('news.details', ['slug' => 'news-item-' . $loop->iteration]) }}" class="news-link">
                            <span>اقرأ المزيد</span>
                            <i class="fas fa-arrow-left"></i>
                        </a>
                    </div>
                </article>
                @endif
                @endforeach
            </div>
        </div>
    </section>

    <!-- ═══ NEWSLETTER ═══ -->
    <section class="newsletter section-py">
        <div class="container">
            <div class="newsletter-content reveal">
                <div class="nl-text">
                    <h2>ابق على اطلاع</h2>
                    <p>اشترك في نشرتنا الإخبارية لتلقي آخر الأخبار والتحديثات مباشرة في بريدك الإلكتروني</p>
                </div>
                <form class="nl-form" id="newsletterForm" novalidate>
                    @csrf
                    <input type="email" name="email" placeholder="بريدك الإلكتروني" required />
                    <button type="submit" class="btn-subscribe">
                        <span>اشترك الآن</span>
                        <i class="fas fa-arrow-left" aria-hidden="true"></i>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- ═══ CATEGORIES ═══ -->
    <section class="categories section-py">
        <div class="container">
            <div class="sec-head reveal">
                <span class="sec-label">التصنيفات</span>
                <h2>تصفح حسب الفئة</h2>
                <p>اختر الفئة التي تهمك لتصفح الأخبار ذات الصلة</p>
            </div>

            <div class="categories-grid">
                <a href="{{ route('contact') }}" class="category-card reveal" style="--delay:0ms">
                    <div class="cat-icon"><i class="fas fa-building"></i></div>
                    <h3>مشاريع</h3>
                    <p>12 مقالة</p>
                </a>

                <a href="{{ route('contact') }}" class="category-card reveal" style="--delay:80ms">
                    <div class="cat-icon"><i class="fas fa-trophy"></i></div>
                    <h3>جوائز وإنجازات</h3>
                    <p>8 مقالات</p>
                </a>

                <a href="{{ route('contact') }}" class="category-card reveal" style="--delay:160ms">
                    <div class="cat-icon"><i class="fas fa-briefcase"></i></div>
                    <h3>فرص عمل</h3>
                    <p>15 مقالة</p>
                </a>

                <a href="{{ route('contact') }}" class="category-card reveal" style="--delay:240ms">
                    <div class="cat-icon"><i class="fas fa-lightbulb"></i></div>
                    <h3>ابتكار وتقنية</h3>
                    <p>10 مقالات</p>
                </a>

                <a href="{{ route('contact') }}" class="category-card reveal" style="--delay:320ms">
                    <div class="cat-icon"><i class="fas fa-leaf"></i></div>
                    <h3>استدامة</h3>
                    <p>6 مقالات</p>
                </a>

                <a href="{{ route('contact') }}" class="category-card reveal" style="--delay:400ms">
                    <div class="cat-icon"><i class="fas fa-handshake"></i></div>
                    <h3>شراكات</h3>
                    <p>9 مقالات</p>
                </a>
            </div>
        </div>
    </section>
@endsection
