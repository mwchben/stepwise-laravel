<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="fav/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

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
<style>
html,body {
    min-height: 100% !important;
}
 .content {
    min-height: calc(100vh - 60px);
}

.footer-try {
    min-height: 60px;
}	
</style>
<body style="background-color: #DFA">
    @include('include.navbar')
    @include('include.messages')
  
      <div id="app" class="content">
        <main class="py-5 container">
            @yield('content')
        </main>
    </div>

    @include('include.footer')

</body>
</html>


{{-- website colors are #0A0 and #DFA--}}