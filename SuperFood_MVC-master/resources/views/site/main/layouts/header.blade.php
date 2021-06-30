<!-- Start PreLoader-->
{{--<div class="preLoader">--}}
{{--    <div class="preLoader__image"><img src="/superFood_MVC/frontend/assets/images/layout/leaf.png" alt=""></div>--}}
{{--</div>--}}
<!-- End PreLoader-->
<!-- Image loader -->
<div id='loader'>
    <img src='/superFood_MVC/frontend/assets/images/ajax-loader.gif' width='32px' height='32px'>
</div>
<!-- Image loader -->
<!-- Start Header-->
<div class="overlay-header"><span class="close-overlay"><i class="fal fa-times"></i></span></div>
<div class="header">
    <div class="container">
        <div class="header__menu">
            <div class="header__menu-logo"><a class="header__menu-logo-link" href="/superFood_MVC/site/home"><img
                            src="{{BASE_URL.'frontend/assets/images/layout/logo.png'}}"></a></div>
            <div class="accordion-menu">
                <div class="header__menu-button">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
                <ul class="header__menu-list">
                    <li class="list__item"><a class="list__item-logo" href="/superFood_MVC/site/home"><img
                                    src="{{BASE_URL.'frontend/assets/images/layout/logo.png'}}"></a></li>
                    <li class="list__item"><a class="list__item-link" href="/superFood_MVC/site/home">Trang chủ</a></li>
                    <li class="list__item"><a class="list__item-link" href="/superFood_MVC/site/about">Giới thiệu</a></li>
                    <li class="list__item"><a class="list__item-link" href="/superFood_MVC/site/service">Dịch vụ</a></li>
                    <li class="list__item"><a class="list__item-link" href="/superFood_MVC/site/blog">Tin tức</a></li>
                    <li class="list__item"><a class="list__item-link" href="/superFood_MVC/site/product">Sản phẩm</a></li>
                    <li class="list__item"><a class="list__item-link" href="/superFood_MVC/site/contact">Liên hệ</a></li>
                    <li class="list__item">
                        <form class="list__item-form">
                            <input class="form__search" type="search" placeholder="Type your keyword...">
                            <button class="form__submit" type="submit"><i class="fal fa-search"></i></button>
                        </form>
                    </li>
                </ul>
            </div>
            <div class="header__menu-icon"><a class="icon__search" href="#" data-modal="modals"><i
                            class="far fa-search"></i></a></div>
        </div>
    </div>
</div>
<!-- End Header-->
