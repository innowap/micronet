
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="top-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                        <p class="bold text-left">Monday - Saturday, 8am to 10pm </p>
                        </div>
                        <div class="col-sm-6 col-md-6">
                        <p class="bold text-right">Call us now +234 706 431 4883 </p>
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
				<li class="active"><a href="{{ url('/') }}">Home</a></li>
				<li><a href="#">Source Codes</a></li>
				<li><a href="#">Projects</a></li>
				<li><a href="#boxes">Service</a></li>
				<li><a href="#doctor">Teams</a></li>
                <li><a href="#facilities">Gallery</a></li>
                <li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      Accounts </a>
				  <ul class="dropdown-menu">

					<li><a  href="{{ route('register') }}">Register</a></li>
					<li><a href="{{ route('login') }}">Login</a></li>

				  </ul>
				</li>

			  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

