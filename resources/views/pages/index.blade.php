@extends('master')
@section('content')

    <section class="parala">
        <div class="paralax rellax" data-rellax-speed="-5" style="top: 8%">
            <img class="" src="{{ asset('assets/images/random/cart.png') }}"  alt="Card image cap">
        </div>
        <div class="paralax rellax" data-rellax-speed="-5" style="top: 20%; left: 50%">
            <img class="" src="{{ asset('assets/images/random/bag.png') }}"  alt="Card image cap">
        </div>
        <div class="paralax rellax" data-rellax-speed="-5" style="top: 15%; right:3%">
            <img class="" src="{{ asset('assets/images/random/food.png') }}"  alt="Card image cap">
        </div>
        <div class="paralax rellax" data-rellax-speed="-5" style="top: 5%; right: 3%">
            <img class="" src="{{ asset('assets/images/random/burger.png') }}"  alt="Card image cap">
        </div>
        <div class="paralax rellax" data-rellax-speed="-5" style="top: 10%; right: 20%">
            <img class="" src="{{ asset('assets/images/random/pant.png') }}"  alt="Card image cap">
        </div>
        <div class="paralax rellax" data-rellax-speed="-5" style="top: 3%; left: 10%">
            <img class="" src="{{ asset('assets/images/random/dress.png') }}"  alt="Card image cap">
        </div>
        <div class="paralax rellax" data-rellax-speed="-5" style="top: 16%; left: 15%">
            <img class="" src="{{ asset('assets/images/random/ball.png') }}"  alt="Card image cap">
        </div>
        <div class="paralax rellax" data-rellax-speed="-5" style="top: 25%; right: 5%">
            <img class="" src="{{ asset('assets/images/random/kitchen.png') }}"  alt="Card image cap">
        </div>
        <div class="paralax rellax" data-rellax-speed="-5" style="top: 30%; left: 15%">
            <img class="" src="{{ asset('assets/images/random/wrench.png') }}"  alt="Card image cap">
        </div>
        <div class="paralax rellax" data-rellax-speed="-5" style="top: 35%; left: 35%">
            <img class="" src="{{ asset('assets/images/random/mobile.png') }}"  alt="Card image cap">
        </div>
        <div class="paralax rellax" data-rellax-speed="-5" style="top: 35%; right: 5%">
            <img class="" src="{{ asset('assets/images/random/laptop.png') }}"  alt="Card image cap">
        </div>
    </section>

    <section id="banner" class="mar-bottom" >
        <div class="container-custom">

            <div class="banner">
                <div class="owl-carousel owl-theme " id="carousel01">
                    <div class="item">
                        <div class="row bottom-flex">
                            <div class="col-md-2 home-banner-text-1">
                                <h2>Home Sweet Home</h2>
                                <p>SHoe 50% offer on BATA</p>
                                <span>is simply dummy text of the printing and typesetting industry Lorem </span>
                            </div>
                            <div class="col-md-10"><img src="assets/images/banner/banner-10.jpg" alt=""></div>

                        </div>

                    </div>
                    <div class="item">
                        <div class="row bottom-flex">
                            <div class="col-md-2 home-banner-text-1">
                                <h2>Home Sweet Home</h2>
                                <p>SHoe 50% offer on BATA</p>
                                <span>is simply dummy text of the printing and typesetting industry Lorem </span>
                            </div>
                            <div class="col-md-10"><img src="assets/images/banner/banner-2.jpg" alt=""></div>
                        </div>


                    </div>
                    <div class="item">
                        <div class="row bottom-flex">
                            <div class="col-md-2 home-banner-text-1">
                                <h2>Stylish Adventure</h2>
                                <p>SHoe 50% offer on BATA</p>
                                <span>is simply dummy text of the printing and typesetting industry Lorem </span>
                            </div>
                            <div class="col-md-10"><img src="assets/images/banner/banner-3.jpg" alt=""></div>
                        </div>


                    </div>
                    <div class="item">
                        <div class="row bottom-flex">
                            <div class="col-md-2 home-banner-text-1">
                                <h2>Brand Day</h2>
                                <p>SHoe 50% offer on BATA</p>
                                <span>is simply dummy text of the printing and typesetting industry Lorem </span>
                            </div>
                            <div class="col-md-10"><img src="assets/images/banner/banner-4.jpg" alt=""></div>
                        </div>


                    </div>
                    <div class="item">
                        <div class="row bottom-flex">
                            <div class="col-md-2 home-banner-text-1">
                                <h2>Fashion Story</h2>
                                <p>SHoe 50% offer on BATA</p>
                                <span>is simply dummy text of the printing and typesetting industry Lorem </span>
                            </div>
                            <div class="col-md-10"><img src="assets/images/banner/banner-8.jpg" alt=""></div>
                        </div>


                    </div>
                    <div class="item">
                        <div class="row bottom-flex">
                            <div class="col-md-2 home-banner-text-1">
                                <h2>Home Sweet Home</h2>
                                <p>SHoe 50% offer on BATA</p>
                                <span>is simply dummy text of the printing and typesetting industry Lorem </span>
                            </div>
                            <div class="col-md-10"><img src="assets/images/banner/banner-9.jpg" alt=""></div>
                        </div>


                    </div>
                    <div class="item">
                        <div class="row bottom-flex">
                            <div class="col-md-2 home-banner-text-1">
                                <h2>Home Sweet Home</h2>
                                <p>SHoe 50% offer on BATA</p>
                                <span>is simply dummy text of the printing and typesetting industry Lorem </span>
                            </div>
                            <div class="col-md-10"> <img src="assets/images/banner/banner5.jpg" alt=""></div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="flash_sale mar-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <img class="img-responsive sec-img" src="{{ asset('assets/images/home/flash.jpg') }}"  alt="">
                </div>
                <div class="col-md-7">
                    <div class="heading  animated fadeInRight">
                        <p class="head_title">FLASH SALE</p>
                    </div>
                    <div id="timer" class="text-center">
                        <div id="days" class="time"></div>
                        <div id="hours" class="time"></div>
                        <div id="minutes" class="time"></div>
                        <div id="seconds" class="time"></div>
                    </div>

                    <div class="shop_more"><a href="#">Shop More</a></div>

                    <div class="flash_item">
                        <div class="owl-carousel owl-theme " id="carousel02">
                            <div class="item">
                                @include('includes.product-card')
                            </div>
                            <div class="item">
                                @include('includes.product-card')
                            </div>
                            <div class="item">
                                @include('includes.product-card')
                            </div>
                            <div class="item">
                                @include('includes.product-card')
                            </div>
                            <div class="item">
                                @include('includes.product-card')
                            </div>
                            <div class="item">
                                @include('includes.product-card')
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <section class="mar-bottom">
        <div class="text-center" style="margin-bottom: 3em">
            <p class="normal-heading">Best Selling Brands</p>
        </div>
        <div class="container-fluid">
            <div class="row" style="overflow: hidden;border-radius: 20px;">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-2 p-1">
                            <div class="cat-style">
                                <div class="cat-style-img">
                                    <img src="{{ asset('assets/images/random/mens_shirt.jpg') }}" class="img-responsive" alt="" style="height: 427px;width: 100%;">
                                    <div class="cat-style-overlay">
                                        <a href="">Men Shirt <span>&#8594;</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-3 p-1">
                                    <div class="cat-style">
                                        <div class="cat-style-img">
                                            <img src="{{ asset('assets/images/random/grocery.jpg') }}" class="img-responsive" alt="">
                                            <div class="cat-style-overlay">
                                                <a href="">Grocery <span>&#8594;</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 p-1">
                                    <div class="cat-style">
                                        <div class="cat-style-img">
                                            <img src="{{ asset('assets/images/random/sports.jpg') }}" class="img-responsive" alt="">
                                            <div class="cat-style-overlay">
                                               <a href="">Sports <span>&#8594;</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 p-1">
                                    <div class="cat-style">
                                        <div class="cat-style-img">
                                            <img src="{{ asset('assets/images/random/burger.jpg') }}" class="img-responsive" alt="">
                                            <div class="cat-style-overlay">
                                                <a href="">Burger <span>&#8594;</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 p-1">
                                    <div class="cat-style">
                                        <div class="cat-style-img">
                                            <img src="{{ asset('assets/images/random/watch.jpg') }}" class="img-responsive" alt="">
                                            <div class="cat-style-overlay">
                                                <a href="">Watch <span>&#8594;</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 p-1">
                                    <div class="cat-style">
                                        <div class="cat-style-img">
                                            <img src="{{ asset('assets/images/random/beauty.jpg') }}" class="img-responsive" alt="">
                                            <div class="cat-style-overlay">
                                                <a href="">Beauty Product <span>&#8594;</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 p-1">
                                    <div class="cat-style">
                                        <div class="cat-style-img">
                                            <img src="{{ asset('assets/images/random/automobile.jpg') }}" class="img-responsive" alt="">
                                            <div class="cat-style-overlay">
                                                <a href="">Automobile<span>&#8594;</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 p-1">
                                    <div class="cat-style">
                                        <div class="cat-style-img">
                                            <img src="{{ asset('assets/images/random/appliances.jpg') }}" class="img-responsive" alt="">
                                            <div class="cat-style-overlay">
                                                <a href="">Appliances<span>&#8594;</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 p-1">
                            <div class="cat-style">
                                <div class="cat-style-img">
                                    <img src="{{ asset('assets/images/random/womens_shirt.jpg') }}" class="img-responsive" alt="" style="height: 427px;width: 100%;">
                                    <div class="cat-style-overlay">
                                        <a href="">Women shirt<span>&#8594;</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>

    </section>

    <section class="top_offer mar-bottom mar-top">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="heading ">
                        <p class="head_title" style="color: #955632;left: 58%;">TOP OFFER</p>
                    </div>

                    <div class="shop_more" style="margin-top: 5em;"><a href="#">Shop More</a></div>

                    <div class="flash_item">
                        <div class="owl-carousel owl-theme " id="carousel03">
                            <div class="item">
                                @include('includes.product-card3')
                            </div>
                            <div class="item">
                                @include('includes.product-card')
                            </div>
                            <div class="item">
                                @include('includes.product-card2')
                            </div>
                            <div class="item">
                                @include('includes.product-card3')
                            </div>
                            <div class="item">
                                @include('includes.product-card2')
                            </div>
                            <div class="item">
                                @include('includes.product-card')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <img class="img-responsive sec-img" src="{{ asset('assets/images/home/watch1.png') }}" style="margin-top: -13em;" alt="">
                </div>
            </div>
        </div>

    </section>

    <section class="mar-bottom">
        <div class="text-center" style="margin-bottom: 3em">
            <p class="normal-heading">Our Brands</p>
        </div>
        <div class="container">
                <div class="col-md-12" >
                    <div class="row">

                        <div class="col-md-4 our-cat-style text-center">
                            <div class="brand-logo odd">
                                <img class="brand-card-img-top img-responsive" src="{{ asset('assets/images/logo/samsung.png') }}"  alt="Card image cap">
                            </div>
                        </div>
                        <div class="col-md-4 our-cat-style text-center">
                            <div class="brand-logo even">
                                <img class="brand-card-img-top img-responsive" src="{{ asset('assets/images/logo/rfl.png') }}"  alt="Card image cap">
                            </div>
                        </div>
                        <div class="col-md-4 our-cat-style text-center">
                            <div class="brand-logo odd">
                                <img class="brand-card-img-top img-responsive" src="{{ asset('assets/images/logo/pran.png') }}"  alt="Card image cap">
                            </div>
                        </div>

                        <div class="col-md-4 our-cat-style text-center">
                            <div class="brand-logo even">
                                <img class="brand-card-img-top img-responsive" src="{{ asset('assets/images/logo/addidas.png') }}"  alt="Card image cap">
                            </div>
                        </div>
                        <div class="col-md-4 our-cat-style text-center">
                            <div class="brand-logo odd">
                                <img class="brand-card-img-top img-responsive" src="{{ asset('assets/images/logo/coke.png') }}"  alt="Card image cap">
                            </div>
                        </div>
                        <div class="col-md-4 our-cat-style text-center">
                            <div class="brand-logo even">
                                <img class="brand-card-img-top img-responsive" src="{{ asset('assets/images/logo/hp.png') }}"  alt="Card image cap">
                            </div>
                        </div>

                        <div class="col-md-4 our-cat-style text-center">
                            <div class="brand-logo odd">
                                <img class="brand-card-img-top img-responsive" src="{{ asset('assets/images/logo/pepsi.png') }}"  alt="Card image cap">
                            </div>
                        </div>
                        <div class="col-md-4 our-cat-style text-center">
                            <div class="brand-logo even">
                                <img class="brand-card-img-top img-responsive" src="{{ asset('assets/images/logo/mac.png') }}"  alt="Card image cap">
                            </div>
                        </div>
                        <div class="col-md-4 our-cat-style text-center">
                            <div class="brand-logo odd">
                                <img class="brand-card-img-top img-responsive" src="{{ asset('assets/images/logo/aarong.png') }}"  alt="Card image cap">
                            </div>
                        </div>






                    </div>
                </div>


        </div>

    </section>

    <section class="flash_sale mar-bottom " style="background: linear-gradient(145deg, #e4e1e114, #c7b6b6);padding: 1em 0 1em 0;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <img class="img-responsive sec-img" src="{{ asset('assets/images/home/daily01.png') }}" style="margin-top: -9em;"  alt="">
                </div>
                <div class="col-md-8">
                    <div class="heading" >
                        <p class="head_title" style="left: -2%">DAILY OFFER</p>
                    </div>

                    <div class="shop_more" style="margin-top: 7em;margin-left: 17%;"><a href="#">Shop More</a></div>

                    <div class="row">
                        <div class="col-md-2 mb-3">
                            <ul class="nav nav-pills flex-column" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Top Offer</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">30% off</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">80% off</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-md-4 -->
                        <div class="col-md-10">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="flash_item">
                                        <div class="owl-carousel owl-theme " id="carousel04">
                                            <div class="item">
                                                @include('includes.product-card')
                                            </div>
                                            <div class="item">
                                                @include('includes.product-card2')
                                            </div>
                                            <div class="item">
                                                @include('includes.product-card3')
                                            </div>
                                            <div class="item">
                                                @include('includes.product-card2')
                                            </div>
                                            <div class="item">
                                                @include('includes.product-card')
                                            </div>
                                            <div class="item">
                                                @include('includes.product-card3')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="flash_item">
                                        <div class="owl-carousel owl-theme " id="carousel05">
                                            <div class="item">
                                                @include('includes.product-card3')
                                            </div>
                                            <div class="item">
                                                @include('includes.product-card2')
                                            </div>
                                            <div class="item">
                                                @include('includes.product-card')
                                            </div>
                                            <div class="item">
                                                @include('includes.product-card3')
                                            </div>
                                            <div class="item">
                                                @include('includes.product-card')
                                            </div>
                                            <div class="item">
                                                @include('includes.product-card2')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="flash_item">
                                        <div class="owl-carousel owl-theme " id="carousel06">
                                            <div class="item">
                                                @include('includes.product-card2')
                                            </div>
                                            <div class="item">
                                                @include('includes.product-card')
                                            </div>
                                            <div class="item">
                                                @include('includes.product-card3')
                                            </div>
                                            <div class="item">
                                                @include('includes.product-card')
                                            </div>
                                            <div class="item">
                                                @include('includes.product-card3')
                                            </div>
                                            <div class="item">
                                                @include('includes.product-card2')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-8 -->
                    </div>

                </div>
            </div>
        </div>

    </section>

    <section class="why_people mar-bottom">
        <div class="text-center" style="margin-bottom: 2em">
            <p class="normal-heading">Why people <i class="fas fa-heart" style="color: red;"></i> SETCOLBD</p>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="why_people">
                        <div class="why_people_img"><img class="img-responsive" src="{{ asset('assets/images/random/delivery.jpg') }}" alt="" style="width: 100%"></div>
                        <div class="why_people_text text-center">
                            <h3>Fast Delivery</h3>
                            <p style="text-shadow: 1px 1px 2px #ffffff;">No waiting in traffic, no haggling, no worries carrying groceries, they're delivered right at your door.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="why_people">
                        <div class="why_people_img"><img class="img-responsive" src="{{ asset('assets/images/random/food.jpg') }}" alt="" style="width: 100%"></div>
                        <div class="why_people_text text-center">
                            <h3>Fresh Food</h3>
                            <p style="text-shadow: 1px 1px 2px #ffffff;">Our fresh produce is sourced every morning, you get the best from us.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="why_people">
                        <div class="why_people_img"><img class="img-responsive" src="{{ asset('assets/images/random/money.jpg') }}" alt="" style="width: 100%"></div>
                        <div class="why_people_text text-center">
                            <h3>Reasonable Price</h3>
                            <p style="text-shadow: 1px 1px 2px #ffffff;">Save your Money and save for the future. Very reasonable than any other market place</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="contact mar-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/random/map2.jpg') }}" class="img-responsive" alt="">
                </div>
                <div class="col-md-6 contact_text text-center">
                    <h2>WE</h2>
                    <h2>DELIVER</h2>
                    <h2>ALL OVER</h2>
                    <h2 style="color: #51b9e3">BANGLADESH</h2>
                </div>
            </div>

        </div>
    </section>

    <section class="client-say mar-bottom">
        <div class="text-center" style="margin-bottom: 3em">
            <p class="normal-heading">Our Clients Say</p>
        </div>
        <div class="container">
            <div class="clients">
                <div class="owl-carousel owl-theme " id="carousel07">
                    <div class="item">
                        <div class="row bottom-flex">
                            <div class="col-md-4" style="border-right: 1px solid;">
                                <div class="client_img text-center">
                                    <img src="{{asset('assets/images/clients/client1.jpg')}}" alt="">
                                    <h4>Rifat Alam</h4>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="client_comments">
                                    <span><b>Best sevice i have ever had from any online shop</b></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row bottom-flex">
                            <div class="col-md-4" style="border-right: 1px solid;">
                                <div class="client_img text-center">
                                    <img src="{{asset('assets/images/clients/client2.jpg')}}" alt="">
                                    <h4>Majherul islam</h4>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="client_comments">
                                    <span><b>Loved the service and support. They deliver product in less than a day. Product quality is so good more than I expected. Best Wishes for them. </b></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="row bottom-flex">
                            <div class="col-md-4" style="border-right: 1px solid;">
                                <div class="client_img text-center">
                                    <img src="{{asset('assets/images/clients/client3.jpg')}}" alt="">
                                    <h4>Zahid hossain</h4>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="client_comments">
                                    <span><b>After ordering they responds very fast and their price range is also cheap than other marketplace. </b></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="terms" style="margin-bottom: 2em">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="terms1">
                        <h2>Customer Care</h2>
                        <ul style="list-style: none;padding-left: 0 !important;">
                            <li>Help Center</li>
                            <li>How to buy</li>
                            <li>Contact Us</li>
                            <li>Track your order</li>
                            <li>FAQ</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="terms2">
                        <h2>SETCOLBD</h2>
                        <ul style="list-style: none;padding-left: 0 !important;">
                            <li>About Setcolbd</li>
                            <li>Career</li>
                            <li>Privacy Policy</li>
                            <li>Terms & Condition</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="terms3">
                        <h2>We accept</h2>
                        <ul>
                            <li><img src="{{ asset('assets/images/icons/bkash.png') }}" class="img-responsive" alt=""></li>
                            <li><img src="{{ asset('assets/images/icons/paypal.png') }}" class="img-responsive" alt=""></li>
                            <li><img src="{{ asset('assets/images/icons/mastercard.png') }}" class="img-responsive" alt=""></li>
                            <li><img src="{{ asset('assets/images/icons/visa.png') }}" class="img-responsive" alt=""></li>
                            <li><img src="{{ asset('assets/images/icons/cashon.jpg') }}" class="img-responsive" alt=""></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="terms4">
                        <h2>Follow Us</h2>
                        <ul>
                            <li><i class="fas fa-phone-volume"></i></li>
                            <li> <b> +88-0255112226 </b></li>
                        </ul>
                        <ul>
                            <li> Or email us</li>
                            <li><b> setcolbd@gmail.com </b></li>
                        </ul>
                        <ul>
                            <li><a href="" target="_blank"><img src="{{ asset('assets/images/icons/Facebook.png') }}" class="img-responsive" alt=""></a></li>
                            <li><a href="" target="_blank"><img src="{{ asset('assets/images/icons/Youtube.png') }}" class="img-responsive" alt=""></a></li>
                            <li><a href="" target="_blank"><img src="{{ asset('assets/images/icons/Instagram.png') }}" class="img-responsive" alt=""></a></li>
                            <li><a href="" target="_blank"><img src="{{ asset('assets/images/icons/Twitter.png') }}" class="img-responsive" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{--    <section class="footer">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12 text-center">--}}
{{--                    <a href="http://setcolbd.com/" target="_blank"><img src="assets/images/icons/ash-color-footer.png" alt="setcolbd" style="width: 35%;"></a>--}}
{{--                    <p><b>@ Developed by <a href="http://setcolbd.com/" target="_blank" style="text-decoration: none;font-family: cursive;color: rgb(65, 170, 225);">SETCOLBD</a></b></p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}




    <script>
        $('#carousel01').owlCarousel({
            rtl:false,
            loop:true,
            autoplay: true,
            dots: true,
            autoPlay:100,
            margin:10,
            nav:false,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            navText:["<i class='fas fa-long-arrow-alt-left'></i>","<i class='fas fa-long-arrow-alt-right'></i>" ],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        });
        $('#carousel02').owlCarousel({
            rtl:false,
            loop:true,
            autoplay: false,
            dots: false,
            autoPlay:100,
            margin:10,
            nav:true,
            navText:["<i class='fas fa-long-arrow-alt-left'></i>","<i class='fas fa-long-arrow-alt-right'></i>" ],
            responsive:{
                0:{
                    items:3
                },
                600:{
                    items:4
                },
                1000:{
                    items:4
                }
            }
        });
        $('#carousel03').owlCarousel({
            rtl:false,
            loop:true,
            autoplay: false,
            dots: false,
            autoPlay:100,
            margin:10,
            nav:true,
            navText:["<i class='fas fa-long-arrow-alt-left'></i>","<i class='fas fa-long-arrow-alt-right'></i>" ],
            responsive:{
                0:{
                    items:3
                },
                600:{
                    items:4
                },
                1000:{
                    items:4
                }
            }
        });
        $('#carousel04').owlCarousel({
            rtl:false,
            loop:true,
            autoplay: false,
            dots: false,
            autoPlay:100,
            margin:10,
            nav:true,
            navText:["<i class='fas fa-long-arrow-alt-left'></i>","<i class='fas fa-long-arrow-alt-right'></i>" ],
            responsive:{
                0:{
                    items:3
                },
                600:{
                    items:4
                },
                1000:{
                    items:4
                }
            }
        });
        $('#carousel05').owlCarousel({
            rtl:false,
            loop:true,
            autoplay: false,
            dots: false,
            autoPlay:100,
            margin:10,
            nav:true,
            navText:["<i class='fas fa-long-arrow-alt-left'></i>","<i class='fas fa-long-arrow-alt-right'></i>" ],
            responsive:{
                0:{
                    items:3
                },
                600:{
                    items:4
                },
                1000:{
                    items:4
                }
            }
        });
        $('#carousel06').owlCarousel({
            rtl:false,
            loop:true,
            autoplay: false,
            dots: false,
            autoPlay:100,
            margin:10,
            nav:true,
            navText:["<i class='fas fa-long-arrow-alt-left'></i>","<i class='fas fa-long-arrow-alt-right'></i>" ],
            responsive:{
                0:{
                    items:3
                },
                600:{
                    items:4
                },
                1000:{
                    items:4
                }
            }
        });
        $('#carousel07').owlCarousel({
            rtl:false,
            loop:true,
            autoplay: false,
            dots: true,
            autoPlay:100,
            margin:10,
            nav:false,
            navText:["<i class='fas fa-long-arrow-alt-left'></i>","<i class='fas fa-long-arrow-alt-right'></i>" ],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        });
    </script>
    <script>

        $('.toggle').click(function() {
            $('#target').toggle('slow');
        });
        $('.remind').click(function() {
            $('#catg').toggle('slow');
        });
    </script>
    <script>
        function makeTimer() {

            //		var endTime = new Date("29 April 2018 9:56:00 GMT+01:00");
            var endTime = new Date("29 December 2019 9:56:00 GMT+01:00");
            endTime = (Date.parse(endTime) / 1000);

            var now = new Date();
            now = (Date.parse(now) / 1000);

            var timeLeft = endTime - now;

            var days = Math.floor(timeLeft / 86400);
            var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
            var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
            var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

            if (hours < "10") { hours = "0" + hours; }
            if (minutes < "10") { minutes = "0" + minutes; }
            if (seconds < "10") { seconds = "0" + seconds; }

            $("#days").html(days + "<span class='count'>Days</span>");
            $("#hours").html(hours + "<span class='count'>Hours</span>");
            $("#minutes").html(minutes + "<span class='count'>Minutes</span>");
            $("#seconds").html(seconds + "<span class='count'>Seconds</span>");

        }

        setInterval(function() { makeTimer(); }, 1000);
    </script>
@endsection

