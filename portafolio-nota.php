<?php
//CONEXION
require_once("panel@marost/conexion/conexion.php");
require_once("panel@marost/conexion/funciones.php");

//VARIABLES DE URL
$Req_Url=$_REQUEST["url"];

//PORTAFOLIO
$rst_nota=mysql_query("SELECT * FROM mrt_portafolio WHERE url='$Req_Url'", $conexion);
$fila_nota=mysql_fetch_array($rst_nota);

//VARIABLES
$Nota_titulo=$fila_nota["titulo"];
$Nota_contenido=$fila_nota["contenido"];
$Nota_imagen=$fila_nota["imagen"];
$Nota_imagen_carpeta=$fila_nota["imagen_carpeta"];
$Nota_enlace=$fila_nota["enlace"];
$Nota_palabras_clave=$fila_nota["palabras_clave"];
?>
<!DOCTYPE html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="es" class="no-js"> <!--<![endif]-->

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
		<div class="title"><h1><?php echo $Nota_titulo; ?></h1></div>
        <div class="pagenation">&nbsp;<a href="/">Inicio</a> <i>/</i> <a href="portafolio">Portafolio</a> <i>/</i> <?php echo $Nota_titulo; ?></div>
	</div>
</div><!-- end page title --> 

<div class="clearfix"></div>


<!-- Contant
======================================= -->

<div class="container">

	<div class="content_fullwidth">
    
		<div class="portfolio_area">
        	
            <div class="portfolio_area_left">
                <img src="images/project2.jpg" alt="" />
            </div>

            <div class="portfolio_area_right">
            
            	<h3><i>Descripción</i></h3>
                <?php echo $Nota_contenido; ?>

                <div class="project_details">
                    <a href="<?php echo $Nota_enlace; ?>" target="_blank" class="but_goback">
                        <i class="fa fa-hand-o-right fa-lg"></i> Visita la página
                    </a>
                </div>  
                
            </div>
          
		</div><!-- end section -->

	</div>

</div><!-- end content area -->


    <?php require_once("w-footer-texto.php"); ?>

    <?php require_once("w-footer.php"); ?>

</div>
</div>

<?php require_once("w-footer-script.php"); ?>

</body>
</html>
