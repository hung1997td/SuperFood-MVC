@if(!checkPer($_SESSION['user']['id'], 'animation_view'))
    @php(header('Location: /superFood_MVC/admin/dashboard'))
@endif
@extends('admin.layouts.master')
@section('title'){{'Edit Animation'}}@endsection
@section('content')
    <div id="layoutSidenav">
        @include('admin.layouts.sideNav')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Quản lý hiệu ứng</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/superFood_MVC/admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Sửa hiệu ứng</li>
                    </ol>
                </div>
                <div style="width: 40%; margin: auto">
                    <form action="/superFood_MVC/admin/animation/update/{{$animation->id}}" method="POST">
                        <div class="form-group">
                            <label for="location_editAnimation">Địa điểm:</label>
                            <input value="{{$animation->location}}" type="text" name="location_editAnimation" id="location_editAnimation"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="animation_editAnimation">Hiệu ứng:</label>
                            <input value="{{$animation->animation}}" type="text" name="animation_editAnimation" id="animation_editAnimation"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="animation_delay_editnimation">Hiệu ứng Delay:</label>
                            <input value="{{$animation->animation_delay}}" type="text" name="animation_delay_editAnimation" id="animation_delay_editAnimation"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="images_editAnimation">Ảnh:</label>
                            <input value="{{$animation->images}}" type="text" name="images_editAnimation" id="images_editAnimation" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="images_delay_editAnimation">Ảnh Delay:</label>
                            <input value="{{$animation->images_delay}}" type="text" name="images_delay_editAnimation" id="images_delay_editAnimation"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="title_editAnimation">Tiêu để:</label>
                            <input value="{{$animation->title}}" type="text" name="title_editAnimation" id="title_editAnimation" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="title_delay_editAnimation">Tiêu đề Delay:</label>
                            <input value="{{$animation->title_delay}}" type="text" name="title_delay_editAnimation" id="title_delay_editAnimation"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description_editAnimation">Mô tả:</label>
                            <input value="{{$animation->description}}" type="text" name="description_editAnimation" id="description_editAnimation"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description_delay_editAnimation">Mô tả Delay:</label>
                            <input value="{{$animation->description_delay}}" type="text" name="description_delay_editAnimation" id="description_delay_editAnimation"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="link_editAnimation">Link:</label>
                            <input value="{{$animation->link}}" type="text" name="link_editAnimation" id="link_editAnimation" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="link_delay_editAnimation">Link Delay:</label>
                            <input value="{{$animation->link_delay}}" type="text" name="link_delay_editAnimation" id="link_delay_editAnimation"
                                   class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Sửa</button>
                    </form>
                </div>
            </main>
            @include('admin.layouts.footer')
        </div>
    </div>
@endsection