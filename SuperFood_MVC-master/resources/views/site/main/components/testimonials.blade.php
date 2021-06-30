<!-- Start Testimonials-->
<div class="testimonials">
    <div class="container">
        <div class="row">
            @foreach($widgets as $widget)
                @if($widget->location == 'testimonial-title')
                    <div class="col-12 col-lg-8 mx-auto text-center animate__animated animate__zoomIn wow"
                         data-wow-delay="0.5s">
                        <h2 class="title__heading">{{$widget->title}}</h2>
                        <div class="divider mx-auto"></div>
                        <p class="title__text">{{$widget->description}}
                        </p>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="owl-testimonials owl-carousel owl-theme animate__animated animate__zoomIn wow"
             data-wow-delay="1s">
            @foreach($widgets as $widget)
                @if($widget->location == 'testimonial-item')
                    <div class="testimonials__box">
                        <div class="testimonials__box-item">
                            <p class="item__text">
                                {{$widget->description}}
                            </p>
                            <div class="item__info">
                                <div class="item__info-image">
                                    <img src="/superFood_MVC/backend/assets/images/{{$widget->image}}" alt=""/>
                                </div>
                                <div class="item__info-content">
                                    <div class="content__name">{{$widget->author}}</div>
                                    <div class="content__position">{{$widget->position}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
<!-- End Testimonials-->