@extends('site.main.layouts.master')
@section('title'){{'Home'}}@endsection
@section('content')
    <!-- Start Slider-->
    <div class="slider">
        <div class="owl-slider owl-carousel owl-theme">
            @php($animation_arr = [])
            @foreach($animations as $animation)
                @if($animation->location == 'slider-item')
                    @php($animation_arr[] = $animation)
                @endif
            @endforeach
            @php($count = 0)
            @foreach($widgets as $widget)
                @if($widget->location == 'slider-item')
                    @php($count++)
                    <div class="slider__item">
                        <div class="slider__item-background background-left animate__animated animate__{{$animation_arr[$count - 1]['images']}} wow">
                            <img src="/superFood_MVC/backend/assets/images/{{$widget->image}}" alt=""/>
                        </div>
                        <div class="container h-100">
                            <div class="slider__item-content animate__animated animate__{{$animation_arr[$count - 1]['animation']}} wow"
                                 data-wow-delay="{{$animation_arr[$count - 1]['animation_delay']}}">
                                <div class="content__image">
                                    <img src="{{BASE_URL.'frontend/assets/images/layout/item-1.png'}}" alt=""/>
                                </div>
                                <div class="content__title">{{$widget->title}}</div>
                                <p class="content__text">
                                    {{$widget->description}}
                                </p>
                                <a class="btn btn-color" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    <!-- Start About-->
    <div class="about">
        <div class="container-fluid">
            <div class="row">
                @php($animation_arr = [])
                @foreach($animations as $animation)
                    @if($animation->location == 'about-item')
                        @php($animation_arr[] = $animation)
                    @endif
                @endforeach
                @php($count = 0)
                @foreach($widgets as $widget)
                    @if($widget->location == 'about-item')
                        @php($count++)
                        <div class="col-12 col-lg-4 p-0">
                            <div class="about__box">
                                <div
                                        class=" about__box-image animate__animated animate__{{$animation_arr[$count - 1]['images']}} wow"
                                        data-wow-delay="{{$animation_arr[$count - 1]['images_delay']}}">
                                    <img src="/superFood_MVC/backend/assets/images/{{$widget->image}}" alt="about"/>
                                </div>
                                <div class="about__box-item ">
                                    <div class="item__title animate__animated animate__{{$animation_arr[$count - 1]['title']}} wow"
                                         data-wow-delay="{{$animation_arr[$count - 1]['title_delay']}}">
                                        {{$widget->title}}</div>
                                    <p class=" item__text animate__animated animate__{{$animation_arr[$count - 1]['description']}} wow"
                                       data-wow-delay="{{$animation_arr[$count - 1]['description_delay']}}">
                                        {{$widget->description}}</p>
                                    <a class="btn btn-color animate__animated animate__{{$animation_arr[$count - 1]['link']}} wow"
                                       data-wow-delay="{{$animation_arr[$count - 1]['link_delay']}}"
                                       href="{{$widget->link}}">Xem
                                        Thêm</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <!-- End About-->
    <!-- Start Portfolio-->
    <div class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto text-center animate__animated animate__zoomIn wow"
                     data-wow-delay="0.5s">
                    @foreach($widgets as $widget)
                        @if($widget->location == 'portfolio-title')
                            <h2 class="title__heading">{{$widget->title}}</h2>
                            <div class="divider mx-auto"></div>
                            <p class="title__text">{{$widget->description}}</p>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                @foreach($widgets as $widget)
                    @if($widget->location == 'portfolio-item')
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3 p-0">
                            <div class="portfolio__box animate__animated animate__zoomIn wow" data-wow-delay="0.5s">
                                <div class="portfolio__box-image">
                                    <img src="/superFood_MVC/backend/assets/images/{{$widget->image}}" alt=""/>
                                </div>
                                <div class="portfolio__box-item">
                                    <div class="item__title">{{$widget->title}}</div>
                                    <div class="item__subtitle">{{$widget->description}}</div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Portfolio-->
    <!-- Start Customize-->
    <div class="customize">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto text-center animate__animated animate__zoomIn wow"
                     data-wow-delay="0.5s">
                    @foreach($widgets as $widget)
                        @if($widget->location == 'customize-title')
                            <h2 class="title__heading">{{$widget->title}}</h2>
                            <div class="divider mx-auto"></div>
                            <p class="title__text">{{$widget->description}}</p>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="row">
                @php($animation_arr = [])
                @foreach($animations as $animation)
                    @if($animation->location == 'customize-item')
                        @php($animation_arr[] = $animation)
                    @endif
                @endforeach
                @php($count = 0)
                @foreach($widgets as $widget)
                    @if($widget->location == 'customize-item')
                        @php($count++)
                        <div class="col-12 col-lg-4">
                            <div class="customize__box">
                                <div
                                        class="customize__box-image animate__animated animate__{{$animation_arr[$count - 1]['images']}} wow"
                                        data-wow-delay="{{$animation_arr[$count - 1]['images_delay']}}">
                                    <img src="/superFood_MVC/backend/assets/images/{{$widget->image}}" alt=""/>
                                </div>
                                <div class="customize__box-item">
                                    <div class="item__title animate__animated animate__{{$animation_arr[$count - 1]['title']}} wow"
                                         data-wow-delay="{{$animation_arr[$count - 1]['title_delay']}}">{{$widget->title}}</div>
                                    <p class="item__text animate__animated animate__{{$animation_arr[$count - 1]['description']}} wow"
                                       data-wow-delay="{{$animation_arr[$count - 1]['description_delay']}}">
                                        {{$widget->description}}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Customize-->
    <!-- Start Clients-->
    <div class="clients">
        <div class="container-fluid">
            <div class="row">
                @php($animation_arr = [])
                @foreach($animations as $animation)
                    @if($animation->location == 'client-item')
                        @php($animation_arr[] = $animation)
                    @endif
                @endforeach
                @php($count = 0)
                @foreach($widgets as $widget)
                    @if($widget->location == 'client-item')
                        @php($count++)
                        <div class="col-12 col-sm-6 col-lg-3 p-0">
                            <div class="clients__box animate__animated animate__{{$animation_arr[$count - 1]['animation']}} wow"
                                 data-wow-delay="{{$animation_arr[$count - 1]['animation_delay']}}">
                                <div class="clients__box-image">
                                    <img src="/superFood_MVC/backend/assets/images/{{$widget->image}}" alt="clients"/>
                                </div>
                                <div class="clients__box-item">
                                    <div class="item__title">{{$widget->title}}</div>
                                    <p class="item__text">
                                        Lorem ipsum dolor sit amet, conset etur sadip scing
                                        elitrsed.
                                    </p>
                                    <div class="item__icon">
                                        <a class="item__icon-link" href="#"><i class="fab fa-instagram"></i></a><a
                                                class="item__icon-link"
                                                href="#"><i class="fab fa-twitter"></i></a><a class="item__icon-link"
                                                                                              href="#"><i
                                                    class="fab fa-facebook-f"></i></a><a class="item__icon-link"
                                                                                         href="#"><i
                                                    class="fab fa-tumblr"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Clients-->
    <!-- Start History-->
    <div class="history">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto text-center animate__animated animate__zoomIn wow"
                     data-wow-delay="0.5s">
                    <h2 class="title__heading">Our History</h2>
                    <div class="divider mx-auto"></div>
                    <p class="title__text">
                        We support environmental awareness, just business practices, and
                        health, and our selections illustrate that.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 line">
                    <div class="history__box animate__animated animate__fadeInUp wow" data-wow-delay="1s">
                        <div class="history__box-dot"></div>
                        <div class="history__box-date">1998</div>
                        <div class="history__box-title">Establishment</div>
                        <p class="history__box-text">
                            Ropefish knifefish stickleback Manta Ray, saw shark drum; rohu
                            deepwater stingray
                        </p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 line">
                    <div class="history__box animate__animated animate__fadeInUp wow" data-wow-delay="1s">
                        <div class="history__box-dot"></div>
                        <div class="history__box-date">2005</div>
                        <div class="history__box-title">First Partnership</div>
                        <p class="history__box-text">
                            Ropefish knifefish stickleback Manta Ray, saw shark drum; rohu
                            deepwater stingray
                        </p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 line">
                    <div class="history__box animate__animated animate__fadeInUp wow" data-wow-delay="1s">
                        <div class="history__box-dot"></div>
                        <div class="history__box-date">2007</div>
                        <div class="history__box-title">Launching the Website</div>
                        <p class="history__box-text">
                            Ropefish knifefish stickleback Manta Ray, saw shark drum; rohu
                            deepwater stingray
                        </p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 line">
                    <div class="history__box animate__animated animate__fadeInUp wow" data-wow-delay="1s">
                        <div class="history__box-dot"></div>
                        <div class="history__box-date">2012</div>
                        <div class="history__box-title">Opening New Stores</div>
                        <p class="history__box-text">
                            Ropefish knifefish stickleback Manta Ray, saw shark drum; rohu
                            deepwater stingray
                        </p>
                        <div class="divider"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End History-->
    <!-- Start Counter-->
    <div class="counter">
        <div class="container-fluid">
            <div class="row">
                @php($animation_arr = [])
                @foreach($animations as $animation)
                    @if($animation->location == 'counter-item')
                        @php($animation_arr[] = $animation)
                    @endif
                @endforeach
                @php($count = 0)
                @foreach($widgets as $widget)
                    @if($widget->location == 'counter-item')
                        @php($count++)
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="counter__box animate__animated animate__{{$animation_arr[$count - 1]['animation']}} wow"
                                 data-wow-delay="{{$animation_arr[$count - 1]['animation_delay']}}">
                                <div class="counter__box-image">
                                    <img src="/superFood_MVC/backend/assets/images/{{$widget->image}}" alt=""/>
                                </div>
                                <div class="counter__box-item">
                                    <span class="perccent-item-num counters" data-target="{{$widget->number}}">0</span>
                                    <div class="item__title">{{$widget->title}}</div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Counter-->
@include('site.main.components.testimonials')
    <!-- Start Contact-->
    <div class="contact">
        @php($animation_arr = [])
        @foreach($animations as $animation)
            @if($animation->location == 'contact-item')
                @php($animation_arr[] = $animation)
            @endif
        @endforeach
        @php($count = 0)
        @foreach($widgets as $widget)
            @if($widget->location == 'contact-item')
                @php($count++)
        <div class="contact__background">
            <img src="/superFood_MVC/backend/assets/images/{{$widget->image}}" alt=""/>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-8 col-md-8">
                    <div class="contact__content text-sm-left animate__animated animate__{{$animation_arr[$count - 1]['description']}} wow">
                        <div class="contact__content-text">
                            {{$widget->description}}
                        </div>
                        <div class="divider"></div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-md-4 my-sm-auto">
                    <div class="contact__button text-sm-right animate__animated animate__{{$animation_arr[$count - 1]['link']}} wow"
                         data-wow-delay="{{$animation_arr[$count - 1]['link_delay']}}">
                        <a class="btn btn-color" href="#">{{$widget->title}}</a>
                    </div>
                </div>
            </div>
        </div>
            @endif
        @endforeach
    </div>
    <!-- End Contact-->
@endsection