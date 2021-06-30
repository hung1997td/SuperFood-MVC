@if(!checkPer($_SESSION['user']['id'], 'product_view'))
    @php(header('Location: /superFood_MVC/admin/dashboard'))
@endif
@extends('admin.layouts.master')
@section('title'){{'Product Categories'}}@endsection
@section('content')
    <div id="layoutSidenav">
        @include('admin.layouts.sideNav')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Quản lý danh mục sản phẩm</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/superFood_MVC/admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Quản lý danh mục sản phẩm</li>
                    </ol>
                    @if(checkPer($_SESSION['user']['id'], 'product_add'))
                        <a href="/superFood_MVC/admin/productCategories/create" class="btn btn-primary addBtn">Thêm danh mục
                        </a>
                    @endif
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Bảng danh mục sản phẩm
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>{{$category->id}}</td>
                                            <td>{{$category->name}}</td>
                                            <td>
                                                @if(checkPer($_SESSION['user']['id'], 'product_edit'))
                                                    <a class="btn btn-primary"
                                                       href="/superFood_MVC/admin/productCategories/edit/{{$category->id}}">Sửa</a>
                                                @endif
                                                @if(checkPer($_SESSION['user']['id'], 'product_delete'))
                                                    <a class="news_categories_delete btn btn-danger"
                                                       href="/superFood_MVC/admin/productCategories/delete/{{$category->id}}">Xóa</a>
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