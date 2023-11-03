@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1>here</h1>
            </div>
        </div>
    </div>
</div>
<!-- SignIn Area Start -->
<div class="modal fade login-modal sign-in" id="signin" tabindex="-1" role="dialog" aria-labelledby="signin"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered " role="document">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                aria-hidden="true">&times;</span></button>
        <div class="modal-body">
            <div class="logo-area">
                <img class="logo" src="assets/images/logo.png" alt="">
            </div>
            <div class="header-area">
                <h4 class="title">Great to have you back!</h4>
                <p class="sub-title">Enter your details below.</p>
            </div>
            <div class="form-area">
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="input-name">Name*</label>
                        <input type="text" class="input-field" id="input-name" placeholder="Enter your Name">
                    </div>
                    <div class="form-group">
                        <label for="input-email">Email*</label>
                        <input type="email" class="input-field" id="input-email" placeholder="Enter your Email">
                    </div>
                    <div class="form-group">
                        <label for="input-password">Password*</label>
                        <input type="password" class="input-field" id="input-password"
                            placeholder="Enter your password">
                    </div>
                    <div class="form-group">
                        <label for="input-con-password">confirm password**</label>
                        <input type="password" class="input-field" id="input-con-password"
                            placeholder="Enter your Confirm Password">
                    </div>
                    <div class="form-group">
                        <select>
                            <option value="0">BTC</option>
                            <option value="1">USD</option>
                            <option value="2">EUR</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="check-group">
                            <input type="checkbox" class="check-box-field" id="input-terms" checked>
                            <label for="input-terms">
                                I agree with <a href="#">terms and Conditions</a> and <a href="#">privacy
                                    policy</a>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="mybtn1">Take Bonus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- SignIn Area End -->
@endsection
