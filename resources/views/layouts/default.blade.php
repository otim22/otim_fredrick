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

        <script  href="{{ asset('/js/app.js') }}"></script>
    </body>
</html>
