@extends('admin.layouts.app')

@section('title', 'إدارة المشاريع')
@section('page_title', 'قائمة المشاريع')

@section('breadcrumb')
    <li class="breadcrumb-item active">المشاريع</li>
@endsection

@section('content')
<div class="card card-outline card-warning">
    <div class="card-header">
        <h3 class="card-title">جميع المشاريع</h3>
        <div class="card-tools">
            <a href="{{ route('admin.projects.create') }}" class="btn btn-warning btn-sm">
                <i class="fas fa-plus"></i> إضافة مشروع جديد
            </a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>اسم المشروع</th>
                    <th>التصنيف</th>
                    <th>الموقع</th>
                    <th>الحالة</th>
                    <th style="width: 150px">العمليات</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="6" class="text-center">لا توجد مشاريع مضافة حالياً.</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
