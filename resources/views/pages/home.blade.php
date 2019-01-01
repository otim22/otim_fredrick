@extends('layouts.default')

<!-- @section('title', 'section-home') -->

@section('content')

<header class="header">
    @include('includes.header')
</header>

<section class="section-home">
    <div class="row">
        <div class="col-1-of-2">
            col 1 of 2
        </div>
        <div class="col-1-of-2">
            col 2 of 2
        </div>
    </div>

    <div class="row">
        <div class="col-1-of-4">
            <div class="content">
                <h1>Heading</h1>
                <p>
                    Lorem ipsum dolor sit amet, an his etiam torquatos.
                    Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur.
                    Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.
                    Id qui nemore latine molestiae, ad mutat oblique delicatissimi pro.
                </p>
                <button class="btn">Love</button>
            </div>
        </div>
        <div class="col-1-of-4">
            <div class="content">
                <h1>Heading</h1>
                <p>
                    Lorem ipsum dolor sit amet, an his etiam torquatos.
                    Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur.
                    Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.
                    Id qui nemore latine molestiae, ad mutat oblique delicatissimi pro.
                </p>
                <button class="btn">Love</button>
            </div>
        </div>
        <div class="col-1-of-4">
            <div class="content">
                <h1>Heading</h1>
                <p>
                    Lorem ipsum dolor sit amet, an his etiam torquatos.
                    Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur.
                    Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.
                    Id qui nemore latine molestiae, ad mutat oblique delicatissimi pro.
                </p>
                <button class="btn">Love</button>
            </div>
        </div>
        <div class="col-1-of-4">
            <div class="content">
                <h1>Heading</h1>
                <p>
                    Lorem ipsum dolor sit amet, an his etiam torquatos.
                    Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur.
                    Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.
                    Id qui nemore latine molestiae, ad mutat oblique delicatissimi pro.
                </p>
                <button class="btn">Love</button>
            </div>
        </div>
    </div>

    <div class="subcription">
        <div class="row subcription__row">
            <h1 class="heading-3 mb-sm">Stay tune for updates</h1>
            <h1 class="heading-5 mb-lg">Only thoughtful and inspiring emails.</h1>
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
