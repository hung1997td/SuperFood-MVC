<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="/superFood_MVC/admin/dashboard">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                @if(checkPer($_SESSION['user']['id'], 'user_view'))
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts"
                       aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fal fa-user-circle"></i></div>
                        Người dùng
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                         data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="/superFood_MVC/admin/users">Quản lý người dùng</a>
                        </nav>
                    </div>
                @endif
                @if(checkPer($_SESSION['user']['id'], 'post_view'))
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts2"
                       aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Tin tức
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne"
                         data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="/superFood_MVC/admin/news">Quản lý tin tức</a>
                        </nav>
                    </div>
                    <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne"
                         data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="/superFood_MVC/admin/newsCategories">Quản lý danh mục tin tức</a>
                        </nav>
                    </div>
                    <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne"
                         data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="/superFood_MVC/admin/newsTags">Quản lý Tag tin tức</a>
                        </nav>
                    </div>
                @endif
                @if(checkPer($_SESSION['user']['id'], 'product_view'))
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts3"
                       aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Sản phẩm
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne"
                         data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="/superFood_MVC/admin/product">Quản lý sản phẩm</a>
                        </nav>
                    </div>
                    <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne"
                         data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="/superFood_MVC/admin/productCategories">Quản lý danh mục sản phẩm</a>
                        </nav>
                    </div>
                    <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne"
                         data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="/superFood_MVC/admin/productTags">Quản lý Tag sản phẩm</a>
                        </nav>
                    </div>
                @endif
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts4"
                   aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Hiệu ứng và widget
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                @if(checkPer($_SESSION['user']['id'], 'animation_view'))
                    <div class="collapse" id="collapseLayouts4" aria-labelledby="headingOne"
                         data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="/superFood_MVC/admin/animation">Quản lý hiệu ứng</a>
                        </nav>
                    </div>
                @endif
                @if(checkPer($_SESSION['user']['id'], 'widget_view'))
                    <div class="collapse" id="collapseLayouts4" aria-labelledby="headingOne"
                         data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="/superFood_MVC/admin/widget">Quản lý widget</a>
                        </nav>
                    </div>
                @endif
                @if(checkPer($_SESSION['user']['id'], 'role_view'))
                    <div class="sb-sidenav-menu-heading">Admin</div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts5"
                       aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="far fa-user-tie"></i></div>
                        Phân quyền
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts5" aria-labelledby="headingOne"
                         data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="/superFood_MVC/admin/roles">Quản lý quyền</a>
                        </nav>
                    </div>
                @endif
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Đăng nhập với:</div>
            @php echo $_SESSION['user']['email'] @endphp
        </div>
    </nav>
</div>
