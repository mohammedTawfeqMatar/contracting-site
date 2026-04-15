@extends('admin.layouts.app')

@section('title', 'إضافة خبر جديد')
@section('page_title', 'إضافة خبر جديد')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.news.index') }}">الأخبار</a></li>
    <li class="breadcrumb-item active">إضافة خبر</li>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">بيانات الخبر</h3>
            </div>
            <form role="form" action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">عنوان الخبر</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}" placeholder="أدخل عنوان الخبر" required>
                    </div>

                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" name="slug" class="form-control" id="slug" value="{{ old('slug') }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="category">التصنيف</label>
                        <input type="text" name="category" class="form-control" id="category" value="{{ old('category') }}" placeholder="أدخل التصنيف">
                    </div>

                    <div class="form-group">
                        <label for="content">محتوى الخبر</label>
                        <textarea name="content" class="form-control" id="content" rows="10" placeholder="أدخل محتوى الخبر">{{ old('content') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="published_at">تاريخ ووقت النشر</label>
                        <input type="datetime-local" name="published_at" class="form-control" id="published_at" value="{{ old('published_at') }}">
                    </div>

                    <div class="form-group">
                        <label for="image">صورة الخبر</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="image">
                                <label class="custom-file-label" for="image">اختر ملفاً</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" name="is_published" class="form-check-input" id="is_published" value="1" checked>
                        <label class="form-check-label" for="is_published">نشر الخبر فوراً</label>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">حفظ الخبر</button>
                    <a href="{{ route('admin.news.index') }}" class="btn btn-default">إلغاء</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
