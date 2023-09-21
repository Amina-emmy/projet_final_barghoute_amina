@extends('layouts.page_structure.indexFront')
@section('content')
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="banner_slider owl-carousel">
                        @foreach ($randomProducts as $randomProduct)
                            <div class="single_banner_slider">
                                <div class="row">
                                    <div class="col-lg-5 col-md-8">
                                        <div class="banner_text">
                                            <div class="banner_text_iner">
                                                <h1>{{ $randomProduct->name }}</h1>
                                                <p>{{ $randomProduct->desc }}</p>
                                                <a href="{{ route('products.showProduct', $randomProduct->id) }}"
                                                    class="btn_2">buy now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner_img d-none d-lg-block">
                                        <img src={{ asset('storage/img/product/' . $randomProduct->image) }} alt="">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="slider-counter"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
    <section class="feature_part padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_tittle text-center">
                        <h2>Featured Category</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                @foreach ($last4Products as $lastProduct)
                    @if ($loop->iteration == 1 || $loop->iteration == 4)
                        <div class="col-lg-7 col-sm-6">
                            <div class="single_feature_post_text">
                                <p>Premium Quality</p>
                                <h3>{{ $lastProduct->name }}</h3>
                                <a href="{{ route('products.showProduct', $lastProduct->id) }}" class="feature_btn">EXPLORE
                                    NOW
                                    <i class="fas fa-play"></i></a>
                                <img src={{ asset('storage/img/product/' . $lastProduct->image) }} alt="">
                            </div>
                        </div>
                    @else
                        <div class="col-lg-5 col-sm-6">
                            <div class="single_feature_post_text">
                                <p>Premium Quality</p>
                                <h3>{{ $lastProduct->name }}</h3>
                                <a href="{{ route('products.showProduct', $lastProduct->id) }}" class="feature_btn">EXPLORE
                                    NOW
                                    <i class="fas fa-play"></i></a>
                                <img src={{ asset('storage/img/product/' . $lastProduct->image) }} alt="">
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->

    <!-- product_list start-->
    <section class="product_list section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>awesome <span>shop</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product_list_slider owl-carousel">
                        <div class="single_product_list_slider">
                            <div class="row align-items-center justify-content-between">
                                @foreach ($products as $product)
                                    @if ($loop->iteration <= 8)
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="single_product_item">
                                                <a href="{{ route('products.showProduct', $product->id) }}">
                                                    <img src={{ asset('storage/img/product/' . $product->image) }}
                                                        alt="">
                                                </a>
                                                <div class="single_product_text">
                                                    <h4>{{ $product->name }}</h4>
                                                    <h3>${{ $product->price }}</h3>
                                                    <a class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                                </div>
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
    </section>
    <!-- product_list part start-->

    <!-- awesome_shop start-->
    <section class="our_offer section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                @foreach ($products as $product)
                    @if ($loop->iteration == 1)
                        <div class="col-lg-6 col-md-6">
                            <div class="offer_img">
                                <img src={{ asset('storage/img/product/' . $product->image) }} alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="offer_text">
                                <h2>Weekly Sale on
                                    60% Off All Products</h2>
                                <div class="date_countdown">
                                    <div id="timer">
                                        <div id="days" class="date"></div>
                                        <div id="hours" class="date"></div>
                                        <div id="minutes" class="date"></div>
                                        <div id="seconds" class="date"></div>
                                    </div>
                                </div>
                                <form action={{ route('home.mailNewsLetter') }} method="POST">
                                    @csrf
                                    <div class="input-group">
                                        <input type="text" name="emailuser" class="form-control"
                                            placeholder="enter email address" aria-label="Recipient's username"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button type="submit" class="input-group-text btn_2" id="basic-addon2">book
                                                now</button>
                                        </div>
                                    </div>
                                </form>
                                {{-- add a flash msg --}}
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <!-- awesome_shop part start-->

    <!-- product_list part start-->
    <section class="product_list best_seller section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Best Sellers <span>shop</span></h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12">
                    <div class="best_product_slider owl-carousel">
                        @foreach ($products as $product)
                            @if ($product->stock <= 5)
                                <div class="single_product_item">
                                    <a href="{{ route('products.showProduct', $product->id) }}">
                                        <img src={{ asset('storage/img/product/' . $product->image) }} alt="">
                                    </a>
                                    <div class="single_product_text">
                                        <h4>{{ $product->name }}</h4>
                                        <h3>${{ $product->price }}</h3>
                                        <h3>Stock : {{ $product->stock }}</h3>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_list part end-->

    <!-- subscribe_area part start-->
    <style>
        .subscribe_area {
            background: url({{ asset('storage/img/subscribe_area.png') }})
        }
    </style>
    <section class="subscribe_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="subscribe_area_text text-center">
                        <h5>Join Our Newsletter</h5>
                        <h2>Subscribe to get Updated
                            with new offers</h2>
                        <form action={{ route('home.mailNewsLetter') }} method="POST">
                            @csrf
                            <div class="input-group">
                                <input type="text" name="emailuser" class="form-control"
                                    placeholder="enter email address" aria-label="Recipient's username"
                                    aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button type="submit" class="input-group-text btn_2" id="basic-addon2">subscribe
                                        now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::subscribe_area part end::-->

    <!-- subscribe_area part start-->
    <section class="client_logo padding_top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="single_client_logo">
                        <img src={{ asset('storage/img/client_logo/client_logo_1.png') }} alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src={{ asset('storage/img/client_logo/client_logo_2.png') }} alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src={{ asset('storage/img/client_logo/client_logo_3.png') }} alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src={{ asset('storage/img/client_logo/client_logo_4.png') }} alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src={{ asset('storage/img/client_logo/client_logo_5.png') }} alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src={{ asset('storage/img/client_logo/client_logo_3.png') }} alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src={{ asset('storage/img/client_logo/client_logo_1.png') }} alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src={{ asset('storage/img/client_logo/client_logo_2.png') }} alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src={{ asset('storage/img/client_logo/client_logo_3.png') }} alt="">
                    </div>
                    <div class="single_client_logo">
                        <img src={{ asset('storage/img/client_logo/client_logo_4.png') }} alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::subscribe_area part end::-->
@endsection
