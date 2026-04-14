@extends('admin.layouts.app')

@section('title', 'إضافة مشروع جديد')
@section('page_title', 'إضافة مشروع جديد')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.projects.index') }}">المشاريع</a></li>
    <li class="breadcrumb-item active">إضافة مشروع</li>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">بيانات المشروع</h3>
            </div>
            <form role="form" action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">اسم المشروع</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="أدخل اسم المشروع" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="category">التصنيف</label>
                                <input type="text" name="category" class="form-control" id="category" placeholder="مثل: سكني، تجاري">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="location">الموقع</label>
                                <input type="text" name="location" class="form-control" id="location" placeholder="أدخل موقع المشروع">
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="description">وصف المشروع</label>
                        <textarea name="description" class="form-control" id="description" rows="8" placeholder="أدخل تفاصيل المشروع"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">صورة المشروع الرئيسية</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="image">
                                <label class="custom-file-label" for="image">اختر صورة</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" name="is_published" class="form-check-input" id="is_published" value="1" checked>
                        <label class="form-check-label" for="is_published">عرض المشروع في الموقع</label>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-warning">حفظ المشروع</button>
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-default">إلغاء</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
