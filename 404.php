<?php
//CONEXION
require_once("panel@marost/conexion/conexion.php");
require_once("panel@marost/conexion/funciones.php");
?>
<!DOCTYPE html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<title><?php echo $web_nombre; ?></title>
	
	<meta charset="utf-8">
	<meta name="keywords" content="" />
	<meta name="description" content="" />

    <?php require_once("w-header-script.php"); ?>

</head>

<body>

<div class="wrapper_boxed">

<div class="site_wrapper">

    <?php require_once("w-header.php"); ?>

<div class="clearfix"></div>
 
<div class="page_title">
	<div class="container">
		<div class="title"><h1>Página no encontrada</h1></div>
        <div class="pagenation">&nbsp;<a href="/">Inicio</a> <i>/</i> Página no encontrada</div>
	</div>
</div><!-- end page title --> 

<div class="clearfix"></div>


<!-- Contant
======================================= -->

<div class="container">

	<div class="content_fullwidth">

	<div class="error_pagenotfound">
    	
        <strong>404</strong>
        <br />
    	<b>Uy ... Página no encontrada!</b>
        
        <em>Lo sentimos la página no pudo ser encontrada aquí.</em>

        <p>Trate de usar el botón de abajo para ir a la página principal del sitio.</p>
        
        <div class="clearfix mar_top3"></div>
    	
        <a href="/" class="but_goback"><i class="fa fa-arrow-circle-left fa-lg"></i>&nbsp; Ir a la Página Principal</a>
        
    </div><!-- end error page notfound -->
        
</div>

</div><!-- end content area -->


    <?php require_once("w-footer-texto.php"); ?>

    <?php require_once("w-footer.php"); ?>
 
</div>
</div>

    <?php require_once("w-footer-script.php"); ?>

</body>
</html>
