@extends('admin.layouts.app')

@section('title', 'إدارة الأخبار')
@section('page_title', 'قائمة الأخبار')

@section('breadcrumb')
    <li class="breadcrumb-item active">الأخبار</li>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">جميع الأخبار</h3>
        <div class="card-tools">
            <a href="{{ route('admin.news.create') }}" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i> إضافة خبر جديد
            </a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>العنوان</th>
                    <th>التصنيف</th>
                    <th>الحالة</th>
                    <th>تاريخ النشر</th>
                    <th style="width: 150px">العمليات</th>
                </tr>
            </thead>
            <tbody>
                {{-- البيانات ستعرض هنا لاحقاً من الـ Controller --}}
                <tr>
                    <td colspan="6" class="text-center">لا توجد بيانات لعرضها حالياً.</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
