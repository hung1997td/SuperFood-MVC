@if(!checkPer($_SESSION['user']['id'], 'widget_view'))
    @php(header('Location: /superFood_MVC/admin/dashboard'))
@endif
@extends('admin.layouts.master')
@section('title'){{'Add Widget'}}@endsection
@section('content')
    <div id="layoutSidenav">
        @include('admin.layouts.sideNav')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Quản lý Widget</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/superFood_MVC/admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Thêm Widget</li>
                    </ol>
                </div>
                <div style="width: 40%; margin: auto">
                    <form action="/superFood_MVC/admin/widget/store" method="POST" enctype="multipart/form-data">
                        <div class="form-group position-relative text-center">
                            <img class="imagesForm" width="100" height="100" src="/superFood_MVC/backend/assets/images/widget/default.png"/>
                            <label class="formLabel" for="fileToAddWidget"><i class="fas fa-pen"></i><input
                                        style="display: none" type="file" id="fileToAddWidget"
                                        name="fileToUpload"></label>
                        </div>
                        <div class="form-group">
                            <label for="location_addWidget">Địa điểm:</label>
                            <input type="text" name="location_addWidget" id="location_addWidget" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="title_addWidget">Tiêu đề:</label>
                            <input type="text" name="title_addWidget" id="title_addWidget" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description_addWidget">Mô tả:</label>
                            <input type="text" name="description_addWidget" id="description_addWidget"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="content_addWidget">Nội dung:</label>
                            <input type="text" name="content_addWidget" id="content_addWidget"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="link_addWidget">Link:</label>
                            <input type="text" name="link_addWidget" id="link_addWidget" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="number_addWidget">Số:</label>
                            <input type="text" name="number_addWidget" id="number_addWidget" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="author_addWidget">Tác giả:</label>
                            <input type="text" name="author_addWidget" id="author_addWidget" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="position_addWidget">Vị trí:</label>
                            <input type="text" name="position_addWidget" id="position_addWidget" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </form>
                </div>
            </main>
            @include('admin.layouts.footer')
        </div>
    </div>
@endsection