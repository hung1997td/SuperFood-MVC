@if(!checkPer($_SESSION['user']['id'], 'animation_view'))
    @php(header('Location: /superFood_MVC/admin/dashboard'))
@endif
@extends('admin.layouts.master')
@section('title'){{'Add Animation'}}@endsection
@section('content')
    <div id="layoutSidenav">
        @include('admin.layouts.sideNav')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Quản lý hiệu ứng</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/superFood_MVC/admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Thêm hiệu ứng</li>
                    </ol>
                </div>
                <div style="width: 40%; margin: auto">
                    <form action="/superFood_MVC/admin/animation/store" method="POST">
                        <div class="form-group">
                            <label for="location_addAnimation">Địa điểm:</label>
                            <input type="text" name="location_addAnimation" id="location_addAnimation"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="animation_addAnimation">Hiệu ứng:</label>
                            <input type="text" name="animation_addAnimation" id="animation_addAnimation"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="animation_delay_addAnimation">Hiệu ứng Delay:</label>
                            <input type="text" name="animation_delay_addAnimation" id="animation_delay_addAnimation"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="images_addAnimation">Ảnh:</label>
                            <input type="text" name="images_addAnimation" id="images_addAnimation" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="images_delay_addAnimation">Ảnh Delay:</label>
                            <input type="text" name="images_delay_addAnimation" id="images_delay_addAnimation"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="title_addAnimation">Tiêu để:</label>
                            <input type="text" name="title_addAnimation" id="title_addAnimation" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="title_delay_addAnimation">Tiêu đề Delay:</label>
                            <input type="text" name="title_delay_addAnimation" id="title_delay_addAnimation"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description_addAnimation">Mô tả:</label>
                            <input type="text" name="description_addAnimation" id="description_addAnimation"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description_delay_addAnimation">Mô tả Delay:</label>
                            <input type="text" name="description_delay_addAnimation" id="description_delay_addAnimation"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="link_addAnimation">Link:</label>
                            <input type="text" name="link_addAnimation" id="link_addAnimation" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="link_delay_addAnimation">Link Delay:</label>
                            <input type="text" name="link_delay_addAnimation" id="link_delay_addAnimation"
                                   class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </form>
                </div>
            </main>
            @include('admin.layouts.footer')
        </div>
    </div>
@endsection