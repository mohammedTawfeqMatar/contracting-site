<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="@yield('description', 'يمن استيل للمقاولات والبناء — شركة رائدة في البناء والتعمير بأعلى معايير الجودة في اليمن.')" />
    <title>@yield('title', 'يمن استيل - للمقاولات والبناء')</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/global.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/header.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}" />
    @yield('styles')
</head>
<body>
    <a class="skip-link" href="#home">تخطي إلى المحتوى</a>

    <!-- Ambient orbs -->
    <div class="bg-orbs" aria-hidden="true">
        <div class="orb orb-1"></div>
        <div class="orb orb-2"></div>
        <div class="orb orb-3"></div>
    </div>

    <!-- ═══ HEADER ═══ -->
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    <!-- ═══ FOOTER ═══ -->
    @include('partials.footer')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
