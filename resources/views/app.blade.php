<!DOCTYPE HTML>
<html>

<head>
	<title>Portal E-Bandung</title>
	<!-- Bootstrap -->
	<link href="{{ asset('/css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
	<link href="{{ asset('/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	 <!--[if lt IE 9]>
	     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<!--  webfonts  -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	<!-- // webfonts  -->
	<link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
	<!-- start plugins -->
	<script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/bootstrap.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
</head>

<body>
	<div class="header_bg"><!-- start header -->
		<div class="container">
			<div class="row header">
			<nav class="navbar" role="navigation">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="/home"><img src="{{ asset('/images/pemkot.png') }}" alt="" class="img-responsive" style="width:100px;"/> </a>
			    </div>
			    <h1 class="md-col4">Selamat Datang di Portal Aplikasi Bandung</h1>
			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="menu nav navbar-nav navbar-right">
			      	@if (Auth::guest())
			        	<li id="homepageLink"> <a href="/home">Home</a></li>
			        	<li id="loginLink"> <a href="./login">Login</a></li>
			        @else
			        	<li id="logoutLink"> <a href="{{ url('/auth/logout') }}">Logout</a></li>
			        @endif
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
			</div>
			<ol class="breadcrumb">
			</ol>
		</div>
	</div>

	<div class="main">
	<!-- start main -->
		@yield('content')
	</div>

	<div class="footer_bg"><!-- start footre -->
		<div class="container">
			<div class="row  footer">
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

	<div class="footer_btm"><!-- start footer_btm -->
		<div class="container">
			<div class="row  footer1">
				<div class="col-md-5">
					<div class="soc_icons">
						<ul class="list-unstyled">
							<div class="clearfix"></div>
						</ul>	
					</div>
				</div>
				<div class="col-md-7 copy">
					<p class="link text-right"><span>&#169; e-UKMI-Bandung | Dinas Perindustrian dan Perdagangan </span></p>
				</div>
			</div>
		</div>
	</div>
</body>

</html>