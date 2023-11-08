@extends('layouts.app')
@section('title')
{{ __('CONFIRM PASS') }}
@endsection

@section('content')
<div class="login-modal pb-5 pt-[120px] pb-[50px] lg:pb-[112px] lg:pt-[150px] sign-modal">
    <div>
        <div class="container px-[20px]">
            <div class="modal-dialog modal-dialog-centered border-[0.5px] border-[#8BE78B] backdrop-blur rounded-xl mb-8 blurred_back p-[22px] pointer-events-auto w-full mx-auto">
                <div class="w-full flex justify-evenly flex-col items-center light_ellipse w-full h-full bg-[#131313] rounded-[17px] gap-[20px] p-[22px]">
                    <div>
                        <div class="header-area">
                            <h4 class="title text-center">{{ __('Confirm Password') }}</h4>
                            <p class="text-base text-[#939393] text-center"> {{ __('Please confirm your password before continuing.') }}</p>
                        </div>

                        <div class="card-body px-0">

                            <form method="POST" action="{{ route('password.confirm') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="form-group">
                                    <label for="password">{{ __('Password') }}</label>

                                    <input id="password" type="password" class="form-control input-field @error('password') is-invalid @enderror placeholder:text-[#939393] " placeholder="Password" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="w-full flex justify-center pt-[20px]">
                                    <div class="w-full flex justify-center items-center flex-col">
                                        <button type="submit" class="mybtn1 w-full">
                                            {{ __('Confirm Password') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                        <a class="btn text-[#8BE78B] mx-auto mt-2 self-end w-max text-decoration-underline underline-offset-4 text-xs sm:text-sm leading-[22px] hover:text-[#035c3c]" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
