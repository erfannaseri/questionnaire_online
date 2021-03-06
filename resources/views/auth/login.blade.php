@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center" style="font-size: 30px;font-family: 'Courier New'"> {{ __('ورود') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('ایمیل') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('رمز عبور') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('مرا به خاطر بسپار') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('تصویر امنیتی') }}</label>

                            <div class="col-md-6">
                                {!! htmlFormSnippet() !!}

                                @error('recaptcha')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('رمز عبور خود را فراموش کرده اید؟') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <small style="font-family: 'Courier New';font-size: 20px ;color: red; ">گزینه ورود با حساب گوگل فقط مختص دانش آموزان میباشد لذا دبیران گرامی از این گزینه استفاده نکنند تا بتوانند ب پنل خود وارد شوند</small>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <a class="btn btn-block btn-social btn-google" href="{{ url('/login/google') }}">
                                            <span class="fa fa-google"></span>ورود با گوگل
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>

                <div class="card-footer">
                    @if(count($errors)>0)
                        @foreach($errors->all() as $error)
                            <h4 class="alert alert-info" >{{$error}}</h4>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
