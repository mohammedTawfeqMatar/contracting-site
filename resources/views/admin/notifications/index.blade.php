@extends('admin.layouts.app')

@section('title', 'الإشعارات')
@section('page_title', 'إدارة الإشعارات')

@section('breadcrumb')
    <li class="breadcrumb-item active">الإشعارات</li>
@endsection

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h3 class="card-title">كل الإشعارات</h3>
        <form action="{{ route('admin.notifications.read-all') }}" method="POST">
            @csrf
            @method('PATCH')
            <button class="btn btn-sm btn-primary">تعليم الكل كمقروء</button>
        </form>
    </div>
    <div class="card-body p-0">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>العنوان</th>
                    <th>النص</th>
                    <th>الحالة</th>
                    <th>التاريخ</th>
                    <th>إجراء</th>
                </tr>
            </thead>
            <tbody>
                @forelse($notifications as $notification)
                    <tr>
                        <td>{{ $notification->data['title'] ?? 'إشعار' }}</td>
                        <td>{{ $notification->data['message'] ?? '' }}</td>
                        <td>{{ $notification->read_at ? 'مقروء' : 'غير مقروء' }}</td>
                        <td>{{ $notification->created_at->format('Y-m-d H:i') }}</td>
                        <td>
                            @if(!$notification->read_at)
                                <form action="{{ route('admin.notifications.read', $notification->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PATCH')
                                    <button class="btn btn-sm btn-success">تعليم كمقروء</button>
                                </form>
                            @endif
                            @if(!empty($notification->data['url']))
                                <a class="btn btn-sm btn-info" href="{{ $notification->data['url'] }}">فتح</a>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="5" class="text-center">لا توجد إشعارات.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if(method_exists($notifications, 'links'))
        <div class="card-footer">{{ $notifications->links() }}</div>
    @endif
</div>
@endsection
