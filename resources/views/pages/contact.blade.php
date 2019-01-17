
@extends('layouts.default')

@section('content')

<section class="section-contact">
    <div class="section-contact">
        <div class="row">
            <div class="col-1-of-2">
				<div class="contact-img">
					<img src="{{ asset('img/img-01.png') }}" alt="Contact Image">
				</div>
            </div>

            <div class="col-1-of-2">
                <div class="contact-form">
                    <form class="contact-form">
                        <span class="contact-form-title">
                            Get in touch
                        </span>

                        <div class="wrap-input validate-input" data-validate = "Name is required">
                            <input class="input-field" type="text" name="name" placeholder="Name">
                            <span class="focus-input"></span>
                            <span class="symbol-input">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input validate-input" data-validate = "Valid email is required: account@example.xyz">
                            <input class="input-field" type="text" name="email" placeholder="Email">
                            <span class="focus-input"></span>
                            <span class="symbol-input">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input validate-input" data-validate = "Message is required">
                            <textarea class="input-field" name="message" placeholder="Message"></textarea>
                            <span class="focus-input"></span>
                        </div>

                        <div class="container-contact-form-btn">
                            <button class="btn contact-form-btn">
                                Send
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@stop
