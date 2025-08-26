@extends('red_store.layouts.red_store')

@section('content')
    <div class="small-container">

        <div class="row row-2">
            <h2>All Products</h2>
            <select name="select" id="select">
                <option value="">Default Shorting</option>
                <option value="">Short By Price</option>
                <option value="">Short By Popularity</option>
                <option value="">Short By Rating</option>
                <option value="">Short By Sale</option>
            </select>
        </div>


        <div class="row">
            <div class="col-4">
                <img src="{{ asset('images/product-1.jpg') }}" alt="">
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
        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
        </div>
    </div>
@endsection
