<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Pak Tani Digital</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('front/vendors/mdi/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front/vendors/aos/dist/aos.css/aos.css') }}" />

    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="{{ asset('front/images/logo.png') }}" />

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <!-- endinject -->

</head>

<body>
    <div class="container-scroller">
        <div class="main-panel">
            @include('front.includes._navbar')
            @yield('content')
            @include('front.includes._footer')
        </div>
    </div>

    @include('front.includes.js')

</body>

</html>
