<?php
//CONEXION
require_once("panel@marost/conexion/conexion.php");
require_once("panel@marost/conexion/funciones.php");

//WIDGETS
$w_jcarousel=true;
$w_tabs=true;
$w_tagsBlog=true;

//VARIABLES DE URL
$Req_Url=$_REQUEST["url"];
$url_web=$web."blog";

################################################################
//CATEGORIA
$rst_categoria=mysql_query("SELECT * FROM mrt_noticia_categoria WHERE url='$Req_Url'", $conexion);
$fila_categoria=mysql_fetch_array($rst_categoria);

//VARIABLES
$Categoria_id=$fila_categoria["id"];
$Categoria_titulo=$fila_categoria["categoria"];

################################################################
//PAGINACION DE NOTICIAS
require("libs/pagination/class_pagination.php");

//INICIO DE PAGINACION
$page           = (isset($_GET['page'])) ? intval($_GET['page']) : 1;
$rst_noticias   = mysql_query("SELECT COUNT(*) as count FROM mrt_noticia WHERE publicar=1 AND fecha_publicacion<='$fechaActual' AND categoria=$Categoria_id ORDER BY fecha_publicacion DESC;", $conexion);
$row            = mysql_fetch_assoc($rst_noticias);
$generated      = intval($row['count']);
$pagination     = new Pagination("6", $generated, $page, $url_web."?page", 1, 0);
$start          = $pagination->prePagination();
$rst_noticias   = mysql_query("SELECT * FROM mrt_noticia WHERE publicar=1 AND fecha_publicacion<='$fechaActual' AND categoria=$Categoria_id ORDER BY fecha_publicacion DESC LIMIT $start, 6", $conexion);

?>
<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
    <title><?php echo $Categoria_titulo." | ".$web_nombre; ?></title>

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
                <div class="title"><h1>Blog: <?php echo $Categoria_titulo; ?></h1></div>
                <div class="pagenation">&nbsp;<a href="/">Inicio</a> <i>/</i> Blog: <?php echo $Categoria_titulo; ?></div>
            </div>
        </div><!-- end page title -->

        <div class="clearfix"></div>


        <!-- Contant
        ======================================= -->

        <div class="container">

            <div class="content_left">

                <?php while($fila_nota=mysql_fetch_array($rst_noticias)){
                    $Nota_id=$fila_nota["id"];
                    $Nota_url=$fila_nota["url"];
                    $Nota_titulo=$fila_nota["titulo"];
                    $Nota_contenido_corto=$fila_nota["contenido_corto"];
                    $Nota_imagen=$fila_nota["imagen"];
                    $Nota_imagen_carpeta=$fila_nota["imagen_carpeta"];
                    $Nota_fecha=$fila_nota["fecha_publicacion"];

                    //URLS
                    $Nota_UrlWeb=$web."nota/".$Nota_id."-".$Nota_url;
                    $Nota_UrlImg=$web."imagenes/upload/".$Nota_imagen_carpeta."thumb/".$Nota_imagen;

                    ?>
                    <div class="blog_post">

                        <div class="blog_postcontent">

                            <div class="image_frame small">
                                <a href="<?php echo $Nota_UrlWeb; ?>">
                                    <img src="<?php echo $Nota_UrlImg; ?>" alt="<?php echo $Nota_titulo; ?>" />
                                </a>
                            </div>

                            <div class="post_info_content_small">
                                <h3><a href="<?php echo $Nota_UrlWeb; ?>"><?php echo $Nota_titulo; ?></a></h3>
                                <ul class="post_meta_links_small">
                                    <li class="post_categoty"><i class="fa fa-clock-o fa-lg"></i><?php echo $Nota_fecha; ?></li>
                                </ul>

                                <div class="clearfix"></div>

                                <p><?php echo $Nota_contenido_corto; ?></p>

                            </div>

                        </div>

                    </div><!-- /# end post -->

                    <div class="clearfix divider_line3"></div>

                <?php } ?>

                <div class="pagination">
                    <?php $pagination->pagination(); ?>
                </div><!-- end pagination -->

            </div><!-- end content left side area -->

            <?php require_once("w-sidebar.php"); ?>

        </div><!-- end content area -->

        <?php require_once("w-footer-texto.php"); ?>

        <?php require_once("w-footer.php"); ?>

    </div>

</div>

<?php require_once("w-footer-script.php"); ?>

</body>
</html>
