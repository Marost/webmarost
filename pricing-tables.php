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

    <?php require_once("w-header-script.php");?>

</head>

<body>

<div class="wrapper_boxed">

    <div class="site_wrapper">

        <?php require_once("w-header.php"); ?>

        <div class="clearfix"></div>

        <div class="container_full">

            <div class="fullwidthbanner-container">

                <div class="fullwidthbanner">

                    <ul>
                        <!-- SLIDE 1 -->
                        <li data-transition="fade" data-slotamount="9" data-thumb="imagenes/slider/hosting.jpg">

                            <img src="imagenes/slider/hosting.jpg" alt="" />

                            <div class="caption lft big_white"  data-x="0" data-y="62" data-speed="900" data-start="1000" data-easing="easeOutExpo">Hosting</div>

                            <div class="caption lfb small_text"  data-x="0" data-y="170" data-speed="900" data-start="1500" data-easing="easeOutExpo"><i class="fa fa-check-circle fa-lg"></i> Incluye dominio .COM o .NET</div>

                            <div class="caption lfb small_text"  data-x="0" data-y="210" data-speed="900" data-start="1700" data-easing="easeOutExpo"><i class="fa fa-check-circle fa-lg"></i> Soporte 24/7</div>

                            <div class="caption lfb small_text"  data-x="0" data-y="250" data-speed="900" data-start="1900" data-easing="easeOutExpo"><i class="fa fa-check-circle fa-lg"></i> Correos electronicos ilimitados</div>

                            <div class="caption lfb small_text"  data-x="0" data-y="290" data-speed="900" data-start="2100" data-easing="easeOutExpo"><i class="fa fa-check-circle fa-lg"></i> Desde 1GB de almacenamiento</div>

                            <div class="caption sfb" data-x="0" data-y="370" data-speed="900" data-start="2700" data-easing="easeOutExpo"><a href="#" class="slider_button1"><i class="fa fa-arrow-right fa-lg"></i> Ver detalles &nbsp;&nbsp;&nbsp;&nbsp;</a></div>

                            <div class="caption sfb" data-x="400" data-y="150" data-speed="900" data-start="3000" data-easing="easeOutExpo">
                                <div class="round1">Paquetes de<br />Hosting</div>
                            </div>

                            <div class="caption sfb" data-x="440" data-y="210" data-speed="900" data-start="3200" data-easing="easeOutExpo">
                                <div class="price">Desde<br /><i>S/.150</i><br />/anual</div>
                            </div>

                        </li>

                    </ul>

                </div>

            </div>

        </div><!-- end slider -->

        <div class="clearfix"></div>

        <div class="page_title">
            <div class="container">
                <div class="title"><h1>Hosting</h1></div>
                <div class="pagenation">&nbsp;<a href="index.php">Inicio</a> <i>/</i> Hosting</div>
            </div>
        </div><!-- end page title -->

        <div class="clearfix"></div>


        <!-- Contant
        ======================================= -->

        <div class="container">

            <div class="content_fullwidth">

                <div class="pricing-tables-main">

                    <div class="mar_top3"></div>
                    <div class="clearfix"></div>

                    <div class="pricing-tables-two">

                        <div class="title">Económico</div>

                        <div class="price">S/. 150.00 <i>/ por año</i></div>

                        <div class="cont-list">

                            <ul>
                                <li>Incluye dominio .COM o .NET</li>
                                <li>Servidor Linux</li>
                                <li>Acceso a CPanel</li>
                                <li>1 GB de Almacenamiento</li>
                                <li>10 GB de Banda Ancha</li>
                                <li>Correos electronicos ilimitadas</li>
                                <li>Cuentas FTP ilimitados</li>
                                <li>Subdominios ilimitados</li>
                                <li>Soporte 24/7</li>
                            </ul>

                        </div>

                        <div class="ordernow"><a href="#" class="colorchan">Ordenalo ahora</a></div>

                    </div><!-- end section -->


                    <div class="pricing-tables-two">

                        <div class="title">Básico</div>

                        <div class="price">S/. 180.00 <i>/ por año</i></div>

                        <div class="cont-list">

                            <ul>
                                <li>Incluye dominio .COM o .NET</li>
                                <li>Servidor Linux</li>
                                <li>Acceso a CPanel</li>
                                <li>3 GB de Almacenamiento</li>
                                <li>30 GB de Banda Ancha</li>
                                <li>Correos electronicos ilimitadas</li>
                                <li>Cuentas FTP ilimitados</li>
                                <li>Subdominios ilimitados</li>
                                <li>Soporte 24/7</li>
                            </ul>

                        </div>

                        <div class="ordernow"><a href="#" class="colorchan">Ordenalo ahora</a></div>

                    </div><!-- end section -->


                    <div class="pricing-tables-two">

                        <div class="title">Corporativo</div>

                        <div class="price">S/. 250.00 <i>/ por año</i></div>

                        <div class="cont-list">

                            <ul>
                                <li>Incluye dominio .COM o .NET</li>
                                <li>Servidor Linux</li>
                                <li>Acceso a CPanel</li>
                                <li>5 GB de Almacenamiento</li>
                                <li>50 GB de Banda Ancha</li>
                                <li>Correos electronicos ilimitadas</li>
                                <li>Cuentas FTP ilimitados</li>
                                <li>Subdominios ilimitados</li>
                                <li>Soporte 24/7</li>
                            </ul>

                        </div>

                        <div class="ordernow"><a href="#" class="colorchan">Ordenalo ahora</a></div>

                    </div><!-- end section -->

                </div><!-- end pricing tables with 3 columns -->

            </div>

        </div><!-- end content area -->


        <?php require_once("w-footer-texto.php"); ?>

        <?php require_once("w-footer.php"); ?>

    </div>
</div>

<?php require_once("w-footer-script.php"); ?>

</body>
</html>
