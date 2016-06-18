<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>@yield('title')</title>
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <link rel="stylesheet" href="{{ asset('assets/stylesheets/bootstrap.min.css') }}">

	    <link rel="stylesheet" href="{{ asset('assets/stylesheets/modern-business.css') }}">

	    <link rel="stylesheet" type="text/css" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}">

	    <script type="text/javascript" src="{{ asset('assets/js/MooTools-More-1.6.0-compressed.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/MooTools-Core-1.6.0.js') }}"></script>  

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	</head>

	<body>
		<!-- Navigation -->
	    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	        <div class="container">
	            <!-- Brand and toggle get grouped for better mobile display -->
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a class="navbar-brand" href="{{ url ('/') }}"><img src="/img/logo-new.png" alt="Groceries To-Go" style="margin-top: -12px;height: 46px;" /></a>
	            </div>
	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                <ul class="nav navbar-nav navbar-right">
	                	<li>
	                        <a href="{{ url ('/') }}">Home</a>
	                    </li>
	                    <li>
	                        <a href="{{ url ('shop') }}">Shop</a>
	                    </li>
	                    <!--<li>
	                        <a href="services.html">Sale</a>
	                    </li>-->
	                    <li>
	                        <a href="packages.html">Packages</a>
	                    </li>
	                    <li>
	                        <a href="{{ url ('aboutus') }}">About Us</a>
	                    </li>
	                    <li>
	                        <a href="{{ url ('contactus') }}">Contact Us</a>
	                    </li>
	                    <!--<li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
	                        <ul class="dropdown-menu">
	                            <li>
	                                <a href="portfolio-1-col.html">1 Column Portfolio</a>
	                            </li>
	                            <li>
	                                <a href="portfolio-2-col.html">2 Column Portfolio</a>
	                            </li>
	                            <li>
	                                <a href="portfolio-3-col.html">3 Column Portfolio</a>
	                            </li>
	                            <li>
	                                <a href="portfolio-4-col.html">4 Column Portfolio</a>
	                            </li>
	                            <li>
	                                <a href="portfolio-item.html">Single Portfolio Item</a>
	                            </li>
	                        </ul>
	                    </li>
	                    <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
	                        <ul class="dropdown-menu">
	                            <li>
	                                <a href="blog-home-1.html">Blog Home 1</a>
	                            </li>
	                            <li>
	                                <a href="blog-home-2.html">Blog Home 2</a>
	                            </li>
	                            <li>
	                                <a href="blog-post.html">Blog Post</a>
	                            </li>
	                        </ul>
	                    </li>
	                    <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
	                        <ul class="dropdown-menu">
	                            <li>
	                                <a href="full-width.html">Full Width Page</a>
	                            </li>
	                            <li>
	                                <a href="sidebar.html">Sidebar Page</a>
	                            </li>
	                            <li>
	                                <a href="faq.html">FAQ</a>
	                            </li>
	                            <li>
	                                <a href="404.html">404</a>
	                            </li>
	                            <li>
	                                <a href="pricing.html">Pricing Table</a>
	                            </li>
	                        </ul>
	                    </li>-->
	                </ul>
	            </div>
                <!--<div class="col-sm-3 col-md-3 pull-right">
			        <form class="navbar-form" role="search">
				        <div class="input-group">
				            <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
				            <div class="input-group-btn">
				                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
				            </div>
				        </div>
			        </form>
		        </div>-->
	            <!-- /.navbar-collapse -->
	        </div>
	        <!-- /.container -->
	    </nav>

	    
            <div class="container">
                @yield('content')
           
            	@yield('scripts')
        
        		@include('layout.footer')
        	</div>
     
         	<script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>
         	<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
         	
        	<script>
			    $('.carousel').carousel({
			        interval: 5000 //changes the speed
			    })
   			</script>



	</body>
</html>