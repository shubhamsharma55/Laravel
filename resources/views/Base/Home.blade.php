@extends('Components.Header') @section('title', 'Home | Login')
@section('content')
    <div class="container-fluid p-0">
        <!-- Just an image -->
        <nav class="navbar navbar_Fm">
            <div class="logo_Fm mx-auto"">
                <a class="navbar-brand href="/">
                    Finance Manager
                </a>
            </div>
            @auth

                <div class="action_Fm">
                    <a href="{{ route('logout') }}" class="btn">Logout</a>
                </div>
            @endauth

        </nav>

        <section class="section_Home_Fm">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12 col-sm-12 article_FM d-flex justify-content-center align-items-center">
                        <h1 class="h1_Fm">
                            Welcome to Finanace Manager By<sub> Shubham</sub>
                        </h1>
                    </div>
                    <div class="col-md-6 col-xs-12 col-sm-12 article_FM d-flex justify-content-center align-items-center">
                        <form method="POST" id="login_Form_Fm" class="w-75">
                            @csrf
                            <div class="form-group">
                                <label for="email">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control" name="password" required
                                    autocomplete="current-password">
                            </div>

                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@section('scripts')
    <script src="{{ asset('js/base.js') }}"></script>
@endsection

@endsection
