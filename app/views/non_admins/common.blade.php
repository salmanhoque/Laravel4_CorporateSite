<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Corporate Site With CMS</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel='stylesheet' href='/assets/css/bootstrap.css'/>
		<link rel='stylesheet' href='/assets/css/bootstrap-responsive.css'/>
		<link rel='stylesheet' href='/assets/css/my-style.css'/>
        <script src="/assets/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>

    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser.
             Please <a href="http://browsehappy.com/">upgrade your browser</a> or 
             <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> 
             to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        

        <div class='navbar navbar-fixed-top'>
			<div class='navbar-inner'>
				<div class='container'>
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><i class='icon-list'></i></a>
					<a class='brand' href='#'>Corporate Site With CMS</a>
					<div class="nav-collapse collapse">
						<ul class='nav pull-right'>
							@foreach ($pageLinks as $pageLink)
								<li>{{ HTML::link('/page/'.$pageLink->slug,$pageLink->title) }}</li>
							@endforeach
						</ul>
					</div><!--/nav=collapse-->			
				</div><!--container-->	
			</div><!--/navbar-inner-->	
		</div><!--/navbar-->


		<div class="hero-unit">
			<div class='container'>
				  <h2>Our Aim</h2>
				  <p>Jujubes chupa chups faworki applicake soufflé ice cream icing gummies. Liquorice apple pie lemon drops wafer chocolate liquorice jelly-o sugar plum. Cotton candy jujubes uitcake gingerbread macaroon marshmallow.
				  	Cotton candy jujubes uitcake gingerbread macaroon marshmallow. gummies. Liquorice apple pie lemon drops wafer chocolate liquorice jelly-o sugar plum. Cotton candy jujub </p>
				  <p>
				    <a class="btn btn-primary btn-large">Learn more</a>
				  </p>
			</div><!--/container-->
		</div>

		<div class='container'>

			<div class='span8 offset2'>
				<div class='well'>
					@yield('content')
				</div>	
			</div>

		</div><!--main body container-->

		<div class="page-header">
		  	<h2 class='text-center'><em>Simplest CMS Site<small> 
		  		created by Salman</small></em></h2>
		</div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/plugins.js"></script>
        <script src="/assets/js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<!--         <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script> -->
    </body>
</html>

