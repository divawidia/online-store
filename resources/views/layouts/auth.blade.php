<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    {{-- style --}}
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')
      @vite(['resources/sass/app.scss', 'resources/js/app.js',])
  </head>

  <body>
    {{-- navbar --}}
    @include('includes.navbar-auth')

    <!-- Page Content -->
    @yield('content')


    {{-- footer --}}
    @include('includes.footer')

    <!-- Bootstrap core JavaScript -->
    {{-- script --}}
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')

  </body>
</html>
