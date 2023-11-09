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
        <div class="row justify-content-center login-modal px-[20px]">
            <div class="modal-dialog modal-dialog-centered border-[0.5px] border-[#8BE78B] backdrop-blur rounded-xl mb-8 blurred_back p-[22px] pointer-events-auto w-full">
                <div class="w-full flex justify-evenly flex-col items-center light_ellipse w-full h-full bg-[#131313] rounded-[17px] gap-[20px] p-[22px]">
                    <div class="card-header text-white text-lg sm:text-xl md:text-2xl leading-[34px] font-bold">Register</div>
                    <div class="w-full">
                        <form method="POST" action="{{ route('register') }}" class="w-full">
                            @csrf
                            <div class="flex flex-col">
                                <label for="name" class="block mb-2 text-sm font-medium text-white">{{ __('Name') }}</label>

                                <div>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror reg_input input-field" placeholder="Enter your Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex flex-col">
                                <label for="email" class="block mb-2 text-sm font-medium text-white">{{ __('Email Address') }}</label>

                                <div>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror reg_input input-field" placeholder="Enter your Email" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <label for="password-confirm" class="block mb-2 text-sm font-medium text-white">{{ __('Confirm Password') }}</label>

                                <div>
                                    <input id="password-confirm" type="password" class="form-control reg_input input-field" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="w-full mt-3">
                                <div class="w-full">
                                    <button type="submit" class="mybtn1 w-full">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="px-[20px] flex justify-center">
        <section class="modal-dialog modal-dialog-centered border-[0.5px] border-[#8BE78B] backdrop-blur rounded-xl mb-8 blurred_back p-[22px] pointer-events-auto w-full m-0">
            <div class="w-full flex justify-evenly flex-col items-center light_ellipse w-full h-full bg-[#131313] rounded-[17px] gap-[20px] p-[22px]">
                <form method="POST" action="{{ route('register') }}" class="w-full">
                    @csrf
                    <a href="#" class="flex items-center mb-2 text-lg sm:text-xl md:text-2xl font-semibold text-white justify-center">
                        <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
                        Register
                    </a>
                    <div class="w-full">
                        <div>
                            <h1 class="text-xl font-bold leading-tight tracking-tight text-lg sm:text-xl md:text-2xl text-white mb-4 text-center">
                                Create and account
                            </h1>
                            <form class="space-y-4 md:space-y-6" action="#">
                                <div>
                                    <label for="email" class="block mb-2 text-sm font-medium text-white">Your email</label>
                                    <input type="email" name="email" id="email" class="form-control reg_input input-field" placeholder="name@company.com" value="{{ old('email') }}" required autocomplete="email" />
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div>
                                    <label for="password" class="block mb-2 text-sm font-medium text-white">Password</label>
                                    <input type="password" name="password" id="password" placeholder="••••••••" class="form-control reg_input input-field" required="">
                                </div>
                                <div>
                                    <label for="confirm-password" class="block mb-2 text-sm font-medium text-white">Confirm
                                        password</label>
                                    <input type="confirm-password" name="confirm-password" id="confirm-password" placeholder="••••••••" class="form-control reg_input input-field" required="">
                                </div>
                                <div class="flex items-start mt-3">
                                    <div class="flex items-center h-5">
                                        <input id="terms" aria-describedby="terms" type="checkbox" class="form-check-input check-box-field" required="">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="terms">I accept the
                                            <a class="text-[#8BE78B] self-end w-max text-decoration-underline underline-offset-4 text-xs sm:text-sm leading-[22px] hover:text-[#035c3c]" href="#">Terms and Conditions</a></label>
                                    </div>
                                </div>
                                <button type="submit" class="mybtn1 w-full my-[20px] p-0">Create
                                    an account</button>
                                <p class="text-sm text-[#939393]">
                                    Already have an account? <a href="#" class="text-[#8BE78B] self-end w-max text-decoration-underline underline-offset-4 text-xs sm:text-sm leading-[22px] hover:text-[#035c3c]">Login
                                        here</a>
                                </p>
                            </form>
                        </div>
                    </div>
            </div>
        </section>
    </div>
</div>
@endsection