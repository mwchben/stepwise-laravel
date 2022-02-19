<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href={{ asset('css/bootstrap.min.css') }} rel="stylesheet">
    <title>{{ config('app.name', 'Quotes') }}</title>
</head>

<body>
    @include('include.navbar')
    @include('include.br')
    <div class="container">
    @include('include.messages')
    @yield('content')
    </div>
    @include('include.br')
    @include('include.footer')
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>