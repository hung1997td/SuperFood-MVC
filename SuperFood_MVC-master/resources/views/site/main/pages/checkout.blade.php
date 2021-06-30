@extends('site.main.layouts.master')
@section('title'){{'Checkout'}}@endsection
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
    <!-- shop-main-area start -->
    <div class="shop-main-area">
        <!-- checkout-area start -->
        <div class="check-out-area">
            <div class="container">
                <form action="#">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="checkbox-form">
                                <h3>Thông Tin nhận hàng</h3>
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Họ <span class="required">*</span></label>
                                            <input style="width: 100%" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Tên <span class="required">*</span></label>
                                            <input style="width: 100%" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="checkout-form-list">
                                            <label>Địa Chỉ <span class="required">*</span></label>
                                            <input style="width: 100%" type="text" placeholder="Số nhà - Phố">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Xã/ Phường <span class="required">*</span></label>
                                            <input style="width: 100%" type="text">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Quận/ Huyện <span class="required">*</span></label>
                                            <input style="width: 100%" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="checkout-form-list">
                                            <label>Tỉnh / Thành Phố <span class="required">*</span></label>
                                            <input style="width: 100%" type="text">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Điện Thoại <span class="required">*</span></label>
                                            <input style="width: 100%" type="text">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="checkout-form-list">
                                            <label>Địa Chỉ Email <span class="required">*</span></label>
                                            <input style="width: 100%" type="email" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="your-order">
                                <h3>Đơn hàng của bạn</h3>
                                <div class="your-order-table table-responsive">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th class="product-name">Sản phẩm</th>
                                            <th class="product-total text-right">Tổng</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(!isset($_SESSION["cart"]) || empty($_SESSION["cart"]))
                                            <h2>Checkout</h2>
                                            <h4>Không có gì để checkout</h4>
                                        @else
                                            @foreach($_SESSION["cart"] as $product)
                                                <tr class="cart_item">
                                                    <td class="product-name">
                                                        {{\App\Product::find($product)->name}} <strong class="product-quantity"> ×
                                                            {{$_SESSION["qty"][$product]}}</strong>
                                                    </td>
                                                    <td class="product-total text-right">
                                                        <span class="amount">${{\App\Product::find($product)->discount_price}}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                        <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Tổng tiền hàng</th>
                                            <td class="text-right"><span class="amount">${{$_SESSION["total"]}}</span></td>
                                        </tr>
                                        <tr class="shipping">
                                            <th>Vận Chuyển</th>
                                            <td>
                                                <ul>
                                                    <li>Giao hàng tiêu chuẩn</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Tổng đơn hàng</th>
                                            <td class="text-right"><strong><span class="amount">${{$_SESSION["total"]}}</span></strong>
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="order-button-payment pt-3 text-center w-50">
                                    <input style="" type="submit" value="Đặt Hàng" id="order">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- checkout-area end -->
    </div>
    <!-- shop-main-area end -->
@endsection