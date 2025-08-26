@extends('red_store.layouts.red_store')


@section('content')
<!-- About Section -->
<div class="about-section">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <img src="{{ asset('images/about-store.png') }}" alt="About Red Store">
            </div>
            <div class="col-2 sachin">
                <h1>About Red Store</h1>
                <p>
                    <strong>Red Store</strong> is more than just an online shop – it’s a lifestyle.
                    We started with a simple vision: to bring stylish, high-quality, and affordable products to customers everywhere.
                </p>
                <p>
                    From clothing to accessories, our goal is to provide items that not only look good but also make you feel confident.
                    With a strong focus on customer satisfaction, fast delivery, and unique designs, Red Store has grown into a trusted brand loved by thousands.
                </p>
                <p>
                    Thank you for choosing <strong>Red Store</strong>.
                    We’re excited to be part of your journey in style!
                </p>
                <a href="{{ route('red_store.products') }}" class="btn">Shop Now &#8594;</a>
            </div>
        </div>
    </div>

    @php
        $jobs = [
            'PHP Developer', 'Designer', "HR", "SEO dd"
        ];
    @endphp
    @each('red_store.free_shipping_info', $jobs, 'job')
</div>

@endsection



 @push('scripts')
    <script>
        console.log("this is from about");
    </script>
    @endpush

    
 @push('scripts')
    <script>
        console.log("this is another from about");
    </script>
    @endpush


