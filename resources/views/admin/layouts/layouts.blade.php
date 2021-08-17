<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tset web me</title>
    <!-- css -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('css')
</head>
<body>
<!--make project-->
    <section class="container-fluid">
        @yield('content')
    </section>
<!--End make project-->

<!-- js -->
<script src="{{asset('js/app.js')}}"></script>
@yield('js')
</body>
</html>
