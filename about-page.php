<?php
//CONEXION
require_once("panel@marost/conexion/conexion.php");
require_once("panel@marost/conexion/funciones.php");

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

<div class="wrapper_boxed">

    <div class="site_wrapper">
   
        <?php require_once("w-header.php"); ?>

        <div class="clearfix"></div>

        <?php require_once("w-slider.php"); ?>

        <div class="clearfix"></div>

        <div class="page_title">
            <div class="container">
                <div class="title"><h1>Nosotros</h1></div>
                <div class="pagenation">&nbsp;<a href="index.php">Inicio</a> <i>/</i> Nosotros</div>
            </div>
        </div><!-- end page title -->

        <div class="clearfix"></div>

        <!-- Contant
        ======================================= -->

        <div class="container">

            <div class="content_fullwidth">

                <div class="three_fourth">

                    <h2><strong>Quiénes</strong> Somos</h2>

                    <p><strong>Lorem Ipsum which looks reasonable generated prempsum is therefore always free from repetition injected words.</strong></p>
                    <br />
                    <p>Praesent vestibulum molestie lacus. Aenean nony hendrerit mauris. Phasellus porta. Fusce suscipit sociis natoque penatibus et magnis dis parturient montes, nascetur suscipit varius penatibus et magnis dis nascetur ridiculus mus Fusce feugiat malesuada odio. Morbi nunc odio, gravida ate cursus alteration some form montes. Lorem Ipsum available but the majority have suffered alteration in some form, by injected humour, or randomised words which looks desktop publishing packages and web page. </p>

                </div><!-- end section -->

                <div class="one_fourth last">

                    <h2><strong>Qué</strong> Hacemos</h2>

                    <ul class="list2">
                        <li><i class="fa fa-chevron-circle-right"></i> Hosting</li>
                        <li><i class="fa fa-chevron-circle-right"></i> Diseño Web</li>
                        <li><i class="fa fa-chevron-circle-right"></i> Diseño Web Movil</li>
                        <li><i class="fa fa-chevron-circle-right"></i> Reparación de PC</li>
                        <li><i class="fa fa-chevron-circle-right"></i> Reparación de Laptop</li>
                        <li><i class="fa fa-chevron-circle-right"></i> Sistema de Facturación</li>
                        <li><i class="fa fa-chevron-circle-right"></i> Sistema de Almacén</li>
                    </ul>


                </div><!-- end what we do -->

                <div class="clearfix"></div>

            </div>

        </div><!-- end content area -->


        <?php require_once("w-footer-texto.php"); ?>

        <?php require_once("w-footer.php"); ?>
 
    </div>

</div>

<?php require_once("w-footer-script.php"); ?>

</body>
</html>
