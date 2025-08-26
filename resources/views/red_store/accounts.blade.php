@extends('red_store.layouts.red_store')
<!------------------ Account Page ----------------------->
@section('content')
<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="{{ asset('images/image1.png') }}" alt="" width="100%">
            </div>
            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="Login()">Login</span>
                        <span onclick="Register()">Register</span>
                        <hr id="indicator">
                    </div>

                    <form action="" id="LoginForm">
                        <input type="text" placeholder="User Name">
                        <input type="password" placeholder="password">
                        <button type="submit" class="btn">Login</button>
                        <a href="">Forgot Password ?</a>
                    </form>

                    <form action="" id="RegForm">
                        <input type="text" placeholder="User Name">
                        <input type="email" placeholder="email">
                        <input type="password" placeholder="password">
                        <button type="submit" class="btn">Register</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@once
    @push('scripts')
        <script>
            let loginForm = document.getElementById("LoginForm");
            let RegForm = document.getElementById("RegForm");
            let indicator = document.getElementById("indicator");

            function Register() {

                RegForm.style.transform = "translateX(0px)";
                loginForm.style.transform = "translateX(0px)";
                indicator.style.transform = "translateX(100px)";

            }

            function Login() {

                RegForm.style.transform = "translateX(300px)";
                loginForm.style.transform = "translateX(300px)";
                indicator.style.transform = "translateX(0px)";

            }
        </script>
    @endpush
@endonce