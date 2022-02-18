<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body>
    @include('include.navbar')
    @include('include.br')
    <div class="container">
    @yield('content')
    </div>
    @include('include.br')
    @include('include.footer')
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>