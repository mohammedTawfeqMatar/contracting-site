@extends('admin.layouts.app')

@section('title', 'إضافة صفحة جديدة')
@section('page_title', 'إنشاء صفحة جديدة')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.pages.index') }}">الصفحات</a></li>
    <li class="breadcrumb-item active">إضافة صفحة</li>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">بيانات الصفحة</h3>
            </div>
            <form role="form" action="{{ route('admin.pages.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">عنوان الصفحة</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="أدخل عنوان الصفحة" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="template">قالب الصفحة</label>
                        <select name="template" class="form-control" id="template">
                            <option value="default">القالب الافتراضي</option>
                            <option value="about">من نحن</option>
                            <option value="contact">اتصل بنا</option>
                            <option value="full-width">عرض كامل</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="content">محتوى الصفحة</label>
                        <textarea name="content" class="form-control" id="content" rows="15" placeholder="أدخل محتوى الصفحة (HTML/Text)"></textarea>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" name="is_published" class="form-check-input" id="is_published" value="1" checked>
                        <label class="form-check-label" for="is_published">نشر الصفحة</label>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-secondary">حفظ الصفحة</button>
                    <a href="{{ route('admin.pages.index') }}" class="btn btn-default">إلغاء</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
