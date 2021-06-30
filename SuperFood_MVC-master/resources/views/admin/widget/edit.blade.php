@if(!checkPer($_SESSION['user']['id'], 'animation_view'))
    @php(header('Location: /superFood_MVC/admin/dashboard'))
@endif
@extends('admin.layouts.master')
@section('title'){{'Edit Widget'}}@endsection
@section('content')
    <div id="layoutSidenav">
        @include('admin.layouts.sideNav')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Quản lý Widget</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/superFood_MVC/admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Sửa Widget</li>
                    </ol>
                </div>
                <div style="width: 40%; margin: auto">
                    <form action="/superFood_MVC/admin/widget/update/{{$widget->id}}" method="POST" enctype="multipart/form-data">
                        <div class="form-group position-relative text-center">
                            <img class="imagesForm" width="100" height="100" src="/superFood_MVC/backend/assets/images/{{ $widget->image }}"/>
                            <label class="formLabel" for="fileToEditWidget"><i class="fas fa-pen"></i><input
                                        style="display: none" type="file" id="fileToEditWidget"
                                        name="fileToUpload"></label>
                        </div>
                        <div class="form-group">
                            <label for="location_editWidget">Địa điểm:</label>
                            <input value="{{$widget->location}}" type="text" name="location_editWidget" id="location_editWidget" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="title_editWidget">Tiêu đề:</label>
                            <input value="{{$widget->title}}" type="text" name="title_editWidget" id="title_editWidget" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description_editWidget">Mô tả:</label>
                            <input value="{{$widget->description}}" type="text" name="description_editWidget" id="description_editWidget"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="content_editWidget">Nội dung:</label>
                            <input type="text" name="content_editWidget" id="content_editWidget"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="link_editWidget">Link:</label>
                            <input value="{{$widget->link}}" type="text" name="link_editWidget" id="link_editWidget" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="number_editWidget">Số:</label>
                            <input value="{{$widget->number}}" type="text" name="number_editWidget" id="number_editWidget" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="author_editWidget">Tác giả:</label>
                            <input value="{{$widget->author}}" type="text" name="author_editWidget" id="author_editWidget" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="position_editWidget">Vị trí:</label>
                            <input value="{{$widget->position}}" type="text" name="position_editWidget" id="position_editWidget" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Sửa</button>
                    </form>
                </div>
            </main>
            @include('admin.layouts.footer')
        </div>
    </div>
@endsection