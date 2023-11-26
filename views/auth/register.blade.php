@extends('layouts.app')
@section('title')
{{ __('REGISTER') }}
@endsection

@section('content')
<div class="pt-[120px] pb-[50px] lg:pb-[112px] lg:pt-[150px] login-modal sign-modal">
    <div class="container">
        <!-- Login Area Start -->
        <div class="block" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="modal-body">
                        <div class="header-area">
                            <h4 class="title">Welcome!</h4>
                            <p class="sub-title">Enter your details below.</p>
                        </div>
                        <div class="form-area">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="name" class="block mb-2 text-sm font-medium text-white">Name *</label>
                                    <input id="name" type="text" placeholder="Enter your Name" class="form-control input-field @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email" class="block mb-2 text-sm font-medium text-white">Email *</label>
                                    <input id="email" type="email" placeholder="Enter your Email" class="form-control input-field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password" class="block mb-2 text-sm font-medium text-white">Password *</label>
                                    <input id="password" type="password" class="form-control input-field @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password-confirm" class="block mb-2 text-sm font-medium text-white">Confirm Password *</label>
                                    <input id="password-confirm" type="password" class="form-control input-field" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="mybtn1">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="form-footer">
                            <p class="text-[#939393]">Already have one?
                                <a class="text-[#8BE78B] self-end w-max text-decoration-underline underline-offset-4 text-xs sm:text-sm leading-[22px] hover:text-[#035c3c]" href="{{ route('login') }}">Log In</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Area End -->
    </div>
    
    </div>
</div>
@endsection