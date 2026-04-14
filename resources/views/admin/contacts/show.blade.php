@extends('admin.layouts.app')

@section('title', 'تفاصيل الرسالة')
@section('page_title', 'تفاصيل الرسالة/الطلب')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.contacts.index') }}">الرسائل</a></li>
    <li class="breadcrumb-item active">تفاصيل</li>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">معلومات الطلب</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>الاسم الكامل:</strong> <span id="full_name">---</span></p>
                        <p><strong>البريد الإلكتروني:</strong> <span id="email">---</span></p>
                        <p><strong>رقم الهاتف:</strong> <span id="phone">---</span></p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>نوع الطلب:</strong> <span id="request_type">---</span></p>
                        <p><strong>تاريخ الطلب:</strong> <span id="created_at">---</span></p>
                        <p><strong>الحالة:</strong> <span class="badge badge-info" id="status">قيد الانتظار</span></p>
                    </div>
                </div>
                <hr>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <h5>نص الرسالة/الطلب:</h5>
                        <div class="p-3 bg-light border rounded">
                            <p id="message">لا يوجد نص لعرضه.</p>
                        </div>
                    </div>
                </div>
                
                <div class="row mt-3" id="cv_section" style="display: none;">
                    <div class="col-md-12">
                        <h5>السيرة الذاتية المرفقة:</h5>
                        <a href="#" class="btn btn-sm btn-info" target="_blank"><i class="fas fa-download"></i> تحميل السيرة الذاتية</a>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <button type="button" class="btn btn-success"><i class="fas fa-check"></i> تم التواصل/الإنجاز</button>
                <a href="{{ route('admin.contacts.index') }}" class="btn btn-default">العودة للقائمة</a>
            </div>
        </div>
    </div>
</div>
@endsection
