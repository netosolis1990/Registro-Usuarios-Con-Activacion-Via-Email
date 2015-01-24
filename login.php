<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Registro Con Confirmacion Via Email</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/app.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<!-- JavaScript includes -->
		<script src="js/ipresenter.packed.js"></script>
		<script>
			$(document).ready(function(){
				$('#ipresenter').iPresenter({
					timerPadding: -1,
					controlNav: true,
					controlNavThumbs: true,
					controlNavNextPrev: false
				});
			});
		</script>
			    <script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
</head>
<body>
	<!-- header-section-starts -->
	<div class="user-desc">
		<div class="container">
			<ul>
				<li><a href="http://netosolis.com">NetoSolis</a></li>
			</ul>
		</div>
		</div>
		<div class="header">
		<div class="header-top">
			<div class="container">
				<div class="logo">
					<a href="http://netosolis.com"><img src="images/s3.png" alt="" /></a>
				</div>
				<div class="top-menu">
				<span class="menu"> </span>
					<ul class="cl-effect-15">
						<li><a href="index.html" data-hover="Registro">Registro</a></li>
						<li><a href="login.php" data-hover="Login">Login</a></li>
					</ul>
				</div>
				<!--script-nav-->
				<script>
				$("span.menu").click(function(){
				$(".top-menu ul").slideToggle("slow" , function(){
				});
				});
				</script>
				<!--script-nav-->
				<div class="clearfix"></div>
			</div>
		</div>
		</div>
<!-- header-section-ends -->
<!-- content-section-starts -->
	<div class="container">
	  <div class="main">
	 	 <div class="contact">
				  <div class="contact-form">
			 	  	 	<h2>Login</h2>
			 	 	    <form id="login">
						    <div>
						    	<span><label>E-mail</label></span>
						    	<span><input name="email" id="email" type="email" class="textbox" required></span>
						    </div>
						    <div>
						     	<span><label>Contraseña</label></span>
						    	<span><input name="password" id="password" type="password" class="textbox" required></span>
						    </div>
						   <div>
						   		<input type="hidden" name="login">
						   		<span><input type="submit" class="" value="Registrarme"></span>
						  </div>
					    </form>
				    </div>
  				<div class="clearfix"></div>
  				<div id="mensajes">
  					<?php
  						if(isset($_GET['msg'])){
  							echo '<div class="alert alert-success" role="alert">'.$_GET['msg'].'</div>';
  						}
  					?>
  				</div>

			  </div>
		</div>
</div>
</div>
</div>
   
	<!-- footer-section-starts -->
	<div class="footer navbar-fixed-bottom">
		<div class="container">
			<div class="col-md-6 copy-rights">
				<p>&copy; 2015 Template by <a href="http://w3layouts.com" target="target_blank">W3layouts</a></p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- footer-section-ends -->
</body>
</html>