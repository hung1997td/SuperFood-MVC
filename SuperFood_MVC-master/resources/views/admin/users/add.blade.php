@if(!checkPer($_SESSION['user']['id'], 'user_add'))
    @php(header('Location: /superFood_MVC/admin/dashboard'))
@endif
@extends('admin.layouts.master')
@section('title'){{'Add Users'}}@endsection
@section('content')
    <div id="layoutSidenav">
        @include('admin.layouts.sideNav')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Quản lý người dùng</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/superFood_MVC/admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Thêm người dùng</li>
                    </ol>
                </div>
                <div style="width: 40%; margin: auto">
                    <form action="/superFood_MVC/admin/users/store" method="POST" enctype="multipart/form-data">
                        <div class="form-group position-relative text-center">
                            <img class="imagesForm" width="100" src="/superFood_MVC/backend/assets/images/user/defaultImage.png"/>
                            <label class="formLabel" for="fileToAddUser"><i class="fas fa-pen"></i><input
                                        style="display: none" type="file" id="fileToAddUser"
                                        name="fileToUpload"></label>
                        </div>
                        <div class="form-group">
                            <label for="userFirstNameAdd">Tên:</label>
                            <input type="text" name="userFirstNameAdd" class="form-control" id="userFirstNameAdd">
                        </div>
                        <div class="form-group">
                            <label for="userLastNameAdd">Họ:</label>
                            <input type="text" name="userLastNameAdd" class="form-control" id="userLastNameAdd">
                        </div>
                        <div class="form-group">
                            <label for="userEmailAdd">Email:</label>
                            <input type="text" name="userEmailAdd" class="form-control" id="userEmailAdd">
                        </div>
                        <div class="form-group">
                            <label for="userPasswordAdd">Mật khẩu:</label>
                            <input type="password" name="userPasswordAdd" class="form-control" id="userPasswordAdd">
                        </div>
                        <div class="form-group">
                            <label for="userRepasswordAdd">Nhập lại mật khẩu:</label>
                            <input type="password" name="userRepasswordAdd" class="form-control" id="userRepasswordAdd">
                        </div>
                        <div class="form-group">
                            <label for="userRoleAdd">Nhóm quyền:</label>
                            <select name="role_id" class="form-control" id="userRoleAdd">
                                <option value=""></option>
                                @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
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