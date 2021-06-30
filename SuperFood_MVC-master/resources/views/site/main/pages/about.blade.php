@extends('site.main.layouts.master')
@section('title'){{'About'}}@endsection
@section('content')
    @include('site.main.components.banner')

    <!-- Start Reason-->
    <div class="reason">
        <div class="container">
            <div class="row">
                @foreach($widgets as $widget)
                    @if($widget->location == 'reason-item')
                        <div class="col-12 col-lg-6">
                            <div class="reason__box">
                                <div class="reason__box-image animate__animated animate__zoomIn wow"
                                     data-wow-delay="1s"><img
                                            src="/superFood_MVC/backend/assets/images/{{$widget->image}}" alt=""></div>
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="col-12 col-lg-6">
                    <div class="reason__box">
                        <div class="reason__box-content animate__animated animate__fadeInRight wow"
                             data-wow-delay="1.5s">
                            @foreach($widgets as $widget)
                                @if($widget->location == 'reason-item')
                                    <div class="content__title">{{$widget->title}}</div>
                                    <div class="divider"></div>
                                    <p class="content__text">{{$widget->description}}</p>
                                @endif
                            @endforeach
                            <div class="content__counter">
                                <div class="row">
                                    @foreach($widgets as $widget)
                                        @if($widget->location == 'reason-number-item')
                                            <div class="col-12 col-sm-4">
                                                <div class="content__counter-item"><span class="counters"
                                                                                         data-target="{{$widget->number}}">0</span><span>+</span>
                                                    <div class="item__title">{{$widget->title}}</div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Reason-->
    <!-- Start Vision-->
    <div class="vision">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 order-lg-2">
                    <div class="vision__box">
                        <div class="vision__box-image animate__animated animate__zoomIn wow"><img
                                    src="/superFood_MVC/public/frontend/assets/images/about/vision.jpg" alt=""></div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 order-lg-1">
                    <div class="vision__box">
                        <div class="vision__box-content animate__animated animate__fadeInLeft wow"
                             data-wow-delay="0.5s">
                            <div class="content__title">Our Vision</div>
                            <div class="divider"></div>
                            <div class="content__text">
                                <p>Eeltail catfish yellow moray pumpkinseed Pacific albacore northern pearleye glass
                                    knifefish Red salmon largemouth bass, regal whiptail catfish flabby whalefish
                                    dogteeth tetra elephantnose fish; red snapper guitarfish.</p>
                                <p>Sea devil Indian mul milkfish madtom bonytongue denticle herring– featherback
                                    daggertooth pike conger, rivuline.</p><span>Brook lamprey, spikefish mooneye flagfin naked-back knifefish candlefish earthworm eel electric knifefish peacock flounder snubnose parasitic Blobfish flathead, banjo catfish long-whiskered catfish dace hagfish!</span>
                            </div>
                            <ul class="content__tick">
                                <li class="content__tick-item">
                                    <div class="item__icon"><i class="far fa-check"></i></div>
                                    <div class="item__title">Expect to see Mango prices rise as the supply.</div>
                                </li>
                                <li class="content__tick-item">
                                    <div class="item__icon"><i class="far fa-check"></i></div>
                                    <div class="item__title">Pricing and quality of green, red, and grapes.</div>
                                </li>
                                <li class="content__tick-item">
                                    <div class="item__icon"><i class="far fa-check"></i></div>
                                    <div class="item__title">Cucumber supplies will be extremely moving.</div>
                                </li>
                                <li class="content__tick-item">
                                    <div class="item__icon"><i class="far fa-check"></i></div>
                                    <div class="item__title">Asian Pear season is starting, and we will have.</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Vision-->
    <!-- Start History-->
    <div class="history">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto text-center animate__animated animate__zoomIn wow"
                     data-wow-delay="0.5s">
                    <h2 class="title__heading">Our History</h2>
                    <div class="divider mx-auto"></div>
                    <p class="title__text">We support environmental awareness, just business practices, and health, and
                        our selections illustrate that.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 line">
                    <div class="history__box animate__animated animate__fadeInUp wow" data-wow-delay="1s">
                        <div class="history__box-dot"></div>
                        <div class="history__box-date">1998</div>
                        <div class="history__box-title">Establishment</div>
                        <p class="history__box-text">Ropefish knifefish stickleback Manta Ray, saw shark drum; rohu
                            deepwater stingray</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 line">
                    <div class="history__box animate__animated animate__fadeInUp wow" data-wow-delay="1s">
                        <div class="history__box-dot"></div>
                        <div class="history__box-date">2005</div>
                        <div class="history__box-title">First Partnership</div>
                        <p class="history__box-text">Ropefish knifefish stickleback Manta Ray, saw shark drum; rohu
                            deepwater stingray</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 line">
                    <div class="history__box animate__animated animate__fadeInUp wow" data-wow-delay="1s">
                        <div class="history__box-dot"></div>
                        <div class="history__box-date">2007</div>
                        <div class="history__box-title">Launching the Website</div>
                        <p class="history__box-text">Ropefish knifefish stickleback Manta Ray, saw shark drum; rohu
                            deepwater stingray</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 line">
                    <div class="history__box animate__animated animate__fadeInUp wow" data-wow-delay="1s">
                        <div class="history__box-dot"></div>
                        <div class="history__box-date">2012</div>
                        <div class="history__box-title">Opening New Stores</div>
                        <p class="history__box-text">Ropefish knifefish stickleback Manta Ray, saw shark drum; rohu
                            deepwater stingray</p>
                        <div class="divider"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End History-->
    <!-- Start Team-->
    <div class="team">
        <div class="team__background"><img src="/superFood_MVC/public/frontend/assets/images/about/team-background.png" alt=""></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto text-center animate__animated animate__zoomIn wow"
                     data-wow-delay="0.5s">
                    <h2 class="title__heading">Our Team</h2>
                    <div class="divider mx-auto"></div>
                    <p class="title__text">We support environmental awareness, just business practices, and health, and
                        our selections illustrate that.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="team__box">
                        <div class="team__box-image mx-auto animate__animated animate__fadeInLeft wow"><img
                                    src="/superFood_MVC/public/frontend/assets/images/about/team-1.jpg" alt=""></div>
                        <div class="team__box-content animate__animated animate__fadeInUp wow" data-wow-delay="0.5s">
                            <div class="content__name">Olivia Thomas</div>
                            <div class="content__position">Senior Chief Supervisor</div>
                            <div class="content__icon"><a class="content__icon-link" href="#"><i
                                            class="fab fa-twitter"></i></a><a class="content__icon-link" href="#"><i
                                            class="fab fa-facebook-f"></i></a><a class="content__icon-link" href="#"><i
                                            class="fab fa-linkedin-in"></i></a><a class="content__icon-link" href="#"><i
                                            class="fab fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="team__box">
                        <div class="team__box-image mx-auto animate__animated animate__fadeInUp wow"
                             data-wow-delay="1s"><img src="/superFood_MVC/public/frontend/assets/images/about/team-2.jpg" alt="">
                        </div>
                        <div class="team__box-content animate__animated animate__fadeInUp wow" data-wow-delay="1.5s">
                            <div class="content__name">Adam Boyd</div>
                            <div class="content__position">Managing Director</div>
                            <div class="content__icon"><a class="content__icon-link" href="#"><i
                                            class="fab fa-twitter"></i></a><a class="content__icon-link" href="#"><i
                                            class="fab fa-facebook-f"></i></a><a class="content__icon-link" href="#"><i
                                            class="fab fa-linkedin-in"></i></a><a class="content__icon-link" href="#"><i
                                            class="fab fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="team__box">
                        <div class="team__box-image mx-auto animate__animated animate__fadeInRight wow"
                             data-wow-delay="2s"><img src="/superFood_MVC/public/frontend/assets/images/about/team-3.jpg" alt="">
                        </div>
                        <div class="team__box-content animate__animated animate__fadeInUp wow" data-wow-delay="2.5s">
                            <div class="content__name">Randy Krishen</div>
                            <div class="content__position">Assistant Managing Director</div>
                            <div class="content__icon"><a class="content__icon-link" href="#"><i
                                            class="fab fa-twitter"></i></a><a class="content__icon-link" href="#"><i
                                            class="fab fa-facebook-f"></i></a><a class="content__icon-link" href="#"><i
                                            class="fab fa-linkedin-in"></i></a><a class="content__icon-link" href="#"><i
                                            class="fab fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Team-->
    <!-- Start Partners-->
    <div class="partners">
        <div class="container">
            <div class="owl-partners owl-carousel owl-theme animate__animated animate__zoomIn wow" data-wow-delay="1s">
                <div class="partners__image"><img class="mx-auto"
                                                  src="/superFood_MVC/public/frontend/assets/images/layout/partners-1.png" alt="">
                </div>
                <div class="partners__image"><img class="mx-auto"
                                                  src="/superFood_MVC/public/frontend/assets/images/layout/partners-2.png" alt="">
                </div>
                <div class="partners__image"><img class="mx-auto"
                                                  src="/superFood_MVC/public/frontend/assets/images/layout/partners-3.png" alt="">
                </div>
                <div class="partners__image"><img class="mx-auto"
                                                  src="/superFood_MVC/public/frontend/assets/images/layout/partners-4.png" alt="">
                </div>
                <div class="partners__image"><img class="mx-auto"
                                                  src="/superFood_MVC/public/frontend/assets/images/layout/partners-5.png" alt="">
                </div>
                <div class="partners__image"><img class="mx-auto"
                                                  src="/superFood_MVC/public/frontend/assets/images/layout/partners-6.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- End Partners-->
@endsection
