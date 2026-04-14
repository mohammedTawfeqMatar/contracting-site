<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('title', 'لوحة التحكم') | شركة المقاولات</title>
  
  <link rel="stylesheet" href="{{ asset('public/admin/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/admin/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/admin/fonts/SansPro/SansPro.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/admin/css/bootstrap_rtl-v4.2.1/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('public/admin/css/bootstrap_rtl-v4.2.1/custom_rtl.css') }}">
  <link rel="stylesheet" href="{{ asset('public/admin/css/mycustomstyle.css') }}">
  @yield('styles')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
      <img src="{{ asset('public/admin/dist/img/AdminLTELogo.png') }}" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">لوحة التحكم</span>
    </a>

    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>الرئيسية</p>
            </a>
          </li>

          <li class="nav-header">إدارة المحتوى</li>

          <li class="nav-item">
            <a href="{{ route('admin.pages.index') }}" class="nav-link {{ request()->routeIs('admin.pages.*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>الصفحات</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.services.index') }}" class="nav-link {{ request()->routeIs('admin.services.*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-concierge-bell"></i>
              <p>الخدمات</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.projects.index') }}" class="nav-link {{ request()->routeIs('admin.projects.*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-project-diagram"></i>
              <p>المشاريع</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.news.index') }}" class="nav-link {{ request()->routeIs('admin.news.*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>الأخبار</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.tenders.index') }}" class="nav-link {{ request()->routeIs('admin.tenders.*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-file-contract"></i>
              <p>المناقصات</p>
            </a>
          </li>

          <li class="nav-header">التواصل والإعدادات</li>

          <li class="nav-item">
            <a href="{{ route('admin.contacts.index') }}" class="nav-link {{ request()->routeIs('admin.contacts.*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-envelope"></i>
              <p>الرسائل والطلبات</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.settings.index') }}" class="nav-link {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-cogs"></i>
              <p>إعدادات الموقع</p>
            </a>
          </li>

        </ul>
      </nav>
    </div>
  </aside>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">@yield('page_title')</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">الرئيسية</a></li>
              @yield('breadcrumb')
            </ol>
          </div>
        </div>
      </div>
    </div>

    <div class="content">
      <div class="container-fluid">
        @if(session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @yield('content')
      </div>
    </div>
  </div>

  <footer class="main-footer">
    <div class="float-right d-none d-sm-inline">
      نظام إدارة شركة المقاولات
    </div>
    <strong>Copyright &copy; {{ date('Y') }} <a href="#">Manus AI</a>.</strong> جميع الحقوق محفوظة.
  </footer>
</div>

<script src="{{ asset('public/admin/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('public/admin/dist/js/adminlte.min.js') }}"></script>
@yield('scripts')
</body>
</html>
