<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog | @yield('title')</title>
    <!-- {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}} -->

        <link href="{{ asset('assets/bootstrap_v_5_2_3/main.css') }}" rel="stylesheet"
       crossorigin="anonymous">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <!-- <link rel="stylesheet" href="{{ asset('assets/fontawesome_v_6_4_0/main.css') }}" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
</head>

<body class="bg-light">

    <div class="container" id="app">

        @include("layouts.navbar")
        @yield('content')
    </div>

    <!-- {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script> --}} -->

    <script src="{{ asset('assets/bootstrap_v_5_2_3/main.js') }}"
       crossorigin="anonymous">
    </script>
     @vite('resources/js/app.js')
</body>

</html>
