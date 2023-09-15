<!DOCTYPE html>
<html lang="en">
<head>
    <title>E-Commerce</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('image/icons/favicon.ico') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
</head>
<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('{{ asset('image/bg-01.jpg') }}');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <form class="login100-form validate-form">
                <span class="login100-form-title p-b-40">
                    Reset Password
                </span>
                <span style="font-size: 20px">
                    Create a new password to reset your account.
                </span>

                <div class="wrap-input100 validate-input m-b-10 m-t-20" data-validate="Password is required">
                    <span class="label-input100">Password</span>
                    <input class="input100" type="password" name="pass" placeholder="Type your password">
                    <span class="focus-input100" data-symbol="&#xf190;"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-30" data-validate="Password is required">
                    <span class="label-input100">Password</span>
                    <input class="input100" type="password" name="pass" placeholder="Type your password">
                    <span class="focus-input100" data-symbol="&#xf190;"></span>
                </div>
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            Reset your password
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="dropDownSelect1"></div>

<script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
<script src="{{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
<script src="{{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('vendor/countdowntime/countdowntime.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
