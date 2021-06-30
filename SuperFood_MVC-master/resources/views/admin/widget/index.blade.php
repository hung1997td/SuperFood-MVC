@if(!checkPer($_SESSION['user']['id'], 'widget_view'))
    @php(header('Location: /superFood_MVC/admin/dashboard'))
@endif
@extends('admin.layouts.master')
@section('title'){{'Widget'}}@endsection
@section('content')
    <div id="layoutSidenav">
        @include('admin.layouts.sideNav')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Quản lý Widget</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/superFood_MVC/admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Quản lý Widget</li>
                    </ol>
                    @if(checkPer($_SESSION['user']['id'], 'widget_add'))
                        <a href="/superFood_MVC/admin/widget/create" class="btn btn-primary addBtn">Thêm Widget
                        </a>
                    @endif
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Bảng Widget
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Ảnh</th>
                                        <th>Địa điểm</th>
                                        <th>Tiêu đề</th>
                                        <th>Mô tả</th>
                                        <th>Link</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($widgets as $widget)
                                        <tr>
                                            <td class="text-center"><img
                                                        src="/superFood_MVC/backend/assets/images/{{ $widget->image }}"
                                                        alt="" width="100" height="100"></td>
                                            <td>{{$widget->location}}</td>
                                            <td>{{$widget->title}}</td>
                                            <td>{{$widget->description}}</td>
                                            <td>{{$widget->link}}</td>
                                            <td>
                                                @if(checkPer($_SESSION['user']['id'], 'widget_edit'))
                                                    <a class="btn btn-primary"
                                                       href="/superFood_MVC/admin/widget/edit/{{$widget->id}}">Sửa</a>
                                                @endif
                                                @if(checkPer($_SESSION['user']['id'], 'widget_delete'))
                                                    <a class="widget_delete btn btn-danger"
                                                       href="/superFood_MVC/admin/widget/delete/{{$widget->id}}">Xóa</a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            @include('admin.layouts.footer')
        </div>
    </div>
@endsection