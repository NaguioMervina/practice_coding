<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>


</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:600|Noto+Sans|Open+Sans:400,700&display=swap');
    * {
        margin: 0;
        padding: 0;
        border-radius: 5px;
        box-sizing: border-box;
    }
    
    body {
        height: 100vh;
        display: flex;
        align-items: center;
        text-align: center;
        font-family: sans-serif;
        justify-content: center;
        background: url(teaBg.jpg);
        background-size: cover;
        background-position: center;
    }
    
    .container {
        position: relative;
        width: 400px;
        background: wheat;
        padding: 60px 40px;
    }
    
    header {
        font-size: 40px;
        margin-bottom: 60px;
        font-family: 'Montserrat', sans-serif;
    }
    
    .input-field,
    form .button {
        margin: 25px 0;
        position: relative;
        height: 50px;
        width: 100%;
    }
    
    .input-field input {
        height: 100%;
        width: 100%;
        border: 1px solid silver;
        padding-left: 15px;
        outline: none;
        font-size: 19px;
        transition: .4s;
    }
    
    input:focus {
        border: 1px solid #1DA1F2;
    }
    
    .input-field label,
    span.show {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
    }
    
    .input-field label {
        left: 15px;
        pointer-events: none;
        color: grey;
        font-size: 18px;
        transition: .4s;
    }
    
    span.show {
        right: 20px;
        color: #111;
        font-size: 14px;
        font-weight: bold;
        cursor: pointer;
        user-select: none;
        visibility: hidden;
        font-family: 'Open Sans', sans-serif;
    }
    
    input:valid~span.show {
        visibility: visible;
    }
    
    input:focus~label,
    input:valid~label {
        transform: translateY(-33px);
        background: white;
        font-size: 16px;
        color: #1DA1F2;
    }
    
    form .button {
        margin-top: 30px;
        overflow: hidden;
        z-index: 111;
    }
    
    .button .inner {
        position: absolute;
        height: 100%;
        width: 300%;
        left: -100%;
        z-index: -1;
        transition: all .4s;
        background: -webkit-linear-gradient(right, #19191a, #2e2e2e, #555555, #575657);
    }
    
    .button:hover .inner {
        left: 0;
    }
    
    .button button {
        width: 100%;
        height: 100%;
        border: none;
        background: none;
        outline: none;
        color: white;
        font-size: 20px;
        cursor: pointer;
        font-family: 'Montserrat', sans-serif;
    }
    
    .container .auth {
        margin: 35px 0 20px 0;
        font-size: 19px;
        color: grey;
    }
    
    .links {
        display: flex;
        cursor: pointer;
    }
    
    .facebook,
    .google {
        height: 40px;
        width: 100%;
        border: 1px solid silver;
        border-radius: 3px;
        margin: 0 10px;
        transition: .4s;
    }
    
    .facebook:hover {
        border: 1px solid #4267B2;
    }
    
    .google:hover {
        border: 1px solid #dd4b39;
    }
    
    .facebook i,
    .facebook span {
        color: #4267B2;
    }
    
    .google i,
    .google span {
        color: #dd4b39;
    }
    
    .links i {
        font-size: 23px;
        line-height: 40px;
        margin-left: -90px;
    }
    
    .links span {
        position: absolute;
        font-size: 17px;
        font-weight: bold;
        padding-left: 8px;
        font-family: 'Open Sans', sans-serif;
    }
    
    .signup {
        margin-top: 50px;
        font-family: 'Noto Sans', sans-serif;
    }
    
    .signup a {
        color: #3498db;
        text-decoration: none;
    }
    
    .signup a:hover {
        text-decoration: underline;
    }
</style>
<body>
<div class="container">
    <header>Login</header>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="input-field">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            <label>{{ __('E-Mail Address') }}</label>
        </div>
        <div class="input-field">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            <span class="show">SHOW</span>
            <label>Password</label>
            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>
        <div class="button">
            <div class="inner">
            </div>
            <button type="submit" class="btn btn-primary"><a  href="" style="color: white; text-decoration: none;">{{ __('Login') }}</a></button>
            @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
        </div>
        <div class="button">
            <div class="inner">
            </div>
            <button><a  href="index.html" style="color: white; text-decoration: none;">LOGIN AS GUEST</a></button>
        </div>
    </form>
    <div class="signup">
        Don't have an account? <a href="/register">Signup now</a>
    </div>
</body>
</html>
    
    