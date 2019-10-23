@extends('layouts.menu.master')

@section('nav')
<div class="container navigation">

            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>

            </div>
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
                <li class="active"><a href="{{ url('/') }}">Home</a></li>


				<li><a href="#">Free Source Codes</a></li>
                <li><a href="{{ url('project') }}">Project topics</a></li>
                <li><a href="{{ url('project') }}">Project Materials</a></li>
                <li><a href="{{ url('project') }}">Hire A Writer</a></li>
                <li><a href="{{ url('project') }}">Download</a></li>
                <li><a href="{{ url('project') }}">Campus Rep</a></li>




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

@endsection
