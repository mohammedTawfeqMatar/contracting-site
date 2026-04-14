@extends('admin.layouts.app')

@section('title', 'إدارة المناقصات')
@section('page_title', 'قائمة المناقصات')

@section('breadcrumb')
    <li class="breadcrumb-item active">المناقصات</li>
@endsection

@section('content')
<div class="card card-outline card-danger">
    <div class="card-header">
        <h3 class="card-title">جميع المناقصات</h3>
        <div class="card-tools">
            <a href="{{ route('admin.tenders.create') }}" class="btn btn-danger btn-sm">
                <i class="fas fa-plus"></i> إضافة مناقصة جديدة
            </a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>العنوان</th>
                    <th>نوع العمل</th>
                    <th>تاريخ الإغلاق</th>
                    <th>الحالة</th>
                    <th style="width: 150px">العمليات</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="6" class="text-center">لا توجد مناقصات مضافة حالياً.</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
