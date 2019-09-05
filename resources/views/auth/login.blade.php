<div class="account-popup-area signin-popup-box">
    <div class="account-popup">
        <span class="close-popup"><i class="fa fa-close"></i></span>
        <h3>User Login</h3>
        <span>Click To Login With Demo User</span>
        <div class="select-user">
            <span>Candidate</span>
            <span>Employer</span>
        </div>
        <form method="POST" action="{{ route('login') }}">
         @csrf
            <div class="cfield">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <i class="fa fa-user"></i>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <div class="cfield">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                <i class="fa fa-key"></i>
                 @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
            <p class="remember-label">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><label class="form-check-label" for="remember">Remember me</label>
            </p>
            <a href="#" title="">Forgot Password?</a>
            <button type="submit">Login</button>
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