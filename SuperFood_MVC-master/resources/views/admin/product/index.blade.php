@if(!checkPer($_SESSION['user']['id'], 'product_view'))
    @php(header('Location: /superFood_MVC/admin/dashboard'))
@endif
@extends('admin.layouts.master')
@section('title'){{'Product'}}@endsection
@section('content')
    <div id="layoutSidenav">
        @include('admin.layouts.sideNav')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Quản lý sản phẩm</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/superFood_MVC/admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Quản lý sản phẩm</li>
                    </ol>
                    @if(checkPer($_SESSION['user']['id'], 'product_add'))
                        <a href="/superFood_MVC/admin/product/create" class="btn btn-primary addBtn">Thêm sản phẩm
                            @endif
                        </a>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Bảng sản phẩm
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th>Avatar</th>
                                            <th>Tên</th>
                                            <th>Mô tả</th>
                                            <th>Danh mục</th>
                                            <th>Tags</th>
                                            <th>Hành động</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($products as $key => $product)
                                            <tr>
                                                <td class="text-center"><img
                                                            src="/superFood_MVC/backend/assets/images/{{ $product->avatar }}"
                                                            alt="" width="100" height="100"></td>
                                                <td>{{$product->name}}</td>
                                                <td>{{$product->description}}</td>
                                                <td>
                                                    @foreach ($categories as $category)
                                                        @if ($product->category_id == $category->id)
                                                            {{$category->name}}
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach ($productTags as $productTag)
                                                        @if ($product->id == $productTag->product_id)
                                                            @foreach ($tags as $tag)
                                                                @if($tag->id == $productTag->tag_id)
                                                                    {{$tag->name . ','}}
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @if(checkPer($_SESSION['user']['id'], 'product_edit'))
                                                        <a class="btn btn-primary"
                                                           href="/superFood_MVC/admin/product/edit/{{$product->id}}">Sửa</a>
                                                    @endif
                                                    @if(checkPer($_SESSION['user']['id'], 'product_delete'))
                                                        <a class="news_delete btn btn-danger"
                                                           href="/superFood_MVC/admin/product/delete/{{$product->id}}">Xóa</a>
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