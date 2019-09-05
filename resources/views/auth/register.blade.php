<div class="account-popup-area signup-popup-box">
    <div class="account-popup">
        <span class="close-popup"><i class="fa fa-close"></i></span>
        <h3>Sign Up</h3>
        <form method="POST" action="{{ route('register') }}">
           {{ csrf_field() }}
            <div class="cfield">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
                <i class="fa fa-user"></i>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="cfield">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="password" />
                <i class="fa fa-key"></i>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="cfield">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="confirm password" />
                <i class="fa fa-key"></i>
            </div>

            <div class="cfield">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" />
                <i class="fa fa-envelope-o"></i>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
            </div>
            
            <div class="cfield">
                <input type="text" name="phone" value="{{ old('phone') }}" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone Number" required autocomplete="name" autofocus />
                <i class="fa fa-phone"></i>
                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
            </div>
            <button type="submit" class="btn btn-primary">Signup</button>
        </form>
      <!--   <div class="extra-login">
            <span>Or</span>
            <div class="login-social">
                <a class="fb-login" href="#" title=""><i class="fa fa-facebook"></i></a>
                <a class="tw-login" href="#" title=""><i class="fa fa-twitter"></i></a>
            </div>
        </div> -->
    </div>
</div>