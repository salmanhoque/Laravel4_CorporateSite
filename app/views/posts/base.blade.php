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

        <link rel='stylesheet' href='/styles/css/bootstrap.css'/>
		<link rel='stylesheet' href='/styles/css/bootstrap-responsive.css'/>
		<link rel='stylesheet' href='/styles/css/mycss/stylesheets/screen.css'/>
        <script src="/styles/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>

    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser.
             Please <a href="http://browsehappy.com/">upgrade your browser</a> or 
             <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> 
             to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        

        <div class='navbar navbar-inverse navbar-fixed-top'>
			<div class='navbar-inner'>
				<div class='container'>
					<a class='brand' href='#'>Corporate Site With CMS</a>
				</div><!--container-->	
			</div><!--/navbar-inner-->	
		</div><!--/navbar-->
		
		<div class="page-header admin-banner">
			<div class='offset1'>
		  		<h2>AdminPanel</h2>
		  	</div>
		</div>

		<div class='row section'>

			<div class='span3 admin-nav'>
				<ul class='nav nav-tabs nav-stacked'>
					<li><a href='{{ URL::action('PostsController@index') }}'>Admin Home</a> </li>
					<li><a href='{{ URL::action('PostsController@create') }}'>Create Post</a> </li>
					<li><a href='{{ URL::action('AssetsController@index') }}'>File Upload</a> </li>
					<li><a href='{{ URL::action('AdminsController@logOut') }}'>LogOut</a> </li>
				<ul>
			</div>

			<div class='span9 well text-justify'>
				@if (Session::has('msg'))
				    <div id="flash_error">{{ Session::get('msg') }}</div>
				@endif
					
				@yield('content')
			</div>
		</div><!--main body container-->


		<div class="page-header">
		  	<h3 class='text-center'><em>Simplest CMS Site<small> 
		  		created by <a href='http://www.salmanhoque.com'>
		  		Salman</a></small></em></h3>
		</div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="/styles/js/bootstrap.min.js"></script>
        <script src="/styles/js/plugins.js"></script>
        <script src="/styles/js/main.js"></script>
        <script src="/ckeditor/ckeditor.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<!--         <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script> -->
    </body>
</html>
