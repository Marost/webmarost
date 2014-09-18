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

                    <p><strong>Somos una empresa dedicada al rubro de la Informática.</strong></p>
                    <br />

                    <p>Contamos con un personal que busca un desarrollo integral tanto empresarial como personal.</p>

                    <p>Trataremos de satisfacer la necesidad de publicidad, calidad en la administración, operatividad  y la adquisición de conocimientos informáticos  de los Clientes y/o Empresas. Todo ello permitirá como consecuencia mayor productividad para su empresa o institución.</p>
                    <p>Nuestros servicios van dirigidos a Medianas y Grandes Empresas que busquen publicidad, contando con nuestros servicios de calidad y modernidad en el diseño de Páginas Web, las cuales son adecuadas al medio competitivo actual. Nuestro servicio  también va dirigido a Personas Naturales que buscan obtener promoción o reconocimiento de alguna entidad o simplemente darse a conocer con una página personal, la cual será adaptada al gusto y preferencia del cliente.</p>

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
