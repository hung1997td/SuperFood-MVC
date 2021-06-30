@extends('admin.layouts.master')
@section('title'){{'Dashboard'}}@endsection
@section('content')
    <div id="layoutSidenav">
        @include('admin.layouts.sideNav')
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body"><p style="font-size: 30px; text-align: center">
                                        <?php
                                        echo \App\Users::count();
                                        ?>
                                        <i style="padding-left: 10px" class="fas fa-user"></i>
                                    </p>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="/superFood_MVC/admin/users">Xem thông tin chi
                                        tiết</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body"><p style="font-size: 30px; text-align: center">
                                        <?php
                                        echo \App\News::count();;
                                        ?>
                                        <i style="padding-left: 10px" class="fad fa-newspaper"></i>
                                    </p></div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="/superFood_MVC/admin/news">Xem thông tin chi
                                        tiết</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body"><p style="font-size: 30px; text-align: center">
                                        <?php
                                        echo \App\Product::count();;
                                        ?>
                                        <i style="padding-left: 10px" class="fad fa-shopping-bag"></i>
                                    </p></div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="/superFood_MVC/admin/product">Xem thông tin chi
                                        tiết</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-area mr-1"></i>
                                    Area Chart Example
                                </div>
                                <div class="card-body">
                                    <canvas id="myAreaChart" width="100%" height="40"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-bar mr-1"></i>
                                    Bar Chart Example
                                </div>
                                <div class="card-body">
                                    <canvas id="myBarChart" width="100%" height="40"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Bảng tin tức
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Ảnh tin</th>
                                        <th>Tiêu đề</th>
                                        <th>Mô tả</th>
                                        <th>Tác giả</th>
                                        <th>Danh mục</th>
                                        <th>Tags</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($news as $key => $news_item)
                                        <tr>
                                            <td class="text-center"><img src="/superFood_MVC/backend/assets/images/{{ $news_item->image }}" alt="" width="100" height="100"></td>
                                            <td>{{$news_item->title}}</td>
                                            <td>{{$news_item->description}}</td>
                                            <td>{{$news_item->author}}</td>
                                            <td>
                                                @foreach ($categories as $category)
                                                    @if ($news_item->category_id == $category->id)
                                                        {{$category->name}}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($newsTags as $newsTag)
                                                    @if ($news_item->id == $newsTag->news_id)
                                                        @foreach ($tags as $tag)
                                                            @if($tag->id == $newsTag->tag_id)
                                                                {{$tag->name . ','}}
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                @endforeach
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