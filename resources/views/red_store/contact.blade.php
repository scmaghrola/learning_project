@extends('red_store.layouts.red_store')
@once
    @push('style')
    <style>
        .contact-section {
            padding: 80px 0;
        }

        .contact-section .row {
            display: flex;
            align-items: center;
            gap: 40px;
            flex-wrap: wrap;
        }

        .contact-section img {
            width: 100%;
            max-width: 450px;
            border-radius: 15px;
        }

        .contact-form {
            flex: 1;
        }

        .contact-form h1 {
            margin-bottom: 15px;
        }

        .contact-form p {
            margin-bottom: 25px;
            line-height: 1.6;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
        }

        .contact-form button {
            background: #e63946;
            color: #fff;
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        .contact-form button:hover {
            background: #c72e3d;
        }
    </style>
    @endpush
@endonce

@section('content')
<!-- Contact Section -->
<div class="small-container contact-section">
    <div class="row">
        <div class="col contact-form">
            <h1>Contact Us</h1>
            <p>Have questions or need support? Fill out the form below and our team will get back to you quickly.</p>
            <form action="" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </div>
</div>
@endsection