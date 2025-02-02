<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--CSS Plugins-->
    <link rel="stylesheet" href="assets/css/plugin.css">
    <!-- Default CSS-->
    <link rel="stylesheet" href="assets/css/default.css">
    <!--Custom CSS-->
    <link rel="stylesheet" href="assets/css/styles.css">


    <!--FontAwesome CSS-->
    <link rel="stylesheet" href="icons/font-awesome.min.css">
</head>

<body>
    {{ $slot }}

    <!--Bacl-to-top Button start-->
    <div id="back-to-top">
        <a href="#" class="bg-pink position-relative align-items-center rounded-circle d-block"></a>
    </div>
    <!--Bacl-to-top Button end-->


    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/custom-nav.js"></script>
    <script src="assets/js/plugin.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>