@extends('layouts.app')
@section('title')
{{ __('LOGIN') }}
@endsection

@section('content')
<!-- Login Area Start -->
<div class="pt-[120px] pb-[50px] lg:pb-[112px] lg:pt-[150px] block login-modal sign-modal px-[20px]" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-body">
                <div class="header-area">
                    <h4 class="title">Great to have you back!</h4>
                    <p class="sub-title">Enter your details below.</p>
                </div>
                <div class="form-area">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="login-input-email">Email*</label>
                            <input id="login-input-emaill" type="email" placeholder="Enter your Email" class="form-control input-field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="login-input-password">Password*</label>
                            <input id="login-input-password" type="password" class="form-control input-field @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="box">
                                <div class="left">
                                    <input class="form-check-input check-box-field" type="checkbox" name="remember" id="input-save-password" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="input-save-password">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                <div class="right">
                                    @if (Route::has('password.request'))
                                    <a class="btn text-[#8BE78B] self-end w-max text-decoration-underline underline-offset-4 text-xs sm:text-sm leading-[22px] hover:text-[#035c3c]" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="mybtn1">Log In</button>
                        </div>
                    </form>
                </div>
                <div class="form-footer">
                    <p class="text-[#939393]">Not a member?
                        <a class="text-[#8BE78B] self-end w-max text-decoration-underline underline-offset-4 text-xs sm:text-sm leading-[22px] hover:text-[#035c3c]" href="{{ route( 'register' ) }}">Create account</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login Area End -->
@endsection