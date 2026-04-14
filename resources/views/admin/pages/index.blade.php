@extends('admin.layouts.app')

@section('title', 'إدارة الصفحات')
@section('page_title', 'قائمة الصفحات')

@section('breadcrumb')
    <li class="breadcrumb-item active">الصفحات</li>
@endsection

@section('content')
<div class="card card-outline card-secondary">
    <div class="card-header">
        <h3 class="card-title">جميع الصفحات</h3>
        <div class="card-tools">
            <a href="{{ route('admin.pages.create') }}" class="btn btn-secondary btn-sm">
                <i class="fas fa-plus"></i> إضافة صفحة جديدة
            </a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>العنوان</th>
                    <th>الرابط (Slug)</th>
                    <th>القالب</th>
                    <th>الحالة</th>
                    <th style="width: 150px">العمليات</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="6" class="text-center">لا توجد صفحات مضافة حالياً.</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
