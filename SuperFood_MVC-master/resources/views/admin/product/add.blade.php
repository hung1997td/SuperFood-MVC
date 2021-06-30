@if(!checkPer($_SESSION['user']['id'], 'product_add'))
    @php(header('Location: /superFood_MVC/admin/dashboard'))
@endif
@extends('admin.layouts.master')
@section('title'){{'Add Product'}}@endsection
@section('content')
    <div id="layoutSidenav">
        @include('admin.layouts.sideNav')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Quản lý tin tức</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="/superFood_MVC/admin/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Thêm tin tức</li>
                    </ol>
                </div>
                <div style="width: 40%; margin: auto">
                    <form action="/superFood_MVC/admin/product/store" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="form-group position-relative text-center">
                                <img class="imagesForm" width="100" height="100" src="/superFood_MVC/backend/assets/images/product/default.png"/>
                                <label class="formLabel" for="productAvatar"><i class="fas fa-pen"></i><input
                                            style="display: none" type="file" id="productAvatar"
                                            name="fileToUpload"></label>
                            </div>
                            <div class="form-group">
                                <label for="productNameAdd">Tên:</label>
                                <input type="text" name="productNameAdd" class="form-control" id="productNameAdd">
                            </div>
                            <div class="form-group">
                                <label for="productDescAdd">Mô tả:</label>
                                <input type="text" name="productDescAdd" class="form-control" id="productDescAdd">
                            </div>
                            <div class="form-group">
                                <label for="productContentAdd">Nội dung:</label>
                                <textarea type="text" name="productContentAdd" class="form-control"
                                          id="productContentAdd"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="productBasePriceAdd">Giá gốc:</label>
                                <input type="number" name="productBasePriceAdd" class="form-control" id="productBasePriceAdd">
                            </div>
                            <div class="form-group">
                                <label for="productDiscountPriceAdd">Giá ưu đãi:</label>
                                <input type="number" name="productDiscountPriceAdd" class="form-control" id="productDiscountPriceAdd">
                            </div>
                            <label for="productThumbnailsAdd">Thumbnails:</label>
                            <div class="form-group position-relative text-center">
                                <img class="imagesForm" width="100" height="100" src="/superFood_MVC/backend/assets/images/product/default.png"/>
                                <label class="formLabel" for="productThumbnailsAdd"><i class="fas fa-pen"></i><input
                                            style="display: none" type="file" id="productThumbnailsAdd" multiple="multiple"
                                            name="productThumbnailsAdd[]"></label>
                            </div>
                            <div class="form-group">
                                <label for="productCategoryAdd">Danh mục:</label>
                                <select name="productCategoryAdd" id="newsCategoryAdd" class="form-control">
                                    {!! $html !!}
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tag:</label>
                                @foreach ($tags as $key => $tag)
                                    <label style="display: inline-block; width: 100%;"><input style="margin-right: 5px" name="tags[]" type="checkbox" value="{{$tag->id}}">{{$tag->name}}</label>
                                @endforeach
                            </div>
                            <button class="btn btn-primary">Thêm</button>
                        </div>
                    </form>
                </div>
            </main>
            @include('admin.layouts.footer')
        </div>
    </div>
@endsection