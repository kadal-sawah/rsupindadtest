<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @isset($doctitle)
        {{$doctitle}} || PTM RSU PINDAD
        @else
        RSU PINDAD BANDUNG
        @endisset
    </title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
    <script src="//cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body>

    {{$slot}}

    @include('sweetalert::alert')

</body>
</html>