@if(!checkPer($_SESSION['user']['id'], 'post_view'))
    @php(header('Location: /superFood_MVC/admin/dashboard'))
@endif
@extends('admin.layouts.master')
@section('title'){{'Edit News Category'}}@endsection
@section('content')
    <div id="layoutSidenav">
        @include('admin.layouts.sideNav')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Quản lý danh mục tin tức</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/superFood_MVC/admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Sửa danh mục</li>
                    </ol>
                </div>
                <div style="width: 40%; margin: auto">
                    <form action="/superFood_MVC/admin/newsCategories/update/{{$category->id}}" method="POST">
                        <div class="form-group">
                            <label for="newsCategoryNameUpdate">Tên:</label>
                            <input value="{{$category->name}}" type="text" name="newsCategoryNameUpdate" class="form-control" id="newsCategoryNameUpdate">
                        </div>
                        <button class="btn btn-primary">Sửa</button>
                    </form>
                </div>
            </main>
            @include('admin.layouts.footer')
        </div>
    </div>
@endsection