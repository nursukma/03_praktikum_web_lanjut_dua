<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <title>Stone Responsive Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/normalize.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/templatemo-style.css')}}">
    <script src="{{asset('js/vendor/modernizr-2.6.2.min.js')}}"></script>
</head>
<body  class="loading">
    <!-- Header -->
    @section('header')
        @include('header')
    @endsection
    
    <!-- Content -->
    @yield('content')
    
    <!-- Footer -->
    @section('footer')
        @include('footer')
    @endsection
    <script src="{{asset('js/vendor/jquery-1.10.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>    
</body>
</html>