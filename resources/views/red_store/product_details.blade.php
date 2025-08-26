@extends('red_store.layouts.red_store')
<!-- Single Product Details  -->
@section('content')
<div class="small-container single-product">
    <div class="row">
        <div class="col-2">
            <img src="{{ asset('images/gallery-1.jpg') }}" width="100%" alt="" id="productImg" class="single-product-new">

            <div class="small-img-row">
                <div class="small-img-col">
                    <img src="{{ asset('images/gallery-1.jpg') }}" alt="" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="{{ asset('images/gallery-2.jpg') }}" alt="" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="{{ asset('images/gallery-3.jpg') }}" alt="" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="{{ asset('images/gallery-4.jpg') }}" alt="" class="small-img">
                </div>
            </div>
        </div>
        <div class="col-2">
            <p>Home / T-shirt</p>
            <h1>Red Printed T-shirt By HRX</h1>
            <h4>$50.00</h4>
            <select name="" id="">
                <option value=""> Select Size</option>
                <option value=""> XXL</option>
                <option value=""> XL</option>
                <option value=""> Large</option>
                <option value=""> Medium</option>
                <option value=""> Small</option>
            </select>
            <input type="number" value="1">
            <a href="" class="btn">Add To Cart</a>
            <h3>Product Details <i class="fa fa-solid fa-indent"></i></h3>
            <br>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est dignissimos repudiandae nostrum placeat explicabo ipsa.</p>
        </div>
    </div>
</div>

<!-- title -->
<div class="small-container">
    <div class="row row-2">
        <h2>Related Products</h2>
        <p>
            View More
        </p>
    </div>
</div>
<!-- products -->


<div class="small-container">

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
</div>
@endsection

@once
@push('scripts')
<!-- js for Product Gallery  -->
<script>
    let productImg = document.getElementById("productImg");
    let SmallImg = document.getElementsByClassName("small-img");
    SmallImg[0].onclick = function() {
        productImg.src = SmallImg[0].src;
    }
    SmallImg[1].onclick = function() {
        productImg.src = SmallImg[1].src;
    }
    SmallImg[2].onclick = function() {
        productImg.src = SmallImg[2].src;
    }
    SmallImg[3].onclick = function() {
        productImg.src = SmallImg[3].src;
    }
</script>

@endpush
@endonce

</body>

</html>