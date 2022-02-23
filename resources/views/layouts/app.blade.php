<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{ config('app.name', 'Qoutes') }}</title>
    

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- <script src="{{ asset('js/bootstrap.min.js') }}"></script> --}}
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link href={{ asset('css/bootstrap.min.css') }} rel="stylesheet"> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link href={{ asset('css/bootstrap.min.css') }} rel="stylesheet"> --}}

</head>
<body>
    @include('include.navbar')
    @include('include.messages')
  
      <div id="app">
        <main class="py-5 container">
            @yield('content')
        </main>
    </div>

    @include('include.footer')

</body>
</html>
