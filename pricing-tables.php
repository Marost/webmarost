<?php
//CONEXION
require_once("panel@marost/conexion/conexion.php");
require_once("panel@marost/conexion/funciones.php");
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
                                <li>Unlimited Bandwidth</li>
                                <li>100 GB Space</li>
                                <li>10 Databases</li>
                                <li>Ad Credits</li>
                                <li>1 Free Domain</li>
                                <li>24/7 Unlimited Support</li>
                                <li class="last">100 Email Addresses</li>
                            </ul>
                        </div>
                        <div class="ordernow"><a href="#" class="normalbut">Ordenalo ahora</a></div>
                    </div><!-- end section -->


                    <div class="pricing-tables-helight-two">
                        <div class="title">Básico</div>
                        <div class="price">S/. 180.00 <i>/ por año</i></div>
                        <div class="cont-list">
                            <ul>
                                <li>Unlimited Bandwidth</li>
                                <li>Unlimit Space</li>
                                <li>100 Database</li>
                                <li>Ad Credits</li>
                                <li>2 Free Domains </li>
                                <li>&nbsp; 24/7 Unlimited Support &nbsp;</li>
                                <li class="last">1000 Email Addresses</li>
                            </ul>
                        </div>
                        <div class="ordernow"><a href="#" class="colorchan">Ordenalo ahora</a></div>
                    </div><!-- end section -->


                    <div class="pricing-tables-two">
                        <div class="title">Corporativo</div>
                        <div class="price">S/. 250.00 <i>/ por año</i></div>
                        <div class="cont-list">
                            <ul>
                                <li>Unlimited Bandwidth</li>
                                <li>Unlimit Space</li>
                                <li>1000 Database</li>
                                <li>Ad Credits</li>
                                <li>5 Free Domain</li>
                                <li>24/7 Unlimited Support</li>
                                <li class="last">Unlimited &nbsp; Emails</li>
                            </ul>
                        </div>
                        <div class="ordernow"><a href="#" class="normalbut">Ordenalo ahora</a></div>
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
