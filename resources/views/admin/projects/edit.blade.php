@extends('admin.layouts.app')

@section('title', 'تعديل مشروع')
@section('page_title', 'تعديل مشروع')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.projects.index') }}">المشاريع</a></li>
    <li class="breadcrumb-item active">تعديل</li>
@endsection

@section('content')
<div class="card card-warning">
    <div class="card-header"><h3 class="card-title">تعديل بيانات المشروع</h3></div>
    <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label>اسم المشروع</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $project->title) }}" required>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>الخدمة</label>
                        <select name="service_id" class="form-control" required>
                            @foreach($services as $service)
                                <option value="{{ $service->id }}" {{ (int) old('service_id', $project->service_id) === $service->id ? 'selected' : '' }}>{{ $service->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>التصنيف</label>
                        <input type="text" name="category" class="form-control" value="{{ old('category', $project->category) }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>الموقع</label>
                        <input type="text" name="location" class="form-control" value="{{ old('location', $project->location) }}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Slug</label>
                <input type="text" name="slug" class="form-control" value="{{ old('slug', $project->slug) }}">
            </div>
            <div class="form-group">
                <label>الوصف</label>
                <textarea name="description" class="form-control" rows="8">{{ old('description', $project->description) }}</textarea>
            </div>
            <div class="form-group">
                <label>صورة جديدة (اختياري)</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-check">
                <input type="checkbox" name="is_published" class="form-check-input" id="is_published" value="1" {{ old('is_published', $project->is_published) ? 'checked' : '' }}>
                <label class="form-check-label" for="is_published">عرض المشروع في الموقع</label>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-warning">حفظ التعديلات</button>
            <a href="{{ route('admin.projects.index') }}" class="btn btn-default">إلغاء</a>
        </div>
    </form>
</div>
@endsection
