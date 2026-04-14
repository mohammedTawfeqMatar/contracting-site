@extends('admin.layouts.app')

@section('title', 'الرسائل والطلبات')
@section('page_title', 'الرسائل والطلبات الواردة')

@section('breadcrumb')
    <li class="breadcrumb-item active">الرسائل</li>
@endsection

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">قائمة الرسائل والطلبات</h3>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>الاسم الكامل</th>
                        <th>البريد الإلكتروني</th>
                        <th>رقم الهاتف</th>
                        <th>نوع الطلب</th>
                        <th>الحالة</th>
                        <th>التاريخ</th>
                        <th>العمليات</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="7" class="text-center py-4">لا توجد رسائل جديدة حالياً.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
