<?php
require_once("panel@marost/conexion/conexion.php");
require_once("panel@marost/conexion/funciones.php");

//VARIABLES DE URL
$ReqId=$_REQUEST["id"];
$ReqUrl=$_REQUEST["url"];

//NOTICIA
$rst_nota=mysql_query("SELECT * FROM mrt_noticia WHERE id=$ReqId;", $conexion);
$fila_nota=mysql_fetch_array($rst_nota);

//VARIABLES
$nota_titulo=$fila_nota["titulo"];
$nota_contenido=$fila_nota["contenido"];
$nota_imagen=$fila_nota["imagen"];
$nota_imagen_carpeta=$fila_nota["imagen_carpeta"];
$nota_fecha_publicacion=$fila_nota["fecha_publicacion"];

//URL
$nota_UrlImg=$web."imagenes/upload/".$nota_imagen_carpeta."".$nota_imagen;

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title><?php echo $nota_titulo; ?></title>
    
    <?php require_once("wg-header-script.php"); ?>

</head>

<body>
    <div id="wrapper">

        <!-- header begin -->
        <?php require_once("wg-header.php"); ?>
        <!-- header close -->

        <!-- content begin -->
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="span9">
                        <div class="blog-read">
                            <div class="date-box"><span class="day">20</span> <span class="month">SEP</span> </div>
                            <div class="post-content">
                                <div class="post-image">
                                    <img src="<?php echo $nota_UrlImg; ?>" alt="<?php echo $nota_titulo; ?>" />
                                </div>


                                <div class="post-text">
                                    <h3><?php echo $nota_titulo; ?></h3>
                                    <?php echo $nota_contenido; ?>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div id="sidebar" class="span3">
                        <div class="widget widget-text">
                            <h4>Text Widget</h4>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        </div>

                        <div class="widget tab-holder">
                            <div class="de_tab">
                                <ul class="de_nav">
                                    <li><span class="active">Popular</span></li>
                                    <li><span>Recent</span></li>
                                </ul>

                                <div class="de_tab_content">

                                    <div class="tab-small-post">
                                        <ul>
                                            <li>
                                                <img src="imagenes/news-small-1.jpg" class="post-info" alt="" />
                                                <span class="post-content">
                                                    <a href="#">Sed ut perspiciatis unde </a></span>
                                                <span class="post-date">Sept 22, 2013
                                                </span>
                                            </li>

                                            <li>
                                                <img src="imagenes/news-small-2.jpg" class="post-info" alt="" />
                                                <span class="post-content">
                                                    <a href="#">Sed ut perspiciatis unde </a></span>
                                                <span class="post-date">Sept 22, 2013
                                                </span>
                                            </li>

                                            <li>
                                                <img src="imagenes/news-small-3.jpg" class="post-info" alt="" />
                                                <span class="post-content">
                                                    <a href="#">Sed ut perspiciatis unde </a></span>
                                                <span class="post-date">Sept 22, 2013
                                                </span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="tab-small-post">
                                        <ul>
                                            <li>
                                                <img src="imagenes/news-small-3.jpg" class="post-info" alt="" />
                                                <span class="post-content">
                                                    <a href="#">Lorem ipsum dolor sit</a></span>
                                                <span class="post-date">Sept 22, 2013
                                                </span>
                                            </li>

                                            <li>
                                                <img src="imagenes/news-small-2.jpg" class="post-info" alt="" />
                                                <span class="post-content">
                                                    <a href="#">Lorem ipsum dolor sit</a></span>
                                                <span class="post-date">Sept 22, 2013
                                                </span>
                                            </li>

                                            <li>
                                                <img src="imagenes/news-small-1.jpg" class="post-info" alt="" />
                                                <span class="post-content">
                                                    <a href="#">Lorem ipsum dolor sit</a></span>
                                                <span class="post-date">Sept 22, 2013
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="widget widget_category">
                            <h4>Category</h4>
                            <ul>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Hosting</a></li>
                                <li><a href="#">Server</a></li>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Software</a></li>
                            </ul>
                        </div>
                        <div class="widget widget_tags">
                            <h4>Tags</h4>
                            <ul>
                                <li><a href="#link">Art</a></li>
                                <li><a href="#link">Application</a></li>
                                <li><a href="#link">Design</a></li>
                                <li><a href="#link">Entertainment</a></li>
                                <li><a href="#link">Internet</a></li>
                                <li><a href="#link">Marketing</a></li>
                                <li><a href="#link">Music</a></li>
                                <li><a href="#link">Print</a></li>
                                <li><a href="#link">Programming</a></li>
                            </ul>
                        </div>

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