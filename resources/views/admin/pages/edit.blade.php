@extends('admin.layouts.app')

@section('title', 'تعديل صفحة')
@section('page_title', 'تعديل صفحة')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.pages.index') }}">الصفحات</a></li>
    <li class="breadcrumb-item active">تعديل</li>
@endsection

@section('content')
<div class="card card-secondary">
    <div class="card-header"><h3 class="card-title">تعديل بيانات الصفحة</h3></div>
    <form action="{{ route('admin.pages.update', $page) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label>العنوان</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $page->title) }}" required>
            </div>
            <div class="form-group">
                <label>Slug</label>
                <input type="text" name="slug" class="form-control" value="{{ old('slug', $page->slug) }}">
            </div>
            <div class="form-group">
                <label>القالب</label>
                <input type="text" name="template" class="form-control" value="{{ old('template', $page->template) }}">
            </div>
            <div class="form-group">
                <label>المحتوى</label>
                <textarea name="content" class="form-control" rows="12">{{ old('content', $page->content) }}</textarea>
            </div>
            <div class="form-check">
                <input type="checkbox" name="is_published" class="form-check-input" id="is_published" value="1" {{ old('is_published', $page->is_published) ? 'checked' : '' }}>
                <label class="form-check-label" for="is_published">نشر الصفحة</label>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-secondary">حفظ التعديلات</button>
            <a href="{{ route('admin.pages.index') }}" class="btn btn-default">إلغاء</a>
        </div>
    </form>
</div>
@endsection
