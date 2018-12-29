<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
           @include('includes.head')
    </head>
    <body>

        <navbar class="navigation">
            @include('includes.navbar')
        </navbar>

        <header class="header">
            @include('includes.header')
        </header>

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
    </body>
</html>
