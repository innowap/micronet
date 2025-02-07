<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- css -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({
                  google_ad_client: "ca-pub-5579641467854200",
                  enable_page_level_ads: true
             });
        </script>
   @include('layouts.styles')



</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <div id="wrapper">

       @yield('menu')

    @yield('content')


<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	@include('layouts.scripts')


</body>

</html>
