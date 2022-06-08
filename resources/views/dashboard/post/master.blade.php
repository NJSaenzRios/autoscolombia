<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta htto-equiv="X-UA-Compatible" content="ie=edge">
    {{-- link:href --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- scrip:src --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <tittle>Modulo admin</tittle>
</head>

<body>

{{-- .container.section  --}}

@include('dashboard.partials.nav-header-main')

<div class="container">
    @include('dashboard.partials.session-status')
    @yield('contenido')

</div>
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>