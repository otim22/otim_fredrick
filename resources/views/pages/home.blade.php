@extends('layouts.default')

@section('content')

<header class="header">
    @include('includes.header')
</header>

<section class="section-home">
    <div class="quote">
        <div class="row quote__row">
            <p class="heading-3">
                Lorem ipsum dolor sit amet, an his etiam torquatos.
                Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur.
                Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-1-of-2">
            <div class="content mt-lg">
                <img class="otim-circle" src="{{ asset('img/otim.jpg')}}" alt="Image of Otim">
            </div>
        </div>
        <div class="col-1-of-2">
            <div class="content mt-xl">
                <h1 class="heading-3 mb-sm">About Otim</h1>
                <p class="heading-5">
                    Lorem ipsum dolor sit amet, an his etiam torquatos.
                    Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur.
                    Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.
                    Id qui nemore latine molestiae, ad mutat oblique delicatissimi pro.
                </p>
                <br>
                <p class="heading-5">
                    Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.
                    Id qui nemore latine molestiae, ad mutat oblique delicatissimi pro.
                </p>

                <div class="content mt-lg">
                    <div class="about__social">
                       <a target="_blank" href="your_url_here"><i class="fa fa-3x fa-github"></i></a>
                       <a target="_blank" href="your_url_here"><i class="fa fa-3x fa-twitter"></i></a>
                       <a target="_blank" href="your_url_here"><i class="fa fa-3x fa-linkedin"></i></a>
                       <a target="_blank" href="your_url_here"><i class="fa fa-3x fa-medium"></i></a>
                       <a target="_blank" href="your_url_here"><i class="fa fa-3x fa-facebook"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr class="about__divider">

    <div class="row">
        <div class="col-1-of-2">
            <div class="content mt-lg">
                <h1 class="heading-4 mb-sm">Heading</h1>
                <p class="heading-5">
                    Lorem ipsum dolor sit amet, an his etiam torquatos.
                    Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur.
                    Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.
                    Id qui nemore latine molestiae, ad mutat oblique delicatissimi pro.
                </p>
            </div>
        </div>
        <div class="col-1-of-2">
            <div class="content mt-lg">
                <h1 class="heading-4 mb-sm">Heading</h1>
                <p class="heading-5">
                    Lorem ipsum dolor sit amet, an his etiam torquatos.
                    Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur.
                    Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.
                    Id qui nemore latine molestiae, ad mutat oblique delicatissimi pro.
                </p>
            </div>
        </div>
    </div>

    <div class="quote quote__img">
        <div class="row quote__row">
            <p class="heading-3">
                Lorem ipsum dolor sit amet, an his etiam torquatos.
                Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur.
                Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.
            </p>
        </div>
    </div>

    <hr class="quote__divider">

    <div class="subcription">
        <div class="row subcription__row">
            <h1 class="heading-3 mb-sm">Stay tune for updates</h1>
            <h1 class="heading-5 mb-lg">Inspiring and thoughtful emails only.</h1>
            <form action="#" class="subcription__menu">
                <input type="email" class="subcription__menu-input" placeholder="name@example.com">
                <button class="subcription__menu-button">
                    Subcribe
                </button>
            </form>
        </div>
    </div>

</section>

@endsection
