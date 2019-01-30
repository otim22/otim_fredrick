@extends('layouts.app')

@section('content')

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                    @csrf

					<span class="login100-form-title p-b-43">
						{{ __('Register') }}
					</span>

					<div class="wrap-input100 validate-input">
						<!-- <input class="input100" type="text" name="name"> -->
                        <input id="name" type="text" class="input100 form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                        <span class="focus-input100"></span>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif

						<span class="label-input100">{{ __('Name') }}</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<!-- <input class="input100" type="text" name="email"> -->
                        <input id="email" type="email" class="input100 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                        <span class="focus-input100"></span>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif

						<span class="label-input100">{{ __('E-Mail Address') }}</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<!-- <input class="input100" type="password" name="pass"> -->
                        <input id="password" type="password" class="input100 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
						<span class="focus-input100"></span>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif

						<span class="label-input100">{{ __('Password') }}</span>
					</div>

					<div class="wrap-input100 validate-input">
						<!-- <input class="input100" type="password" name="pass"> -->
                        <input id="password-confirm" type="password" class="input100 form-control" name="password_confirmation" required>
						<span class="focus-input100"></span>
						<span class="label-input100">{{ __('Confirm Password') }}</span>
					</div>

					<div class="container-login100-form-btn mt-4">
						<button type="submit" class="login100-form-btn">
							{{ __('Register') }}
						</button>
					</div>

					<div class="text-center p-t-46 p-b-20">
                        Have already an account?
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login here') }}</a>
					</div>

					<div class="login100-form-social flex-c-m">
						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('./admin/images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>

    @endsection
