@extends('red_store.layouts.red_store')
@section('hero-section')
<div class="row">
    <div class="col-2">
        {{ env('APP_ENV') }}
        @env('staging')
        <h1>This for staging Give Your Workout <br> A New Style! @{{ $name }}</h1>
        @endenv
        @env('local')
        <h1>Give Your Workout <br> A New Style! @{{ $name }}</h1>
        @endenv
        <p>Success isn't always about greatness. it's about consistency. Consintent <br>hard work gains success.greatness will come.</p>
        <a href="" class="btn">Explore Now &#8594;</a>
    </div>
    <div class="col-2">
        <img src="{{ asset('images/image1.png') }}" alt="">
    </div>
</div>
<!-- hero-section ended -->
@endsection 
@section('content')
    <!-- Featured Categories  -->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="{{ asset('images/category-1.jpg') }}" alt="">
                </div>
                <div class="col-3">
                    <img src="{{ asset('images/category-2.jpg') }}" alt="">
                </div>
                <div class="col-3">
                    <img src="{{ asset('images/category-3.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Products  -->
    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col-4">
                <a href="productDetails.php"><img src="{{ asset('images/product-1.jpg') }}" alt=""></a>
                <a href="productDetails.php">
                    <h4>Red Printed T-shirt</h4>
                </a>

                <div class="rating">
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-regular fa-star"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="{{ asset('images/product-2.jpg') }}" alt="">
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-regular fa-star-half-stroke"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="{{ asset('images/product-3.jpg') }}" alt="">
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-regular fa-star-half-stroke"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="{{ asset('images/product-4.jpg') }}" alt="">
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-regular fa-star-half-stroke"></i>
                </div>
                <p>$50.00</p>
            </div>
        </div>
        <h2 class="title">
            latest Products
        </h2>
        <div class="row">
            <div class="col-4">
                <img src="{{ asset('images/product-5.jpg') }}" alt="">
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fa fa fa-solid fa-star"></i>
                    <i class="fa fa fa-solid fa-star"></i>
                    <i class="fa fa fa-solid fa-star"></i>
                    <i class="fa fa fa-solid fa-star"></i>
                    <i class="fa fa fa-regular fa-star"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="{{ asset('images/product-6.jpg') }}" alt="">
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-regular fa-star-half-stroke"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="{{ asset('images/product-7.jpg') }}" alt="">
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-regular fa-star-half-stroke"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="{{ asset('images/product-8.jpg') }}" alt="">
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-solid fa-star"></i>
                    <i class="fa fa-regular fa-star-half-stroke"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="row">
                <div class="col-4">
                    <img src="{{ asset('images/product-9.jpg') }}" alt="">
                    <h4>Red Printed T-shirt</h4>
                    <div class="rating">
                        <i class="fa fa-solid fa-star"></i>
                        <i class="fa fa-solid fa-star"></i>
                        <i class="fa fa-solid fa-star"></i>
                        <i class="fa fa-solid fa-star"></i>
                        <i class="fa fa-regular fa-star"></i>
                    </div>
                    <p>$50.00</p>
                </div>
                <div class="col-4">
                    <img src="{{ asset('images/product-10.jpg') }}" alt="">
                    <h4>Red Printed T-shirt</h4>
                    <div class="rating">
                        <i class="fa fa-solid fa-star"></i>
                        <i class="fa fa-solid fa-star"></i>
                        <i class="fa fa-solid fa-star"></i>
                        <i class="fa fa-solid fa-star"></i>
                        <i class="fa fa-regular fa-star-half-stroke"></i>
                    </div>
                    <p>$50.00</p>
                </div>
                <div class="col-4">
                    <img src="{{ asset('images/product-11.jpg') }}" alt="">
                    <h4>Red Printed T-shirt</h4>
                    <div class="rating">
                        <i class="fa fa-solid fa-star"></i>
                        <i class="fa fa-solid fa-star"></i>
                        <i class="fa fa-solid fa-star"></i>
                        <i class="fa fa-solid fa-star"></i>
                        <i class="fa fa-regular fa-star-half-stroke"></i>
                    </div>
                    <p>$50.00</p>
                </div>
                <div class="col-4">
                    <img src="{{ asset('images/product-12.jpg') }}" alt="">
                    <h4>Red Printed T-shirt</h4>
                    <div class="rating">
                        <i class="fa fa-solid fa-star"></i>
                        <i class="fa fa-solid fa-star"></i>
                        <i class="fa fa-solid fa-star"></i>
                        <i class="fa fa-regular fa-star-half-stroke"></i>
                    </div>
                    <p>$50.00</p>
                </div>
            </div>
        </div>
    </div>
    <!-- offer -->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="{{ asset('images/exclusive.png') }}" alt="" class="offer-img">
                </div>
                <div class="col-2 sachin">
                    <p>Exclusively Availabe on Redstore</p>
                    <h1>Smart Band 4</h1>
                    <small>
                        the mi smart band 4 features a 39.9% larger (than mi band 3) amoled color full-touch display with adjustable briteness , so everithing is clear as can be.
                    </small>
                    <a href="" class="btn"> Buy Now &#8594;</a>
                </div>
            </div>
        </div>
    </div>


    <!-- testimonials -->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa-solid fa-quote-left"></i>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat a non aspernatur, ab odio numquam quam dolorum in, veniam labore ea incidunt beatae suscipit quae? Minus accusamus nam reprehenderit reiciendis.
                    </p>
                    <div class="rating">
                        <i class="fa fa-solid fa-star"></i>
                        <i class="fa fa-solid fa-star"></i>
                        <i class="fa fa-solid fa-star"></i>
                        <i class="fa fa-regular fa-star-half-stroke"></i>
                    </div>
                    <img src="{{ asset('images/user-1.png') }}" alt="">
                    <h3>Sean Parker</h3>
                </div>
                <div class="col-3">
                    <i class="fa-solid fa-quote-left"></i>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat a non aspernatur, ab odio numquam quam dolorum in, veniam labore ea incidunt beatae suscipit quae? Minus accusamus nam reprehenderit reiciendis.
                    </p>
                    <div class="rating">
                        <i class="fa fa-solid fa-star"></i>
                        <i class="fa fa-solid fa-star"></i>
                        <i class="fa fa-solid fa-star"></i>
                        <i class="fa fa-regular fa-star-half-stroke"></i>
                    </div>
                    <img src="{{ asset('images/user-2.png') }}" alt="">
                    <h3>Mike Smith</h3>
                </div>
                <div class="col-3">
                    <i class="fa-solid fa-quote-left"></i>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat a non aspernatur, ab odio numquam quam dolorum in, veniam labore ea incidunt beatae suscipit quae? Minus accusamus nam reprehenderit reiciendis.
                    </p>
                    <div class="rating">
                        <i class="fa fa-solid fa-star"></i>
                        <i class="fa fa-solid fa-star"></i>
                        <i class="fa fa-solid fa-star"></i>
                        <i class="fa fa-regular fa-star-half-stroke"></i>
                    </div>
                    <img src="{{ asset('images/user-3.png') }}" alt="">
                    <h3>Mable Joe</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- brands -->
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="{{ asset('images/logo-godrej.png') }}" alt="">
                </div>
                <div class="col-5">
                    <img src="{{ asset('images/logo-oppo.png') }}" alt="">
                </div>
                <div class="col-5">
                    <img src="{{ asset('images/logo-coca-cola.png') }}" alt="">
                </div>
                <div class="col-5">
                    <img src="{{ asset('images/logo-paypal.png') }}" alt="">
                </div>
                <div class="col-5">
                    <img src="{{ asset('images/logo-philips.png') }}" alt="">
                </div>

            </div>
        </div>
    </div>
@endsection



