@extends('admin.layouts.app')

@section('title', 'إدارة الخدمات')
@section('page_title', 'قائمة الخدمات')

@section('breadcrumb')
    <li class="breadcrumb-item active">الخدمات</li>
@endsection

@section('content')
<div class="card card-outline card-success">
    <div class="card-header">
        <h3 class="card-title">جميع الخدمات</h3>
        <div class="card-tools">
            <a href="{{ route('admin.services.create') }}" class="btn btn-success btn-sm">
                <i class="fas fa-plus"></i> إضافة خدمة جديدة
            </a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>العنوان</th>
                    <th>الصورة</th>
                    <th>الحالة</th>
                    <th style="width: 150px">العمليات</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="5" class="text-center">لا توجد خدمات مضافة حالياً.</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
