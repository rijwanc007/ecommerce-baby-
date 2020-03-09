@extends('master')
@section('content')
    <div class="container">
        <div class="single_pro_top mt-5">
            <div class="row">
                <div class="col-md-4" style="background: #87cefa;padding: 1em;">
                    <div class="single_pro_top_img">

                        <img id="zoom_03"
                             style="width: 350px;height: 350px"
                             src="{{asset('assets/images/random/watch.jpg')}}"
                             data-zoom-image="{{asset('assets/images/random/watch.jpg')}}"/>

                        <div class="row" id="gal1">

                            <div class="col-md-4">
                                <a href="#" data-image="{{asset('assets/images/random/delivery.jpg')}}" data-zoom-image="{{asset('assets/images/random/delivery.jpg')}}">
                                    <img src="{{asset('assets/images/random/delivery.jpg')}}"/>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="#" data-image="{{asset('assets/images/random/watch.jpg')}}" data-zoom-image="{{asset('assets/images/random/watch.jpg')}}">
                                    <img src="{{asset('assets/images/random/watch.jpg')}}"/>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="#" data-image="{{asset('assets/images/random/beauty.jpg')}}" data-zoom-image="{{asset('assets/images/random/beauty.jpg')}}">
                                    <img src="{{asset('assets/images/random/beauty.jpg')}}"/>
                                </a>
                            </div>

                        </div>




                    </div>

                </div>
                <div class="col-md-8" style="background: #87cefa;padding: 1em;">
                    <h4>Baby Girls Kids Toddler Outwear Clothes Winter Jacket Coat Snowsuit Clothing</h4>
                    <!-- Rating Stars Box -->
                    <section class='rating-widget mt-3'>
                        <div class="row">
                            <div class='col-md-4 rating-stars '>
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
                            <div class='col-md-2 '>
                                <div class="success-box">
                                    <div class='text-message'>0</div>
                                </div>
                            </div>
                        </div>


                    </section>
                    <p>Brand : <a href="#">Cocoapps Store</a></p>
                    <p class="product_price">৳500</p>
                    <p class="product_pre_price ">৳1500</p>
                    <div class="counter mb-3">
                        <div id="input_div">
                            <input type="button" class="btn btn-success" value="-" id="minus" onclick="minus()">
                            <input type="text" size="1" value="1" id="count">
                            <input type="button" class="btn btn-success" value="+" id="plus" onclick="plus()">
                        </div>
                    </div>


                    <div class="row mt-3">
                        <div class="col-md-2"><b>Color </b></div>
                        <div class="col-md-6">
                            <ul style="list-style: none;display: -webkit-inline-box;padding: 0">
                                <li style="color: red;margin-right: 1em">red</li>
                                <li style="color: green;margin-right: 1em">Green</li>
                                <li style="color: blue;margin-right: 1em">Blue</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-2"><b>Size</b></div>
                        <div class="col-md-6">Baby</div>
                    </div>
                    <span>
                        <button class="btn btn-success">Add to cart</button>
                        <button class="btn btn-danger">Buy Now</button>
                    </span>
                    <br><br>

                    <form action="" class="form-inline">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Apply Code</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="Apply Code">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary ml-5">Apply</button>
                    </form>


                    <div  class="mt-5">
                        <h4>Product details </h4>
                        <ul>
                            <li>Eco-friendly cotton, soft, breathable, wear resistant and anti-pilling</li>
                            <li>Lovely pattern and colour, making you elegant and charming</li>
                            <li>High quality and Brand new 100%</li>
                            <li>It is made of high quality materials,Soft hand feeling, no any harm to your skin</li>
                            <li>Great for casual, daily, party or photoshoot</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="container mb-5">

        <br>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#home">Description</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu1">Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu2">Review</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div id="home" class="container tab-pane active"><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                    sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
            </div>
            <div id="menu1" class="container tab-pane fade"><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                    sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
            </div>
            <div id="menu2" class="container tab-pane fade"><br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="single-review mb-5">
                            <div class="review-heading">
                                <div><a href="#"><i class="fas fa-user"></i> John</a></div>
                                <div><a href="#"><i class="fas fa-calendar-check"></i> 27 DEC 2017 / 8:0 PM</a></div>
                                <div class="review-rating float-right">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o empty"></i>
                                </div>
                            </div>
                            <div class="review-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </div>
                        <div class="single-review">
                            <div class="review-heading">
                                <div><a href="#"><i class="fas fa-user"></i> John</a></div>
                                <div><a href="#"><i class="fas fa-calendar-check"></i> 27 DEC 2017 / 8:0 PM</a></div>
                                <div class="review-rating float-right">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o empty"></i>
                                </div>
                            </div>
                            <div class="review-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row margin_top">
                            <div class="col-md-12 text-center">
                                <br/><br/>
                                <h2 class="about_us_text_hr">Write Review</h2>
                                <div class="hr_design"></div>
                            </div>
                        </div>
                        <div class="row margin_top">
                            <div class="col-md-12">
                                <form>
                                    <fieldset class="material">
                                        <input class="input_field" type="text" autocomplete="off" required>
                                        <hr class="input_field_hr">
                                        <label>Please Enter Your Name</label>
                                    </fieldset>
                                    <br><br>
                                    <fieldset class="material">
                                        <input class="input_field" type="email" autocomplete="off" required>
                                        <hr class="input_field_hr">
                                        <label>Please Type Your Email</label>
                                    </fieldset>
                                    <br><br/>
                                    <fieldset class="material">
                                        <textarea name="" id="" cols="30" rows="5" class="input_field" autocomplete="off"></textarea>
{{--                                        <input class="input_field" type="text" autocomplete="off" required>--}}
                                        <hr class="input_field_hr">
                                        <label>Please Enter Your Message</label>
                                    </fieldset>
                                    <br><br/>

                                    <br>
                                    <input type="submit" class="btn btn-primary submit_button_design" value="Submit" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script>
        $('#zoom_03').ezPlus({
            gallery: 'gal1',
            cursor: 'pointer',
            galleryActiveClass: 'active',
            imageCrossfade: true,
            scrollZoom: true,
            loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'
        });

        //pass the images to Fancybox
        $('#zoom_03').bind('click', function (e) {
            var ez = $('#zoom_03').data('ezPlus');
            $.fancyboxPlus(ez.getGalleryList());
            return true;
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
    <script>

        var count = 1;
        var countEl = document.getElementById("count");
        function plus(){
            count++;
            countEl.value = count;
        }
        function minus(){
            if (count > 1) {
                count--;
                countEl.value = count;
            }
        }

    </script>
@endsection
