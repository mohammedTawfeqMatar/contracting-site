@extends('admin.layouts.app')

@section('title', 'تعديل خبر')
@section('page_title', 'تعديل خبر')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.news.index') }}">الأخبار</a></li>
    <li class="breadcrumb-item active">تعديل</li>
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header"><h3 class="card-title">تعديل بيانات الخبر</h3></div>
    <form action="{{ route('admin.news.update', $news) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label>العنوان</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $news->title) }}" required>
            </div>
            <div class="form-group">
                <label>Slug</label>
                <input type="text" name="slug" class="form-control" value="{{ old('slug', $news->slug) }}">
            </div>
            <div class="form-group">
                <label>التصنيف</label>
                <input type="text" name="category" class="form-control" value="{{ old('category', $news->category) }}">
            </div>
            <div class="form-group">
                <label>المحتوى</label>
                <textarea name="content" class="form-control" rows="10">{{ old('content', $news->content) }}</textarea>
            </div>
            <div class="form-group">
                <label>تاريخ النشر</label>
                <input type="datetime-local" name="published_at" class="form-control" value="{{ old('published_at', optional($news->published_at)->format('Y-m-d\TH:i')) }}">
            </div>
            <div class="form-group">
                <label>صورة جديدة (اختياري)</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-check">
                <input type="checkbox" name="is_published" class="form-check-input" id="is_published" value="1" {{ old('is_published', $news->is_published) ? 'checked' : '' }}>
                <label class="form-check-label" for="is_published">نشر الخبر</label>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary">حفظ التعديلات</button>
            <a href="{{ route('admin.news.index') }}" class="btn btn-default">إلغاء</a>
        </div>
    </form>
</div>
@endsection
