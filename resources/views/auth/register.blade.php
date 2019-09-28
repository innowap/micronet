<!DOCTYPE html>
<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register | CoreUI | InfyOm Laravel Generator</title>
    <meta name="description" content="CoreUI Template - InfyOm Laravel Generator">


    <meta name="keyword" content="CoreUI,Bootstrap,Admin,Template,InfyOm,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">

    <!-- Theme style -->
    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://unpkg.com/@coreui/icons/css/coreui-icons.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.3.0/css/flag-icon.min.css">


 @include('layouts.styles')
<style>
        .errors{
            color: red;
            font-size:14px;


        }

    </style>
</head>
<body class="page-top" data-spy="scroll" data-target=".navbar-custom">

    <div id="wrapper">
        @include('layouts.home_menu')

         <section id="intro" class="intro ">
            <div class="intro-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-lg-12">
						<div class="form-wrapper">
						<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">

							<div class="panel panel-skin">
							<div class="panel-heading">
									<h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> Register <small>(It's free!)</small></h3>
									</div>
									<div class="panel-body">
                                    <form role="form" class="lead" method="post" action="{{ url('/register') }}">
                                         {!! csrf_field() !!}
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-6">
												<div class="form-group">
													<label>Full Name</label>
                                                        <input type="text" class="form-control input-md
                                                        {{ $errors->has('name')?'is-invalid':'' }}" name="name" value="{{ old('name') }}"
                                                        placeholder="Full Name">
                                                    @if ($errors->has('name'))
                                                        <span class="invalid-feedback">
                                                            <strong class="text-muted errors">{{ $errors->first('name') }}</strong>
                                                        </span>
                                                    @endif
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-6">

												<div class="form-group">
													<label>Email</label>
													<input type="email" class="form-control {{ $errors->has('email')?'is-invalid':'' }}" name="email" value="{{ old('email') }}" placeholder="Email">
                                                        @if ($errors->has('email'))
                                                            <span class="invalid-feedback">
                                                                <strong class="text-muted errors">{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-6">
                                                <div class="form-group">
													<label>Password</label>
												<input type="password" class="form-control {{ $errors->has('password')?'is-invalid':''}}" name="password" placeholder="Password">
                                                    @if ($errors->has('password'))
                                                        <span class="invalid-feedback">
                                                            <strong class="text-muted errors">{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
												</div>
												</div>

											<div class="col-xs-12 col-sm-12 col-md-6">
												<div class="form-group">
													<label>Confirm Password</label>
													<input type="password" name="password_confirmation" class="form-control"
                                                            placeholder="Confirm password">
                                                        @if ($errors->has('password_confirmation'))
                                                            <span class="help-block">
                                                            <strong class="text-muted errors">{{ $errors->first('password_confirmation') }}</strong>
                                                        </span>
                                                        @endif
												</div>
											</div>
										</div>

										<input type="submit" value="Submit" class="btn btn-skin btn-block btn-lg">
                                        <a href="{{ url('/login') }}" class="text-center">I already have a membership</a>

									</form>
								</div>
							</div>

						</div>
						</div>
					</div>
                        </div>
                    </div>
                </div>
            </div>
         </section>


</div>

@include('layouts.scripts')

<!-- CoreUI and necessary plugins-->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.4.0/perfect-scrollbar.js"></script>


</body>
</html>
