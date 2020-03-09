<div class="product-card">
    <div class="product">
    <div class="row">
        <div class="col-md-12" >

            <div class="card">
                <img class="service_pic card-img-top card-img" src="{{ asset('assets/images/home/product2.jpg') }}" alt="customer_software"/>


                <div class="card-body">
                    <h5 class="">Skin care cream</h5>
                    <span class="product_price">৳200</span>
                    <span class="product_pre_price">৳1000</span>
                    <div class="rating mt-2">
                        <ul>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><i class="fas fa-star"></i></li>
                            <li><span>(3)</span></li>
                        </ul>

                    </div>
                    {{--                    <div class="action">--}}
                    {{--                        <a href="#" class="btn btn-primary mt-3" data-toggle="modal" data-target="#myModal">Add cart</a>--}}
                    {{--                    </div>--}}

                </div>
            </div>
            <div class="product_discount">
                <span>80%</span>
            </div>
        </div>
    </div>
    <div class="product-overlay">
        <span>
            <button class="btn btn-success mb-2">Add to cart</button>
            <button class="btn btn-danger">Buy Now</button>
        </span>
    </div>
</div>
    <a href="{{ route('pages.single_product') }}" class="btn btn-primary" style="width: 100%">Details</a>
</div>
