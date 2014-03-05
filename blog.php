<?php
require_once("panel@marost/conexion/conexion.php");
require_once("panel@marost/conexion/funciones.php");

//NOTICIAS
$rst_notas=mysql_query("SELECT * FROM mrt_noticia WHERE publicar=1 ORDER BY fecha_publicacion DESC", $conexion);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Truehost - Responsive HTML 5 Hosting Template</title>
    
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
                        <h1>Blog</h1>
                        <ul class="crumb">
                            <li><a href="/">Inicio</a></li>
                            <li class="sep">/</li>
                            <li>Blog</li>
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
                    <div class="span12">
                        <ul class="blog-list">

                            <?php while($fila_nota=mysql_fetch_array($rst_notas)){
                                    $nota_id=$fila_nota["id"];
                                    $nota_url=$fila_nota["url"];
                                    $nota_titulo=$fila_nota["titulo"];
                                    $nota_contenido=primerParrafo($fila_nota["contenido"]);
                                    $nota_imagen=$fila_nota["imagen"];
                                    $nota_imagen_carpeta=$fila_nota["imagen_carpeta"];
                                    $nota_fecha_publicacion=$fila_nota["fecha_publicacion"];
                                    $nota_tags=$fila_nota["tags"];

                                    //URLS
                                    $nota_URLWeb=$web."blog/".$nota_id."-".$nota_url;
                                    $nota_URLImg=$web."imagenes/upload/".$nota_imagen_carpeta."".$nota_imagen;
                            ?>
                            <li>
                                <div class="date-box"><span class="day">20</span> <span class="month">SEP</span></div>
                                <div class="post-content">
                                    <div class="post-image">
                                        <div class="callbacks_container">
                                            <ul class="rslides pic_slider">
                                                <li>
                                                    <img src="<?php echo $nota_URLImg; ?>" alt="" />
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="post-text">
                                        <h3><a href="<?php echo $nota_URLWeb; ?>"><?php echo $nota_titulo; ?></a></h3>
                                        <?php echo $nota_contenido; ?>
                                    </div>
                                </div>
                            </li>
                            <?php } ?>

                        </ul>

                        <div class="pagination text-center ">
                            <ul>
                                <li><a href="#">Prev</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">Next</a></li>
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