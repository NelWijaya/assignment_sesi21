<!doctype html>
<html lang="en">
@include('partials.head')
    <body>
        @include('partials.navbar')
        <div class="container-fluid">
            @yield('content')

            @include('partials.footer')
        </div>
        @include('partials.script')
    </body>
</html>