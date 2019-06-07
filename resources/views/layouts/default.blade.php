<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
           @include('layouts.partials.head')
    </head>
    <body>

        @include('layouts.partials.loading')

        @include('layouts.partials.navbar')

        @yield('content')

        @include('layouts.partials.footer')

        @include('layouts.partials.footer-scripts')

    </body>
</html>
