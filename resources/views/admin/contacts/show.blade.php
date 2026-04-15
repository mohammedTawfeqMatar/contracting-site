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
                        <p><strong>الاسم الكامل:</strong> {{ $contact->full_name }}</p>
                        <p><strong>البريد الإلكتروني:</strong> {{ $contact->email }}</p>
                        <p><strong>رقم الهاتف:</strong> {{ $contact->phone }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>نوع الطلب:</strong> {{ $contact->request_type }}</p>
                        <p><strong>تاريخ الطلب:</strong> {{ $contact->created_at->format('Y-m-d H:i') }}</p>
                        <p><strong>الحالة:</strong> <span class="badge badge-info">{{ $contact->status }}</span></p>
                    </div>
                </div>
                <hr>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <h5>نص الرسالة/الطلب:</h5>
                        <div class="p-3 bg-light border rounded">
                            <p>{{ $contact->message }}</p>
                        </div>
                    </div>
                </div>
                
                @if($contact->cv_file_url)
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <h5>السيرة الذاتية المرفقة:</h5>
                            <a href="{{ $contact->cv_file_url }}" class="btn btn-sm btn-info" target="_blank"><i class="fas fa-download"></i> تحميل السيرة الذاتية</a>
                        </div>
                    </div>
                @endif
            </div>
            <div class="card-footer text-right">
                <form action="{{ route('admin.contacts.read', $contact) }}" method="POST" class="d-inline">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> تحديث الحالة</button>
                </form>
                <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('تأكيد الحذف؟')">حذف</button>
                </form>
                <a href="{{ route('admin.contacts.index') }}" class="btn btn-default">العودة للقائمة</a>
            </div>
        </div>
    </div>
</div>
@endsection
