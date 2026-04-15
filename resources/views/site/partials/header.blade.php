<header id="navbar" class="site-header" role="banner">
    <div class="container header-inner">
        <a href="{{ route('home') }}" class="logo" aria-label="يمن استيل">
            <span class="logo-name">{{ $siteSettings['site_name'] ?? 'يمن' }} <em>{{ $siteSettings['site_name_suffix'] ?? 'استيل' }}</em></span>
            <img src="{{ !empty($siteSettings['site_logo']) ? asset('storage/' . $siteSettings['site_logo']) : asset('building.png') }}" alt="">
        </a>

        <nav class="nav" aria-label="التنقل الرئيسي">
            <button class="menu-toggle" id="mobile-menu" type="button"
                    aria-label="فتح القائمة" aria-controls="primary-nav" aria-expanded="false">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
            <ul id="primary-nav" class="nav-links" role="list">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">الرئيسية</a></li>
                <li><a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">خدماتنا</a></li>
                <li><a href="{{ route('projects') }}" class="{{ request()->routeIs('projects') ? 'active' : '' }}">أعمالنا</a></li>
                <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">من نحن</a></li>
                <li><a href="{{ route('careers') }}" class="{{ request()->routeIs('careers') ? 'active' : '' }}">الوظائف</a></li>
                <li><a href="{{ route('tenders') }}" class="{{ request()->routeIs('tenders') ? 'active' : '' }}">المناقصات</a></li>
                <li><a href="{{ route('news') }}" class="{{ request()->routeIs('news') ? 'active' : '' }}">الأخبار</a></li>
                <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">اتصل بنا</a></li>
            </ul>
            <div class="nav-overlay" data-nav-overlay></div>
        </nav>

        <form action="{{ route('search') }}" method="GET" style="display:flex;align-items:center;gap:8px;">
            <input type="search" name="q" value="{{ request('q') }}" placeholder="ابحث في الموقع..." style="padding:8px 10px;border-radius:8px;border:1px solid #ddd;">
            <button type="submit" style="padding:8px 10px;border:none;border-radius:8px;background:#f58220;color:#fff;">
                <i class="fas fa-search"></i>
            </button>
        </form>

        <a href="{{ route('contact') }}#contact" class="btn-quote">
            <span>عرض سعر</span>
            <i class="fas fa-arrow-left" aria-hidden="true"></i>
        </a>
    </div>
</header>
