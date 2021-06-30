@if(!checkPer($_SESSION['user']['id'], 'animation_view'))
    @php(header('Location: /superFood_MVC/admin/dashboard'))
@endif
@extends('admin.layouts.master')
@section('title'){{'Animation'}}@endsection
@section('content')
    <div id="layoutSidenav">
        @include('admin.layouts.sideNav')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Quản lý Animation</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/superFood_MVC/admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Quản lý Animation</li>
                    </ol>
                    @if(checkPer($_SESSION['user']['id'], 'animation_add'))
                        <a href="/superFood_MVC/admin/animation/create" class="btn btn-primary addBtn">Thêm Animation
                        </a>
                    @endif
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Bảng Animation
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Địa điểm</th>
                                        <th>Ảnh</th>
                                        <th>Ảnh delay</th>
                                        <th>Tiêu đề</th>
                                        <th>Tiêu đề Delay</th>
                                        <th>Mô tả</th>
                                        <th>Mô tả Delay</th>
                                        <th>Link</th>
                                        <th>Link Delay</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($animations as $animation)
                                        <tr>
                                            <td>{{$animation->id}}</td>
                                            <td>{{$animation->location}}</td>
                                            <td>{{$animation->images}}</td>
                                            <td>{{$animation->images_delay}}</td>
                                            <td>{{$animation->title}}</td>
                                            <td>{{$animation->title_delay}}</td>
                                            <td>{{$animation->description}}</td>
                                            <td>{{$animation->description_delay}}</td>
                                            <td>{{$animation->link}}</td>
                                            <td>{{$animation->link_delay}}</td>
                                            <td>
                                                @if(checkPer($_SESSION['user']['id'], 'animation_edit'))
                                                    <a class="btn btn-primary"
                                                       href="/superFood_MVC/admin/animation/edit/{{$animation->id}}">Sửa</a>
                                                @endif
                                                @if(checkPer($_SESSION['user']['id'], 'animation_delete'))
                                                    <a class="animation_delete btn btn-danger"
                                                       href="/superFood_MVC/admin/animation/delete/{{$animation->id}}">Xóa</a>
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