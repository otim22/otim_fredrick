@extends('layouts.app')

@section('content')

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                    @csrf

					<span class="login100-form-title p-b-43">
                        {{ __('Sign In') }}
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input id="email" class="input100 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" name="email">
						<span class="focus-input100"></span>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
						<span class="label-input100">{{ __('Email') }}</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input id="password" class="input100  form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password">
						<span class="focus-input100"></span>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
						<span class="label-input100">{{ __('Password') }}</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="remember" type="checkbox" name="remember"  {{ old('remember') ? 'checked' : '' }}>
							<label class="label-checkbox100" for="remember">
								Remember me
							</label>
						</div>

						<div>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							{{ __('Login') }}
						</button>
					</div>

					<div class="text-center p-t-46 p-b-20">
                        Don't have an account?
                        <a class="nav-link" href="{{ route('register') }}">
                            {{ __('Register here') }}
                        </a><br />

                        <div class="login100-form-social flex-c-m mt-4">
    						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
    							<i class="fa fa-facebook-f" aria-hidden="true"></i>
    						</a>

    						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
    							<i class="fa fa-twitter" aria-hidden="true"></i>
    						</a>
    					</div>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('./admin/images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>

@endsection
