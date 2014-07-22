<!-- ######### JS FILES ######### -->
<!-- get jQuery from the google apis -->
<script type="text/javascript" src="js/universal/jquery.js"></script>

<!-- style switcher -->
<script src="js/style-switcher/jquery-1.js"></script>
<script src="js/style-switcher/styleselector.js"></script>

<!-- main menu -->
<script type="text/javascript" src="js/mainmenu/ddsmoothmenu.js"></script>
<script type="text/javascript" src="js/mainmenu/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/mainmenu/selectnav.js"></script>

<!-- jquery jcarousel -->
<script type="text/javascript" src="js/jcarousel/jquery.jcarousel.min.js"></script>

<!-- REVOLUTION SLIDER -->
<script type="text/javascript" src="js/revolutionslider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<script type="text/javascript" src="js/mainmenu/scripts.js"></script>

<!-- tabs script -->
<script type="text/javascript" src="js/tabs/tabs.js"></script>

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

<!-- jquery jcarousel -->
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

<!-- accordion -->
<script type="text/javascript" src="js/accordion/custom.js"></script>

<!-- REVOLUTION SLIDER -->
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

<script type="text/javascript" src="js/sticky-menu/core.js"></script>

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