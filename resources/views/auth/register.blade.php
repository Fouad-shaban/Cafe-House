@extends('layouts.app')

@section('content')
<section class="tm-welcome-section">
    <div class="container tm-position-relative">
        <div class="tm-lights-container">
            <img src={{ asset("img/light.png") }} alt="Light" class="light light-1">
            <img src={{ asset("img/light.png") }} alt="Light" class="light light-2">
            <img src={{ asset("img/light.png") }} alt="Light" class="light light-3">
        </div>
        <div class="row tm-welcome-content">
            <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src={{ asset("img/header-line.png") }} alt="Line"
                    class="tm-header-line">&nbsp;Register Page&nbsp;&nbsp;<img src={{ asset("img/header-line.png") }} alt="Line"
                    class="tm-header-line"></h2>
            <h2 class="gold-text tm-welcome-header-2">Cafe House</h2>
            <p class="white-text tm-welcome-description aref-ruqaa-regular " style="font-size: 20px">{{__("language.INTRODUCTION")}}</p>
                <a href={{ route('welcome') }}  class="tm-more-button tm-more-button-welcome">Home Page</a>
        </div>
        <img src={{ asset("img/table-set.png") }} alt="Table Set" class="tm-table-set img-responsive">
    </div>
</section>
<div class="tm-main-section light-gray-bg">
<div class="container " id="main">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header tm-site-name tm-handwriting-font">{{ __('Register') }} </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="tm-more-button tm-more-button-welcome">
                                    {{ __('Register') }}
                                </button>
                                <a href={{ route('login') }} class="tm-more-button tm-more-button-welcome">
                                    {{ __('Login') }}
                                </a>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
