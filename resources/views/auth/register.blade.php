@extends('frontpanel.layout')
@section('content')
<div class="account-popup-area signup-popup-box">
    <div class="account-popup">
        <span class="close-popup"><i class="fa fa-close"></i></span>
        <h3>Sign Up</h3>
        <div class="select-user">
            <span>Candidate</span>
            <span>Employer</span>
        </div>
        <form>
            <div class="cfield">
                <input type="text" placeholder="Username" />
                <i class="fa fa-user"></i>
            </div>
            <div class="cfield">
                <input type="password" placeholder="********" />
                <i class="fa fa-key"></i>
            </div>
            <div class="cfield">
                <input type="text" placeholder="Email" />
                <i class="fa fa-envelope-o"></i>
            </div>
            
            <div class="cfield">
                <input type="text" placeholder="Phone Number" />
                <i class="fa fa-phone"></i>
            </div>
            <button type="submit">Signup</button>
        </form>
        <div class="extra-login">
            <span>Or</span>
            <div class="login-social">
                <a class="fb-login" href="#" title=""><i class="fa fa-facebook"></i></a>
                <a class="tw-login" href="#" title=""><i class="fa fa-twitter"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection