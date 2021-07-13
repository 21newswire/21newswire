@extends('front-end.layout')
@section('title', '21NewsWire')
@section('content')
<!-- Font Icon -->
<link rel="stylesheet" href="{{asset('assets/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

<!-- Main css -->
<link rel="stylesheet" href="{{asset('assets/css/style2.css')}}">
<section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            @csrf
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input id="name" type="text"  placeholder="Your Name" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input id="email" type="email" placeholder="Your Email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input id="password" type="password"placeholder="Password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input id="password-confirm" placeholder="Repeat your password" type="password" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{asset('assets/images/signup-image.jpg')}}" alt="sing up image"></figure>
                        <a href="{{route('login')}}" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

        <script src="{{asset('assets/images/js/main2.js')}}"></script>

@stop
