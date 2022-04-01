<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">

    <!--favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="fav/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{ config('app.name', 'Qoutes') }}</title>
    

    <!-- Scripts (down b4 closing body tag)-->
    {{--prefer this <script src="{{ asset('js/app.js') }}" defer></script> --}}
    {{--done by putting the js and css folders in public folder--}}
    {{-- <script src="{{ asset('js/bootstrap.min.js') }}"></script> --}}
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{--prefer this <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    {{-- <link href={{ asset('css/bootstrap.min.css') }} rel="stylesheet"> --}}

    {{--icons--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />  
    
    
    
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>
</html>


{{-- website colors are #0A0 and #DFA--}}