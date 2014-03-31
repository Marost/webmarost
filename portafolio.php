<?php
require_once("panel@marost/conexion/conexion.php");
require_once("panel@marost/conexion/funciones.php");

//PORTAFOLIO
$rst_porta=mysql_query("SELECT * FROM mrt_portafolio WHERE publicar=1 ORDER BY titulo ASC; ", $conexion);
?>
<!DOCTYPE html>
<html lang="es">
<head>

    <title>Portafolio | <?php echo $web_nombre." | ".$social_palabrasclave; ?></title>
    
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
                        <h1>Portafolio</h1>
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
            <div class="container">
                
                <div class="row">
                    <div id="gallery" class="gallery">

                        <?php while($fila_porta=mysql_fetch_array($rst_porta)){
                                $porta_url=$fila_porta["url"];
                                $porta_titulo=$fila_porta["titulo"];
                                $porta_enlace=$fila_porta["enlace"];
                                $porta_imagen=$fila_porta["imagen"];
                                $porta_imagen_carpeta=$fila_porta["imagen_carpeta"];

                                //URLS
                                $porta_UrlWeb=$web."portafolio/".$porta_url;
                                $porta_UrlImg=$web."imagenes/upload/".$porta_imagen_carpeta."".$porta_imagen;
                        ?>
                        <!-- gallery item -->
                        <div class="span4  item">
                            <div class="picframe">
                                <span class="overlay">
                                    <span class="info-area">
                                        <a class="img-icon-url" href="<?php echo $porta_UrlWeb; ?>"></a>
                                        <a class="img-icon-zoom" href="<?php echo $porta_UrlImg; ?>" data-type="prettyPhoto[gallery]" title=""></a>
                                    </span>
                                    <span class="pf_text">
                                        <span class="project-name"><?php echo $porta_titulo; ?></span>
                                    </span>
                                </span>
                                <img src="<?php echo $porta_UrlImg; ?>" data-original="<?php echo $porta_UrlImg; ?>" alt="" />
                            </div>
                        </div>
                        <!-- close gallery item -->
                        <?php } ?>                        

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