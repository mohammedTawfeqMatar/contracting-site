@extends('admin.layouts.app')

@section('title', 'إعدادات الموقع')
@section('page_title', 'إعدادات الموقع')

@section('breadcrumb')
    <li class="breadcrumb-item active">إعدادات الموقع</li>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">الإعدادات العامة</h3>
            </div>
            <form role="form" action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="site_name">اسم الشركة</label>
                                <input type="text" name="site_name" class="form-control" id="site_name" placeholder="أدخل اسم الشركة">
                            </div>

                            <div class="form-group">
                                <label for="logo">شعار الشركة</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="logo" class="custom-file-input" id="logo">
                                        <label class="custom-file-label" for="logo">اختر شعاراً</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="primary_color">اللون الرئيسي</label>
                                <input type="color" name="primary_color" class="form-control" id="primary_color">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="contact_email">البريد الإلكتروني</label>
                                <input type="email" name="contact_email" class="form-control" id="contact_email" placeholder="أدخل البريد الإلكتروني">
                            </div>

                            <div class="form-group">
                                <label for="contact_phone">رقم الهاتف</label>
                                <input type="text" name="contact_phone" class="form-control" id="contact_phone" placeholder="أدخل رقم الهاتف">
                            </div>

                            <div class="form-group">
                                <label for="address">العنوان</label>
                                <textarea name="address" class="form-control" id="address" rows="3" placeholder="أدخل عنوان الشركة"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-12">
                            <h5>روابط التواصل الاجتماعي</h5>
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="facebook">فيسبوك</label>
                                <input type="text" name="facebook" class="form-control" id="facebook" placeholder="رابط فيسبوك">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="twitter">تويتر</label>
                                <input type="text" name="twitter" class="form-control" id="twitter" placeholder="رابط تويتر">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="instagram">انستجرام</label>
                                <input type="text" name="instagram" class="form-control" id="instagram" placeholder="رابط انستجرام">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-info px-5">حفظ كافة الإعدادات</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
