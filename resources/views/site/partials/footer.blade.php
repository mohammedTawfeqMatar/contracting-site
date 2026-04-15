<footer role="contentinfo">
    <div class="footer-glow" aria-hidden="true"></div>
    <div class="container">
        <div class="footer-top">
            <div class="footer-brand">
                <a href="{{ route('home') }}" class="footer-logo">
                    <span class="logo-name">{{ $siteSettings['site_name'] ?? 'يمن' }} <em>{{ $siteSettings['site_name_suffix'] ?? 'استيل' }}</em></span>
                    <img src="{{ !empty($siteSettings['site_logo']) ? asset('storage/' . $siteSettings['site_logo']) : asset('building.png') }}" alt="">
                </a>
                <p>{{ $siteSettings['footer_about'] ?? 'شركة رائدة في مجال المقاولات والبناء والتعمير بأعلى معايير الجودة في اليمن.' }}</p>
                <img src="{{ asset('imag/ymen.jpg') }}" alt="صورة الشركة" class="company-image" />
            </div>
            <nav class="footer-nav" aria-label="روابط سريعة">
                <h4>روابط سريعة</h4>
                <ul role="list">
                    <li><a href="{{ route('home') }}">الرئيسية</a></li>
                    <li><a href="{{ route('services') }}">خدماتنا</a></li>
                    <li><a href="{{ route('projects') }}">أعمالنا</a></li>
                    <li><a href="{{ route('about') }}">من نحن</a></li>
                    <li><a href="{{ route('careers') }}">الوظائف</a></li>
                    <li><a href="{{ route('tenders') }}">المناقصات</a></li>
                    <li><a href="{{ route('news') }}">الأخبار</a></li>
                    <li><a href="{{ route('contact') }}">اتصل بنا</a></li>
                </ul>
            </nav>
            <div class="footer-contact">
                <h4>تواصل معنا</h4>
                <a href="tel:{{ $siteSettings['contact_phone'] ?? '+967774984145' }}" class="fc-link"><i class="fas fa-phone-alt"></i>{{ $siteSettings['contact_phone'] ?? '+967774984145' }}</a>
                <a href="mailto:{{ $siteSettings['contact_email'] ?? 'info@example.com' }}" class="fc-link"><i class="fas fa-envelope"></i>{{ $siteSettings['contact_email'] ?? 'info@example.com' }}</a>
                <div class="social-links" aria-label="تواصل اجتماعي">
                    <a href="{{ $siteSettings['facebook_url'] ?? '#' }}" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="{{ $siteSettings['twitter_url'] ?? '#' }}" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="{{ $siteSettings['instagram_url'] ?? '#' }}" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="{{ $siteSettings['telegram_url'] ?? '#' }}" aria-label="Telegram"><i class="fab fa-telegram-plane"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© {{ date('Y') }} {{ $siteSettings['copyright_name'] ?? 'يمن استيل للمقاولات' }}. جميع الحقوق محفوظة.</p>
            <a href="#home" class="back-top" aria-label="العودة لأعلى"><i class="fas fa-chevron-up"></i></a>
        </div>
    </div>
</footer>
