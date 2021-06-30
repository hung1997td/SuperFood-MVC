<!-- Start Banner-->
<div class="banner animate__animated animate__fadeIn wow">
    <div class="container">
        @foreach($widgets as $widget)
            @if($widget->location == 'banner-item')
        <div class="banner__background"><img src="/superFood_MVC/backend/assets/images/{{$widget->image}}" alt=""></div>
        <div class="banner__content text-center my-auto">
            <div class="banner__content-title">@yield('title')</div>
            <div class="banner__content-subtitle">{{$widget->description}}<i class="fal fa-angle-right"></i><span>@yield('title')</span>
            </div>
        </div>
            @endif
        @endforeach
    </div>
</div>
<!-- End Banner-->