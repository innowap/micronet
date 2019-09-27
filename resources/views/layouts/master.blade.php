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
   @include('layouts.styles')


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <div id="wrapper">

        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="top-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                        <p class="bold text-left">Monday - Saturday, 8am to 10pm </p>
                        </div>
                        <div class="col-sm-6 col-md-6">
                        <p class="bold text-right">Call us now +62 008 65 001</p>
                        </div>
                    </div>
                </div>
            </div>
        <div class="container navigation">

            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="img/logo.png" alt="" width="150" height="40" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="#intro">Home</a></li>
				<li><a href="#service">Service</a></li>
				<li><a href="#doctor">Doctors</a></li>
				<li><a href="#facilities">Facilities</a></li>
				<li><a href="#pricing">Pricing</a></li>
				<li><a href="{{ route('login') }}">Login</a></li>

			  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    @yield('content')


<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	@include('layouts.scripts')


</body>

</html>
