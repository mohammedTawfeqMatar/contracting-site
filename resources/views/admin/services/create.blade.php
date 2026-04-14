@extends('admin.layouts.app')

@section('title', 'إضافة خدمة جديدة')
@section('page_title', 'إضافة خدمة جديدة')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('admin.services.index') }}">الخدمات</a></li>
    <li class="breadcrumb-item active">إضافة خدمة</li>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">بيانات الخدمة</h3>
            </div>
            <form role="form" action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">اسم الخدمة</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="أدخل اسم الخدمة" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="description">وصف الخدمة</label>
                        <textarea name="description" class="form-control" id="description" rows="10" placeholder="أدخل وصفاً تفصيلياً للخدمة"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">صورة الخدمة</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="image">
                                <label class="custom-file-label" for="image">اختر صورة</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" name="is_published" class="form-check-input" id="is_published" value="1" checked>
                        <label class="form-check-label" for="is_published">عرض الخدمة في الموقع</label>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-success">حفظ الخدمة</button>
                    <a href="{{ route('admin.services.index') }}" class="btn btn-default">إلغاء</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
