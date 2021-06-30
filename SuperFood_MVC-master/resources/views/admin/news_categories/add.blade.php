@if(!checkPer($_SESSION['user']['id'], 'post_view'))
    @php(header('Location: /superFood_MVC/admin/dashboard'))
@endif
@extends('admin.layouts.master')
@section('title'){{'Add News Category'}}@endsection
@section('content')
    <div id="layoutSidenav">
        @include('admin.layouts.sideNav')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Quản lý danh mục tin tức</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/superFood_MVC/admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Thêm danh mục</li>
                    </ol>
                </div>
                <div style="width: 40%; margin: auto">
                <form action="/superFood_MVC/admin/newsCategories/store" method="POST">
                        <div class="form-group">
                            <label for="newsCategoryNameAdd">Tên:</label>
                            <input type="text" name="newsCategoryNameAdd" class="form-control" id="newsCategoryNameAdd">
                        </div>
                        <div class="form-group">
                            <select name="newsCategoryCategoryAdd" id="newsCategoryCategoryAdd" class="form-control">
                                <option value="0"><b>Chọn là danh mục cha:</b></option>
                                {!! $html !!}
                            </select>
                        </div>
                    <button class="btn btn-primary">Thêm</button>
                </form>
                </div>
            </main>
            @include('admin.layouts.footer')
        </div>
    </div>
@endsection