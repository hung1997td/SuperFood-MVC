@extends('site.main.layouts.master')
@section('title'){{'Blog Categories'}}@endsection
@section('content')
    <div class="banner animate__animated animate__fadeIn wow">
        @foreach($widgets as $widget)
            @if($widget->location == 'banner-item')
                <div class="banner__background"><img src="/superFood_MVC/backend/assets/images/{{$widget->image}}" alt="">
                </div>
                <div class="banner__content text-center my-auto">
                    <div class="banner__content-title">@yield('title')</div>
                    <div class="banner__content-subtitle">{{$widget->description}}<i
                                class="fal fa-angle-right"></i><span>@yield('title')</span>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
<!-- Start Blog-->
<div class="blog">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-xl-9">
                <div class="blog__content">
                    <?php
                    $per_page = 2;
                    $allNews = \App\News::where('category_id', $id)->get();
                    $news = \App\News::where('category_id', $id)->orderBy('id', 'desc')->limit($per_page)->get();
                    ?>
                    @include('site.main.components.blog_item')
                </div>
                <div class="pagination">
                    @php
                        $so_du = $newsCount % $per_page;
                        $count_page = (int)($newsCount / $per_page);
                        if ($so_du != 0) {
                           $count_page++;
                        }
                    @endphp
                    @for ($i = 1; $i <= $count_page; $i++)
                        <span class="@if($i == 1) current @endif">
                                <a data-count="{{$i}}">{{$i}}</a>
                            </span>
                    @endfor
                </div>
            </div>
            <div class="col-lg-4 col-xl-3">
                @include('site.main.components.sidebar')
            </div>
        </div>
    </div>
</div>
<!-- End Blog-->
@endsection
@section('script')
<script>
    $('.pagination span a').click(function () {
        $('.pagination span').removeClass('current');
        $(this).parents('span').addClass('current');

        var nut_phan_trang = $(this).data('count');
        $.ajax({
            url: '/superFood_MVC/site/blog_categories_paginate',
            type: 'GET',
            data: {
                id: '<?php echo $id;?>',
                total: '<?php echo $newsCount;?>',
                page: nut_phan_trang,
                per_page: '<?php echo $per_page;?>',
            },
            success: function (resp) {
                $('.blog__content').html(resp);
            },
            error: function () {
                alert('goi ajax that bai');
            }
        });
    })
</script>
@endsection