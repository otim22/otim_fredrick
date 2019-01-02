<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
           @include('includes.head')
    </head>
    <body>

        <navbar class="navigation">
            @include('includes.navbar')
        </navbar>

        <main>
            <section class="section-home">
                @yield('content')
            </section>
        </main>

        <footer class="footer">
            @include('includes.footer')
        </footer>

        <div class="popup">

        </div>

        <script src="{{ asset('/vendor/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/js/app.js') }}" type="text/javascript"></script>
    </body>
</html>
