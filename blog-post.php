<?php
//CONEXION
require_once("panel@marost/conexion/conexion.php");
require_once("panel@marost/conexion/funciones.php");

//VARIABLES
$Req_Id=$_REQUEST["id"];
$Req_Url=$_REQUEST["url"];

//NOTICIA
$rst_nota=mysql_query("SELECT * FROM mrt_noticia WHERE id=$Req_Id AND url='$Req_Url' AND publicar=1 AND fecha_publicacion<='$fechaActual'", $conexion);
$fila_nota=mysql_fetch_array($rst_nota);

//VARIABLES
$Nota_id=$fila_nota["id"];
$Nota_url=$fila_nota["url"];
$Nota_titulo=$fila_nota["titulo"];
$Nota_contenido_corto=$fila_nota["contenido_corto"];
$Nota_contenido=$fila_nota["contenido"];
$Nota_categoria=$fila_nota["categoria"];
$Nota_imagen=$fila_nota["imagen"];
$Nota_imagen_carpeta=$fila_nota["imagen_carpeta"];
$Nota_tags=$fila_nota["tags"];
$Nota_fecha=$fila_nota["fecha_publicacion"];

//URLS
$Nota_UrlImg=$web."imagenes/upload/".$Nota_imagen_carpeta."".$Nota_imagen;
$Nota_UrlWeb=$web."nota/".$Nota_id."-".$Nota_url;

//CATEGORIA
$rst_NotCat=mysql_query("SELECT * FROM mrt_noticia_categoria WHERE id=$Nota_categoria", $conexion);
$fila_NotCat=mysql_fetch_array($rst_NotCat);

//VARIABLES
$NotCat_url=$fila_NotCat["url"];
$NotCat_titulo=$fila_NotCat["categoria"];
$NotCat_UrlWeb=$web."categoria/".$NotCat_url;
?>
<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
    <title><?php echo $Nota_titulo." | ".$web_nombre; ?></title>

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
                <div class="pagenation">&nbsp;<a href="/">Inicio</a> <i>/</i> <a href="blog">Blog</a> <i>/</i> <?php echo $Nota_titulo; ?></div>
            </div>
        </div><!-- end page title -->

        <div class="clearfix"></div>

        <!-- Contant
        ======================================= -->

        <div class="container">

            <div class="content_left">

                <div class="blog_post">

                    <div class="blog_postcontent">

                        <h3><?php echo $Nota_titulo; ?></h3>

                        <ul class="post_meta_links">
                            <li class="post_categoty"><a href="<?php echo $NotCat_UrlWeb ?>"><i class="fa fa-folder-open fa-lg"></i><?php echo $NotCat_titulo; ?></a></li>
                            <li class="post_categoty"><i class="fa fa-clock-o fa-lg"></i><?php echo $Nota_fecha; ?></li>

                            <div class="addthis_native_toolbox"></div>
                            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53fcd32351dfe219"></script>

                        </ul>

                        <div class="post_info_content">
                            <p><?php echo $Nota_contenido_corto; ?></p>
                        </div>

                        <div class="image_frame">
                            <img src="<?php echo $Nota_UrlImg; ?>" alt="<?php echo $Nota_titulo; ?>" />
                        </div>

                        <div class="post_info_content">
                            <?php echo $Nota_contenido; ?>
                        </div>

                    </div>

                </div><!-- /# end post -->

                <div class="clearfix divider_line3"></div>

                <div class="comment_form">
                    <h4><i>Comentarios</i></h4>

                    <div id="fb-root"></div>

                    <script>
                        (function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&appId=254111618131678&version=v2.0";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));
                    </script>

                    <div class="fb-comments" data-href="<?php echo $Nota_UrlWeb; ?>" data-numposts="5" data-colorscheme="light"></div>
                </div>

                <div class="clearfix mar_top2"></div>

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
