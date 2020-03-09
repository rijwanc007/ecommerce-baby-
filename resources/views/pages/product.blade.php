@extends('master')
@section('content')
    <section class="parala">
        <div class="paralax rellax" data-rellax-speed="-5" style="top: 8%">
            <img class="" src="{{ asset('assets/images/random/cart.png') }}"  alt="Card image cap">
        </div>
        <div class="paralax rellax" data-rellax-speed="-5" style="top: 20%; left: 50%">
            <img class="" src="{{ asset('assets/images/random/bag.png') }}"  alt="Card image cap">
        </div>
        <div class="paralax rellax" data-rellax-speed="-5" style="top: 50%; right:3%">
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
{{--        <div class="paralax rellax" data-rellax-speed="-5" style="top: 55%; left: 15%">--}}
{{--            <img class="" src="{{ asset('assets/images/random/ball.png') }}"  alt="Card image cap">--}}
{{--        </div>--}}
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
    <div class="container">

        <div class="product_list_banner mt-3 mb-3">
            <img src="{{ asset('assets/images/random/tshirt.jpg') }}" alt="" style="width: 100%;height: 300px">

        </div>
        <div class="path mt-4 mb-5">
            <span> Men </span>
            <span> > </span>
            <span> T-Shirt </span>
        </div>
    </div>
    <div class="container custom_container">
        <div class="row ">
            <div class="col-md-3 search_options pt-3">
                <p class="search_options_catg"> T-shirt related Category</p>

                <div class="brand_catg">
                    <p class="search_options_catg">Brands</p>

                    <!-- Default unchecked -->
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">Next Gen</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked2">
                        <label class="custom-control-label" for="defaultUnchecked2">XYZ shopping</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked3">
                        <label class="custom-control-label" for="defaultUnchecked3">Mehanil</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked4">
                        <label class="custom-control-label" for="defaultUnchecked4">Apara</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked5">
                        <label class="custom-control-label" for="defaultUnchecked5">Dupdo</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked6">
                        <label class="custom-control-label" for="defaultUnchecked6">Aynaghor</label>
                    </div>
                </div>
                <div class="price_slide mt-3">
                    <p>
                        <label for = "price" class="search_options_catg">Price range:</label>
                        <input type = "text" id = "price"
                               style = "border:0; color:#b9cd6d; font-weight:bold;">
                    </p>
                    <div id = "slider-3"></div>
                </div>
                <section class='rating-widget mt-3'>

                    <!-- Rating Stars Box -->

                    <p class="search_options_catg">Rating </p>

                    <div class="row">
                        <div class='col-md-9 rating-stars text-center'>
                            <ul id='stars'>
                                <li class='star' title='Poor' data-value='1'>
                                    <i class='fa fa-star fa-fw'></i>
                                </li>
                                <li class='star' title='Fair' data-value='2'>
                                    <i class='fa fa-star fa-fw'></i>
                                </li>
                                <li class='star' title='Good' data-value='3'>
                                    <i class='fa fa-star fa-fw'></i>
                                </li>
                                <li class='star' title='Excellent' data-value='4'>
                                    <i class='fa fa-star fa-fw'></i>
                                </li>
                                <li class='star' title='WOW!!!' data-value='5'>
                                    <i class='fa fa-star fa-fw'></i>
                                </li>
                            </ul>
                        </div>
                        <div class='col-md-3 '>
                            <div class="success-box">
                                <div class='text-message'>0</div>
                            </div>
                        </div>
                    </div>


                </section>
                <div class="product_catg_1 mb-2">
                    <p class="search_options_catg">Sleeves</p>

                    <!-- Default unchecked -->
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked7">
                        <label class="custom-control-label" for="defaultUnchecked7">Short Sleeve</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked8">
                        <label class="custom-control-label" for="defaultUnchecked8">Long Sleeve</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked9">
                        <label class="custom-control-label" for="defaultUnchecked9">Sleeveless</label>
                    </div>

                </div>
                <div class="product_catg_2">
                    <p class="search_options_catg">Fit Type</p>

                    <!-- Default unchecked -->
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked10">
                        <label class="custom-control-label" for="defaultUnchecked10">Slim Fit</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked11">
                        <label class="custom-control-label" for="defaultUnchecked11">Oversized</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked12">
                        <label class="custom-control-label" for="defaultUnchecked12">Long Line</label>
                    </div>

                </div>

            </div>

            <div class="col-md-7 content">
                <div class="row">
                    @for($i = 0; $i<7; $i++)
                        <div class="col-md-4 mb-3">@include('includes.product-card3')</div>
                        <div class="col-md-4 mb-3">@include('includes.product-card2')</div>
                        <div class="col-md-4 mb-3">@include('includes.product-card')</div>
                    @endfor
                </div>
            </div>

            <div class="col-md-2">
                <div class="card add_card mb-4">
                    <img src="{{ asset('assets/images/random/samsung.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Samsung A30</h5>
                        <h4>$500</h4>
                        <p class="card-text">Special Offer for Eid festival. Grab that offer.</p>
                        <a href="#" class="btn btn-primary">View</a>
                    </div>
                </div>
                <div class="card add_card mb-4">
                    <img src="{{ asset('assets/images/random/treamer.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Treamer</h5>
                        <h4>$500</h4>
                        <p class="card-text">Special Offer for Eid festival. Grab that offer.</p>
                        <a href="#" class="btn btn-primary">View</a>
                    </div>
                </div>
                <div class="card add_card mb-4">
                    <img src="{{ asset('assets/images/random/samsung.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Samsung A30</h5>
                        <h4>$500</h4>
                        <p class="card-text">Special Offer for Eid festival. Grab that offer.</p>
                        <a href="#" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        $(function() {
            $( "#slider-3" ).slider({
                range:true,
                min: 0,
                max: 1000,
                values: [ 105, 400 ],
                slide: function( event, ui ) {
                    $( "#price" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                }
            });
            $( "#price" ).val( "$" + $( "#slider-3" ).slider( "values", 0 ) +
                " - $" + $( "#slider-3" ).slider( "values", 1 ) );
        });
    </script>
    <script>
        $(document).ready(function(){

            /* 1. Visualizing things on Hover - See next part for action on click */
            $('#stars li').on('mouseover', function(){
                var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

                // Now highlight all the stars that's not after the current hovered star
                $(this).parent().children('li.star').each(function(e){
                    if (e < onStar) {
                        $(this).addClass('hover');
                    }
                    else {
                        $(this).removeClass('hover');
                    }
                });

            }).on('mouseout', function(){
                $(this).parent().children('li.star').each(function(e){
                    $(this).removeClass('hover');
                });
            });


            /* 2. Action to perform on click */
            $('#stars li').on('click', function(){
                var onStar = parseInt($(this).data('value'), 10); // The star currently selected
                var stars = $(this).parent().children('li.star');

                for (i = 0; i < stars.length; i++) {
                    $(stars[i]).removeClass('selected');
                }

                for (i = 0; i < onStar; i++) {
                    $(stars[i]).addClass('selected');
                }

                // JUST RESPONSE (Not needed)
                var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
                var msg = "";
                if (ratingValue > 1) {
                    msg = "" + ratingValue + "";
                }
                else {
                    msg = "" + ratingValue + "";
                }
                responseMessage(msg);

            });


        });


        function responseMessage(msg) {
            $('.success-box').fadeIn(200);
            $('.success-box div.text-message').html("<span>" + msg + "</span>");
        }
    </script>
@endsection
