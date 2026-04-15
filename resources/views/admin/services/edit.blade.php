@extends('admin.layouts.app')

@section('title', 'تعديل خدمة')
@section('page_title', 'تعديل خدمة')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.services.index') }}">الخدمات</a></li>
    <li class="breadcrumb-item active">تعديل</li>
@endsection

@section('content')
<div class="card card-success">
    <div class="card-header"><h3 class="card-title">تعديل بيانات الخدمة</h3></div>
    <form action="{{ route('admin.services.update', $service) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label>اسم الخدمة</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $service->title) }}" required>
            </div>
            <div class="form-group">
                <label>Slug</label>
                <input type="text" name="slug" class="form-control" value="{{ old('slug', $service->slug) }}">
            </div>
            <div class="form-group">
                <label>الوصف</label>
                <textarea name="description" class="form-control" rows="8">{{ old('description', $service->description) }}</textarea>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>الأيقونة</label>
                        <input type="text" name="icon" class="form-control" value="{{ old('icon', $service->icon) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>ترتيب الظهور</label>
                        <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', $service->sort_order) }}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>صورة جديدة (اختياري)</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-check">
                <input type="checkbox" name="is_published" class="form-check-input" id="is_published" value="1" {{ old('is_published', $service->is_published) ? 'checked' : '' }}>
                <label class="form-check-label" for="is_published">عرض الخدمة في الموقع</label>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-success">حفظ التعديلات</button>
            <a href="{{ route('admin.services.index') }}" class="btn btn-default">إلغاء</a>
        </div>
    </form>
</div>
@endsection
