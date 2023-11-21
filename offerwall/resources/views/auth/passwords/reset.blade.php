@extends('layouts.app')
@section('title')
{{ __('RESET PASS') }}
@endsection

@section('content')
<div class="block login-modal pt-[120px] pb-[50px] lg:pb-[112px] lg:pt-[150px] sign-modal px-[20px]">
    <div>
        <div class="modal-dialog modal-dialog-centered border-[0.5px] border-[#8BE78B] backdrop-blur rounded-xl mb-8 blurred_back p-[22px] pointer-events-auto w-full mx-auto">
            <div class="w-full flex justify-evenly flex-col items-center light_ellipse w-full h-full bg-[#131313] rounded-[17px] gap-[20px] p-[22px]">
                <div class="w-full">
                    <div class="header-area">
                        <h4 class="title text-center">{{ __('Reset Password') }}</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="form-group">
                                <label for="email">{{ __('Email Address') }}</label>

                                <input id="email" type="email" placeholder="Enter Email Address" class="form-control input-field  @error('email') is-invalid @enderror placeholder:text-[#939393]" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>

                                <input id="password" type="password" placeholder="Enter Password" class="form-control input-field @error('password') is-invalid @enderror placeholder:text-[#939393]" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>

                                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control input-field placeholder:text-[#939393]" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="w-full flex justify-center pt-[20px]">
                                <div class="w-full flex justify-center items-center flex-col">
                                    <button type="submit" class="mybtn1 w-full">
                                        {{ __('Reset Password') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection