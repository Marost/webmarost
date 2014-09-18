<!-- get jQuery from the google apis -->
<script type="text/javascript" src="js/universal/jquery.js"></script>

<!-- main menu -->
<script type="text/javascript" src="js/mainmenu/ddsmoothmenu.js"></script>
<script type="text/javascript" src="js/mainmenu/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/mainmenu/selectnav.js"></script>

<?php if(isset($w_jcarousel)){ if($w_jcarousel==true){ ?>
<!-- jquery jcarousel -->
<script type="text/javascript" src="js/jcarousel/jquery.jcarousel.min.js"></script>
<script type="text/javascript">

    jQuery(document).ready(function() {
        jQuery('#mycarousel').jcarousel();
    });

    jQuery(document).ready(function() {
        jQuery('#mycarouseltwo').jcarousel();
    });

    jQuery(document).ready(function() {
        jQuery('#mycarouselthree').jcarousel();
    });

    jQuery(document).ready(function() {
        jQuery('#mycarouselfour').jcarousel();
    });
</script>
<?php }} ?>

<?php if(isset($w_rslider)){ if($w_rslider==true){ ?>
<!-- REVOLUTION SLIDER -->
<script type="text/javascript" src="js/revolutionslider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript">

    var tpj=jQuery;
    tpj.noConflict();

    tpj(document).ready(function() {

        if (tpj.fn.cssOriginal!=undefined)
            tpj.fn.css = tpj.fn.cssOriginal;

        var api = tpj('.fullwidthbanner').revolution(
            {
                delay:9000,
                startwidth:1170,
                startheight:500,

                onHoverStop:"on",						// Stop Banner Timet at Hover on Slide on/off

                thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
                thumbHeight:50,
                thumbAmount:3,

                hideThumbs:200,
                navigationType:"none",				// bullet, thumb, none
                navigationArrows:"solo",				// nexttobullets, solo (old name verticalcentered), none

                navigationStyle:"round",				// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


                navigationHAlign:"center",				// Vertical Align top,center,bottom
                navigationVAlign:"bottom",					// Horizontal Align left,center,right
                navigationHOffset:30,
                navigationVOffset:-40,

                soloArrowLeftHalign:"left",
                soloArrowLeftValign:"center",
                soloArrowLeftHOffset:0,
                soloArrowLeftVOffset:0,

                soloArrowRightHalign:"right",
                soloArrowRightValign:"center",
                soloArrowRightHOffset:0,
                soloArrowRightVOffset:0,

                touchenabled:"on",						// Enable Swipe Function : on/off


                stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
                stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

                hideCaptionAtLimit:0,					// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
                hideAllCaptionAtLilmit:0,				// Hide all The Captions if Width of Browser is less then this value
                hideSliderAtLimit:0,					// Hide the whole slider, and stop also functions if Width of Browser is less than this value


                fullWidth:"on",

                shadow:0								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

            });

    });



</script>
<?php }} ?>

<?php if(isset($w_tabs)){ if($w_tabs==true){ ?>
<!-- tabs script -->
<script type="text/javascript" src="js/tabs/tabwidget/tabwidget.js"></script>
<script type="text/javascript" src="js/mainmenu/scripts.js"></script>
<?php }} ?>

<!-- scroll up -->
<script type="text/javascript">
    $(document).ready(function(){

        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });

        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 500);
            return false;
        });

    });
</script>

<?php if(isset($w_accordion)){ if($w_accordion==true){ ?>
<!-- accordion -->
<script type="text/javascript" src="js/accordion/custom.js"></script>
<?php } ?>

<?php if(isset($w_testimonial)){ ?>
<!-- testimonials -->
<script type="text/javascript">//<![CDATA[
    $(window).load(function(){
        $(".controlls li a").click(function(e) {
            e.preventDefault();
            var id = $(this).attr('class');
            $('#slider div:visible').fadeOut(500, function() {
                $('div#' + id).fadeIn();
            })
        });
    });//]]>
</script>
<?php }} ?>

<?php if(isset($w_fancybox)){ if($w_fancybox==true){ ?>
<!-- fancyBox -->
<script type="text/javascript" src="js/portfolio/lib/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/portfolio/source/jquery.fancybox.js"></script>
<script type="text/javascript" src="js/portfolio/source/helpers/jquery.fancybox-media.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        /* Simple image gallery. Uses default settings */
        $('.fancybox').fancybox();

        /* media effects*/
        $(document).ready(function() {
            $('.fancybox-media').fancybox({
                openEffect  : 'none',
                closeEffect : 'none',
                helpers : {
                    media : {}
                }
            });
        });

    });
</script>
<?php }} ?>

<?php if(isset($w_isotope)){ if($w_isotope==true){ ?>
<!-- isotope -->
<script src="js/portfolio/jquery.isotope.js" type="text/javascript"></script>
<script type="text/javascript">
    $(window).load(function(){
        var $container = $('.portfolioContainer');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });

        $('.portfolioFilter a').click(function(){
            $('.portfolioFilter .current').removeClass('current');
            $(this).addClass('current');

            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });
    });
</script>
<?php }} ?>

<script type="text/javascript" src="js/sticky-menu/core.js"></script>