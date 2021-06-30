@extends('site.main.layouts.master')
@section('title'){{'Blog Details'}}@endsection
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
    <!-- Start Blog Details-->
    <div class="blogDetails">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-xl-9">
                    <div class="blogDetails__content animate__animated animate__zoomIn wow" data-wow-delay="0.5s">
                        <div class="blogDetails__content-title">{{$news->title}}</div>
                        <div class="blogDetails__content-subtitle"><span class="subtitle__author">By :<a
                                        href="#">{{$news->author}}</a></span><span class="subtitle__comment"><a
                                        href="#">0</a> comments</span>
                        </div>
                        <div class="blogDetails__content-image"><img
                                    src="/superFood_MVC/backend/assets/images/{{$news->image}}" alt=""></div>
                        <div class="blogDetails__content-text">
                            <?php echo $news->content ?>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="blogDetails__content-tags"><span class="tags__title">Tags : </span>
                                    <a class="tags__item"
                                       href="#">@foreach ($newsTags as $newsTag)
                                            @if ($news->id == $newsTag->news_id)
                                                @foreach ($tags as $tag)
                                                    @if($tag->id == $newsTag->tag_id)
                                                        {{$tag->name . ','}}
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endforeach</a>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="blogDetails__content-categories"><span class="categories__title">categories : <a
                                                href="#"> @foreach ($categories as $category)
                                                @if ($news->category_id == $category->id)
                                                    {{$category->name}}
                                                @endif
                                            @endforeach</a></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="blogDetails__button">
                        <div class="row">
                            <div class="col-6">
                                <?php
                                $previous = \App\News::where('id', '<', $news->id)->orderBy('id', 'desc')->get();

                                if (!$previous->isEmpty()) {
                                    $row = $previous->toArray();
                                    echo "<a href=/superFood_MVC/site/blog_details/" . $row[0]['id'] . ">Previous Post</a>";
                                } else {
                                    echo "<a>Previous Post</a>";
                                }
                                ?>
                            </div>
                            <div class="col-6 d-flex align-items-center justify-content-end">
                                <?php
                                $next = \App\News::where('id', '>', $news->id)->orderBy('id', 'asc')->get();
                                if (!$next->isEmpty()) {
                                    $row = $next->toArray();
                                    echo "<a href=/superFood_MVC/site/blog_details/" . $row[0]['id'] . ">Next Post</a>";
                                } else {
                                    echo "<a>Next Post</a>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="blogDetails__comment">
                        <div class="blogDetails__comment-title">Leave A Comments</div>
                        <form class="blogDetails__comment-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form__name">
                                        <input type="text" name="name" placeholder="User name*" value required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form__email">
                                        <input type="email" name="email" placeholder="Email*" value required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form__message">
                                        <textarea name="message" placeholder="Your comment*" rows="5" cols="30"
                                                  required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form__submit btn btn-color">
                                <input type="submit" value="Submit">
                            </div>
                        </form>
                    </div>
                    <div class="blogDetails__related">
                        <div class="blogDetails__related-title">Related post</div>
                        <div class="owl-blogDetails owl-carousel owl-theme">
                            <?php
                            $news = \App\News::where('category_id', $news->category_id)->get();
                            ?>
                            @if (!$news->isEmpty())
                                @foreach ($news as $news_item)
                                    <div class="blog__item animate__animated animate__zoomIn wow" data-wow-delay="0.5s">
                                        <div class="blog__item-image"><?php
                                            echo "<a href=/superFood_MVC/site/blog_details/$news_item->id><img
                                                            src=/superFood_MVC/backend/assets/images/" . $news_item->image . "></a>"
                                            ?>
                                            <div class="image__date"><span class="date">
                                            <?php
                                                    $date = new DateTime($news_item->date);
                                                    echo $date->format('d') ?>
                                        </span><span class="month"><?php
                                                    echo $date->format('M') ?></span>
                                            </div>
                                        </div>
                                        <div class="blog__item-info">
                                            <div class="info__subtitle">
                                                @foreach ($categories as $category)
                                                    @if ($news_item->category_id == $category->id)
                                                        {{$category->name}}
                                                    @endif
                                                @endforeach
                                            </div>
                                            <div class="info__title">
                                                <?php
                                                echo "<a title='" . $news_item->title . "' href=/superFood_MVC/site/blog_details/$news_item->id><span>" . $news_item->title . "</span></a>"
                                                ?>
                                            </div>
                                            <div class="info__text">{{$news_item->description}}
                                            </div>
                                            <?php
                                            echo "<a class=info__readmore
                                                   href=/superFood_MVC/site/blog_details/$news_item->id><span>Read More</span></a>"
                                            ?>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3">
                    @include('site.main.components.sidebar')
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Details-->
@endsection