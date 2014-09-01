<?php
//CONEXION
require_once("panel@marost/conexion/conexion.php");
require_once("panel@marost/conexion/funciones.php");

//VARIABLES
$w_fancybox=true;
$w_isotope=true;

//PORTAFOLIO
$rst_nota=mysql_query("SELECT * FROM mrt_portafolio WHERE publicar=1 ORDER BY titulo ASC", $conexion);
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
		<div class="title"><h1>Portafolio</h1></div>
        <div class="pagenation">&nbsp;<a href="/">Inicio</a> <i>/</i> Portafolio</div>
	</div>
</div><!-- end page title --> 

<div class="clearfix"></div>


<!-- Contant
======================================= -->

<div class="container">

	<div class="clearfix mar_top7"></div>

	<div class="portfolio_page">
    
		<div class="portfolioFilter">
        
            <a href="#" data-filter="*" class="current">Todo</a>
            <a href="#" data-filter=".hosting">Hosting</a>
            <a href="#" data-filter=".web">Diseño Web</a>
            <a href="#" data-filter=".movil">Diseño Web Movil</a>
        
        </div>

		<div class="clearfix mar_top5"></div>

        <div class="portfolioContainer">

            <?php while($fila_nota=mysql_fetch_array($rst_nota)){
                    $Nota_id=$fila_nota["id"];
                    $Nota_url=$fila_nota["url"];
                    $Nota_titulo=$fila_nota["titulo"];
                    $Nota_imagen=$fila_nota["imagen"];
                    $Nota_imagen_carpeta=$fila_nota["imagen_carpeta"];

                    //URL
                    $Nota_UrlWeb=$web."portafolio/".$Nota_url;
                    $Nota_UrlImg=$web."imagenes/upload/".$Nota_imagen_carpeta."thumb/".$Nota_imagen;
            ?>
            <div class="hosting web movil">
                <a class="fancybox" href="<?php echo $Nota_UrlWeb; ?>"
                   data-fancybox-group="gallery"
                   title="<?php $Nota_titulo; ?>">
                    <div class="imgWrap">
                        <img src="<?php echo $Nota_UrlImg; ?>" alt="" />
                        <p class="imgDescription"><i class="icon-search icon-4x"></i></p>
                        <h3><?php echo $Nota_titulo; ?></h3>
                    </div>
                </a>
            </div>
            <?php } ?>
                          
        </div>
       
	</div>
	
    <div class="clearfix mar_top4"></div>
    
</div><!-- end content area -->


    <?php require_once("w-footer-texto.php"); ?>

    <?php require_once("w-footer.php"); ?>
 
</div>
</div>

<?php require_once("w-footer-script.php"); ?>

</body>
</html>