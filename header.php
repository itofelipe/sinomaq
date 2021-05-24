<!DOCTYPE html>
<html>
<head>
	  <!-- CSS -->
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/gallery.css">
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">


	  <!-- JQUERY -->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	  <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
  	  <script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
	  <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>



	  <meta charset="UTF-8">	  
	  <meta name="description" content="SinomaQ, Equipamentos para construção">
	  <meta name="keywords" content="compressor de ar,maquinas industriais, maquinas agricolas">
	  <meta name="author" content="Mantis Project">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	  <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png"/>

	   <?php wp_enqueue_script("jquery"); ?>
	   <?php wp_head(); ?>
	   
	  <title>SinomaQ - Equipamentos para construção</title>

</head>

<body>
	<header>
		<div class="nav-top">
			<div class="container">
				<ul class="list-inline">
					<li><a href="tel:413376-2100"><i class="fa fa-phone" aria-hidden="true"></i>41 3376-2100</a></li>
					<li><a href="tel:4199909-4083"><i class="fa fa-mobile" aria-hidden="true"></i>41 99909-4083</a></li>
					<li><a href="tel:4198505-7711"><i class="fa fa-mobile" aria-hidden="true"></i>41 99198-8808</a></li>
				</ul>
			</div>
		</div>
		<!-- Second navbar for profile settings -->
		    <nav class="navbar navbar-inverse">
		      <div class="container">
		        <!-- Brand and toggle get grouped for better mobile display -->
		        <div class="navbar-header">
		          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-4"> 
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          <a class="navbar-brand" href="/"><img src="<?php echo get_template_directory_uri(); ?>images/logo.png"></a>
		        </div>
		    
		        <!-- Collect the nav links, forms, and other content for toggling -->
		        <div class="collapse navbar-collapse col-md-8" id="navbar-collapse-4">
		          <ul class="nav navbar-nav navbar-left">
		            <li><a href="/#inicio">INICIO</a></li>
		            <li><a href="#">MANUTENÇÃO</a></li>
		            <li><a href="/catalogos">CATÁLOGOS</a></li>
		            <li><a href="/#contato">CONTATO</a></li>
		          </ul>
		        </div><!-- /.navbar-collapse -->

				<!-- NUMERO
		        <div class="col-md-5 text-right tel">
		        	<p><i class="fa fa-phone" aria-hidden="true"></i> 41 3375-2100</p></p>
		        </div>
		        -->

		      </div><!-- /.container -->
		    </nav><!-- /.navbar -->
		</div><!-- /.container-fluid -->
	</header>