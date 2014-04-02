<?php
require_once("panel@marost/conexion/conexion.php");
require_once("panel@marost/conexion/funciones.php");

//VARIABLES DE URL
$ReqUrl=$_REQUEST["url"];

//PORTAFOLIO
$rst_porta=mysql_query("SELECT * FROM mrt_portafolio WHERE url='$ReqUrl'; ", $conexion);
$fila_porta=mysql_fetch_array($rst_porta);

//VARIABLES
$porta_url=$fila_porta["url"];
$porta_titulo=$fila_porta["titulo"];
$porta_contenido=$fila_porta["contenido"];
$porta_enlace=$fila_porta["enlace"];
$porta_imagen=$fila_porta["imagen"];
$porta_imagen_carpeta=$fila_porta["imagen_carpeta"];

//URLS
$porta_UrlImg=$web."imagenes/upload/".$porta_imagen_carpeta."".$porta_imagen;

?>
<!DOCTYPE html>
<html lang="es">
<head>
    
    <title>Portafolio: <?php echo $porta_titulo; ?> | <?php echo $web_nombre." | ".$social_palabrasclave; ?></title>

    <?php require_once("wg-header-script.php"); ?>

</head>

<body>
    <div id="wrapper">

        <!-- header begin -->
        <?php require_once("wg-header.php"); ?>
        <!-- header close -->

        <!-- subheader begin -->
        <div id="subheader">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <h1><?php echo $porta_titulo; ?></h1>
                        <ul class="crumb">
                            <li><a href="/">Inicio</a></li>
                            <li class="sep">/</li>
                            <li>Portafolio</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- subheader close -->

        <!-- content begin -->
        <div id="content">
            <div class="container project-view">
                <div class="row">
                	<div class="span8">
                    	<div class="post-image">
                                    <div class="callbacks_container">
                                        <ul class="rslides pic_slider">
                                            <li>
                                       	    	<img src="<?php echo $porta_UrlImg; ?>" > 
                                            </li>
                                        </ul>
                                    </div>
                      </div>
                    </div>
                    
                    <div class="span4">
                    	<h4>Project Description</h4>
                        <?php echo $porta_contenido; ?> 
						<br/><br/>
                        <button href="<?php echo $porta_enlace; ?>" class="btn btn-primary">URL de proyecto</button>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <!-- content close -->

        <!-- footer begin -->
        <?php require_once("wg-footer.php"); ?>
        <!-- footer close -->

    </div>

<?php require_once("wg-footer-script.php"); ?>  

</body>
</html>
