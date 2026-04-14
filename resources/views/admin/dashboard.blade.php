@extends('admin.layouts.app')

@section('title', 'الرئيسية')
@section('page_title', 'لوحة التحكم - نظرة عامة')

@section('breadcrumb')
    <li class="breadcrumb-item active">لوحة التحكم</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>0</h3>
                <p>المشاريع</p>
            </div>
            <div class="icon">
                <i class="fas fa-project-diagram"></i>
            </div>
            <a href="{{ route('admin.projects.index') }}" class="small-box-footer">المزيد <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    
    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>0</h3>
                <p>الخدمات</p>
            </div>
            <div class="icon">
                <i class="fas fa-concierge-bell"></i>
            </div>
            <a href="{{ route('admin.services.index') }}" class="small-box-footer">المزيد <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>0</h3>
                <p>الرسائل الجديدة</p>
            </div>
            <div class="icon">
                <i class="fas fa-envelope"></i>
            </div>
            <a href="{{ route('admin.contacts.index') }}" class="small-box-footer">المزيد <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>0</h3>
                <p>المناقصات النشطة</p>
            </div>
            <div class="icon">
                <i class="fas fa-file-contract"></i>
            </div>
            <a href="{{ route('admin.tenders.index') }}" class="small-box-footer">المزيد <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-12 text-center py-5">
        <img src="{{ asset('public/admin/dist/img/AdminLTELogo.png') }}" alt="Logo" class="img-fluid mb-4" style="max-height: 150px; opacity: 0.5;">
        <h2 class="text-muted">أهلاً بك في نظام إدارة شركة المقاولات</h2>
        <p class="text-muted">استخدم القائمة الجانبية للتنقل بين أقسام لوحة التحكم.</p>
    </div>
</div>
@endsection
