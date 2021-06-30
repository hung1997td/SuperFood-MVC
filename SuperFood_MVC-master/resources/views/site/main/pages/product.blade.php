@extends('site.main.layouts.master')
@section('title'){{'Product'}}@endsection
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

    <div class="blog">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-xl-9">
                    @if(isset($products))
                        <h4 style="text-align: center; padding-bottom: 30px">Có tất cả {{$products->count()}} sản
                            phẩm!</h4>
                    @endif
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-12 col-md-3 col-lg-3">
                                <section class="products">
                                    <div class="section-title">
                                        <div class="products-center">
                                            <!-- single product -->
                                            <article class="product">
                                                <div class="img-container">
                                                    <img style="width: 300px" src=/superFood_MVC/backend/assets/images/{{$product->avatar}} alt="product"
                                                         class="product-img"/>
                                                </div>
                                                <h3>{{$product->name}}</h3>
                                                <h4>{{$product->discount_price}} $</h4>
                                            </article>
                                            <!-- end of single product -->
                                        </div>
                                    </div>
                                </section>
                                <a href="/superFood_MVC/site/product/addToCart/{{$product->id}}" class="btn btn-primary">Thêm
                                    vào giỏ hàng</a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3">
                    <div class="cart-overlay">
                        <div class="cart">
                            @if(!isset($_SESSION["cart"]) || empty($_SESSION["cart"]))
                                <h2>Giỏ hàng:</h2>
                                <h4>Giỏ hàng đang rỗng</h4>
                            @else
                                <h2>Giỏ hàng:</h2>
                                <div class="cart-content">
                                @php($total = 0)
                                @foreach($_SESSION["cart"] as $product)
                                    <!-- cart item -->
                                        <div class="cart-item">
                                            <img style="width: 100px"
                                                 src="/superFood_MVC/backend/assets/images/{{\App\Product::find($product)->avatar}}"
                                                 alt="product"/>
                                            <div>
                                                <h4>{{\App\Product::find($product)->name}}</h4>
                                                <h5>${{\App\Product::find($product)->discount_price}}</h5>
                                                <a href="/superFood_MVC/site/product/delete/{{$product}}"
                                                   class="remove-item">Xóa</a>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <a href="/superFood_MVC/site/product/add/{{$product}}"><i
                                                            class="fas fa-chevron-up"></i></a>
                                                <p class="item-amount px-4">{{$_SESSION["qty"][$product]}}</p>
                                                <a href="/superFood_MVC/site/product/remove/{{$product}}"><i
                                                            class="fas fa-chevron-down"></i></a>
                                            </div>
                                        </div>
                                        <!-- end of cart item -->
                                </div>
                                @php($total = $total + $_SESSION["amounts"][$product])
                                @endforeach
                                <div class="cart-footer">
                                    <?php $_SESSION["total"] = $total;?>
                                    <h3>your total : $<span class="cart-total">{{$total}}</span></h3>
                                    <a href="/superFood_MVC/site/product/deleteCart" class="btn btn-warning">clear cart</a>
                                    <a class="btn btn-primary" href="/superFood_MVC/site/product/checkout">Check out</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
