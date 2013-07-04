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
        

        <div class='container'>

			<div class='span4 offset4'>
				<div class='well'>
					<h1>Admin Login</h1>
					@if ($errors->has())
						<div class="alert alert-error">
							{{ $errors->first('username', '<p>:message</p>') }}
							{{ $errors->first('password', '<p>:message</p>') }}
						</div>
					@endif	

					@if (Session::has('msg'))
					    <div id="flash_error">{{ Session::get('msg') }}</div>
					@endif

					{{ Form::open(array('url'=>'/admins/login','method'=>'put')) }}

					{{ Form::label('username') }}
					{{ Form::text('username',Input::old('username')) }}

					<br/>

					{{ Form::label('password') }}
					{{ Form::password('password') }}

					<br/>

					{{ Form::submit('Login',array('class'=>'btn btn-primary')) }}
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