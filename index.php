<?php
//CONEXION
//require_once("panel@marost/conexion/conexion.php");
//require_once("panel@marost/conexion/funciones.php");

//WIDGETS
$w_jcarousel=true;
$w_rslider=true;

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

<div class="site_wrapper">

    <?php require_once("w-header.php"); ?>

    <div class="clearfix"></div>

    <?php require_once("w-slider.php"); ?>

    <div class="clearfix"></div>

    <?php require_once("w-slider-info.php"); ?>

    <div class="clearfix mar_top4"></div>

    <?php require_once("w-info-web.php"); ?>

    <div class="clearfix mar_top5"></div>

    <?php require_once("w-hosting-incluye.php"); ?>

    <?php require_once("w-clientes-hor.php"); ?>

    <div class="divider_line4"></div>

    <div class="wave_graphs"></div>

    <?php require_once("w-footer.php"); ?>

</div>

<?php require_once("w-footer-script.php"); ?>

</body>
</html>
