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
                        <h1>Contacto</h1>
                        <ul class="crumb">
                            <li><a href="index.php">Inicio</a></li>
                            <li class="sep">/</li>
                            <li>Contacto</li>
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
                    <div class="span8">
                        <h4>¡Póngase en contacto con nosotros ahora!</h4>
                        No dude en contactar con nosotros a través del contacto para obtener más información.<br />
                        <br />
                        <div class="contact_form_holder">
                            <form id="contact" class="row" name="form1" method="post" action="#">

                                <div class="span4">
                                    <label>Name</label>
                                    <input type="text" class="full" name="name" id="name" />
                                </div>

                                <div class="span4">
                                    <label>Email <span class="req">*</span></label>
                                    <input type="text" class="full" name="email" id="email" />
                                    <div id="error_email" class="error">Please check your email</div>
                                </div>

                                <div class="span8">
                                    <label>Message <span class="req">*</span></label>
                                    <textarea cols="10" rows="10" name="message" id="message" class="full"></textarea>
                                    <div id="error_message" class="error">Please check your message</div>
                                    <div id="mail_success" class="success">Thank you. Your message has been sent.</div>
                                    <div id="mail_failed" class="error">Error, email not sent</div>

                                    <p id="btnsubmit">
                                        <input type="submit" id="send" value="Send Now" class="btn btn-large" /></p>
                                </div>


                            </form>
                        </div>

                    </div>

                    <div id="sidebar" class="span3">
                        <!-- widget category -->
                        <!-- widget tags -->
                        <!-- widget text -->
                        <div class="widget widget-text">
                            <h4>Our Address</h4>
                            <address>
                                100 Mainstreet Center, Sydney
                                <span><strong>Phone:</strong>(208) 333 9296</span>
                                <span><strong>Fax:</strong>(208) 333 9298</span>
                                <span><strong>Email:</strong><a href="mailto:contact@example.com">contact@example.com</a></span>
                                <span><strong>Web:</strong><a href="#test">http://example.com</a></span>
                            </address>
                        </div>

                    </div>
                </div>

                <div class="map">
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