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
$Nota_imagen=$fila_nota["imagen"];
$Nota_imagen_carpeta=$fila_nota["imagen_carpeta"];
$Nota_tags=$fila_nota["tags"];

//URLS
$Nota_UrlImg=$web."imagenes/upload/".$Nota_imagen_carpeta."".$Nota_imagen;
$Nota_UrlWeb=$web."nota/".$Nota_id."-".$Nota_url;
?>
<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<title>Ainex - A Professional Hosting Theme</title>
	
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
		<div class="title"><h1>Single Post</h1></div>
        <div class="pagenation">&nbsp;<a href="index.php">Home</a> <i>/</i> <a href="#">Blog</a> <i>/</i> Single Post</div>
	</div>
</div><!-- end page title --> 

<div class="clearfix"></div>


<!-- Contant
======================================= -->

<div class="container">

<div class="content_left">
        	
    <div class="blog_post">	
        <div class="blog_postcontent">
        <div class="image_frame">
            <img src="<?php echo $Nota_UrlImg; ?>" alt="" />
        </div>
        <a href="blog-archive.html" class="date"><strong>18</strong><i>November</i></a>
        <h3><?php echo $Nota_titulo; ?></h3>
            <ul class="post_meta_links">
                <li class="post_by"><a href="#">Adam Harrison</a></li>
                <li class="post_categoty"><a href="#">Web tutorials</a></li>
                <li class="post_comments"><a href="#">18 Comments</a></li>
            </ul>
         
        <div class="post_info_content">
        <?php echo $Nota_contenido; ?>
        </div>
        </div>
    </div><!-- /# end post -->
    
    <div class="clearfix divider_line"></div>
    
    
    <div class="sharepost">
        <h4><i>Share this Post</i></h4>
            <ul>
                <li><a href="#">&nbsp;<i class="fa fa-facebook fa-lg"></i>&nbsp;</a></li>
                <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-flickr fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-html5 fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-skype fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-linux fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-android fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-rss fa-lg"></i></a></li>
            </ul>
        
        </div><!-- end share post links -->
        
        <div class="clearfix"></div>
        
    <h4><i>About the Author</i></h4>
    <div class="about_author">
    
        <img src="images/blog/avatar.jpg" alt="" />
        
        <a href="http://themeforest.net/user/gsrthemes9/portfolio" target="_blank">GSR Themes</a><br />
       I'm a freelance designer with satisfied clients worldwide. I design simple, clean websites and develop easy-to-use applications. Web Design is not just my job it's my passion. You need professional web designer you are welcome.
    </div><!-- end about author -->
    
    <div class="clearfix mar_top5"></div>

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


<!-- right sidebar starts -->
<div class="right_sidebar">

	<div class="site-search-area">
    
        <form method="get" id="site-searchform" action="blog.html">
        <div>
        <input class="input-text" name="s" id="s" value="Enter Search keywords..." onFocus="if (this.value == 'Enter Search keywords...') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Enter Search keywords...';}" type="text" />
        <input id="searchsubmit" value="Search" type="submit" />
        </div>
        </form>
        
	</div><!-- end site search -->
    
    <div class="clearfix mar_top4"></div>

	<div class="sidebar_widget">
    
    	<div class="sidebar_title"><h3>Site <i>Categories</i></h3></div>
		<ul class="arrows_list1">		
            <li><a href="#"><i class="fa fa-angle-right"></i> Website Design</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Make Money Online</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Photography</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Wordpress Themes</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Learn Web Tutorials</a></li>
		</ul>
        
	</div><!-- end section -->
    
    <div class="clearfix mar_top4"></div>
    
    <div class="sidebar_widget">
    
    	<div id="tabs">
        
			<ul class="tabs">  
				<li class="active"><a href="#tab1">Popular</a></li>
				<li><a href="#tab2">Recent</a></li>
				<li class="last"><a href="#tab3">Tags</a></li>
			</ul><!-- /# end tab links --> 
 
		<div class="tab_container">	
			<div id="tab1" class="tab_content"> 
            
				<ul class="recent_posts_list">
					<li>
					  	<span><a href="#"><img src="http://placehold.it/50x50" alt="" /></a></span>
						<a href="#">Publishing packag esanse web page editos</a>
						 <i>November 09, 2013</i> 
					</li>	
					<li>
					  	<span><a href="#"><img src="http://placehold.it/50x50" alt="" /></a></span>
						<a href="#">Sublishing packag esanse web page editos</a>
						 <i>November 08, 2013</i> 
					</li>	
					<li class="last">
					  	<span><a href="#"><img src="http://placehold.it/50x50" alt="" /></a></span>
						<a href="#">Mublishing packag esanse web page editos</a>
						 <i>November 07, 2013</i> 
					</li>
				</ul>
                 
			</div><!-- end popular posts --> 
			
			<div id="tab2" class="tab_content">	 
				<ul class="recent_posts_list">
                
					<li>
					  	<span><a href="#"><img src="http://placehold.it/50x50" alt="" /></a></span>
						<a href="#">Various versions has evolved over the years</a>
						 <i>November 18, 2013</i> 
					</li>
					<li>
					  	<span><a href="#"><img src="http://placehold.it/50x50" alt="" /></a></span>
						<a href="#">Rarious versions has evolve over the years</a>
						 <i>November 17, 2013</i> 
					</li>
					<li class="last">
					  	<span><a href="#"><img src="http://placehold.it/50x50" alt="" /></a></span>
						<a href="#">Marious versions has evolven over the years</a>
						 <i>November 16, 2013</i> 
					</li>
				</ul>
                 
			</div><!-- end popular articles -->	
			
			<div id="tab3" class="tab_content">	 
				<ul class="tags">
														
					<li><a href="#">2013</a></li>
					<li><a href="#"><b>Amazing</b></a></li>
					<li><a href="#">Animation</a></li>
					<li><a href="#">Beautiful</a></li>
					<li><a href="#"><b>Cartoon</b></a></li>
					<li><a href="#">Comedy</a></li>
					<li><a href="#"><b>Cool</b></a></li>
					<li><a href="#">Dance</a></li>
					<li><a href="#">Drive</a></li>
					<li><a href="#"><b>Family</b></a></li>
					<li><a href="#"><b>Fantasy</b></a></li>
					<li><a href="#">News</a></li>
					<li><a href="#"><b>Friends</b></a></li>
					<li><a href="#">Funny</a></li>
					<li><a href="#"><b>Games</b></a></li>
					<li><a href="#">Love</a></li>
					<li><a href="#"><b>Music</b></a></li>
					<li><a href="#">Nature</a></li>
					<li><a href="#"><b>Party</b></a></li>
					<li><a href="#">Pictures</a></li>
					<li><a href="#">Sports</a></li>
					<li><a href="#"><b>Best</b></a></li>
					<li><a href="#">Wedding</a></li>
					<li><a href="#">Weight</a></li>
					<li><a href="#"><b>Youtube</b></a></li>
				</ul>	 
			</div>
 			
		</div>
		
		</div>
                
	</div><!-- end section -->
    
    <div class="clearfix mar_top5"></div>
    
    <div class="clientsays_widget">
    
    	<div class="sidebar_title"><h3>Happy <i>Client Say's</i></h3></div>
        
        <img src="http://placehold.it/50x50" alt="" />
<strong>- Henry Brodie</strong><p>Lorem Ipsum passage, and going through the cites of the word here classical literature passage discovered undou btable source. which looks reasonable of the generated charac eristic words.</p>  
                
	</div><!-- end section -->
    
    <div class="clearfix mar_top5"></div>
    
   	<div class="sidebar_widget">
    
    	<div class="sidebar_title"><h3>Site <i>Advertisements</i></h3></div>
        
			<ul class="adsbanner-list">  
            	<li><a href="#"><img src="images/sample-ad-banner.jpg" alt="" /></a></li>
                <li class="last"><a href="#"><img src="images/sample-ad-banner.jpg" alt="" /></a></li>
            </ul>
                 
           	<ul class="adsbanner-list">  
            	<li><a href="#"><img src="images/sample-ad-banner.jpg" alt="" /></a></li>
            	<li class="last"><a href="#"><img src="images/sample-ad-banner.jpg" alt="" /></a></li>
           	</ul>
            
	</div><!-- end section -->
    
	<div class="clearfix mar_top4"></div>
    
	<div class="sidebar_widget">
    
    	<div class="sidebar_title"><h3>Site <i>Archives</i></h3></div>
        
		<ul class="arrows_list1">		
            <li><a href="#"><i class="fa fa-angle-right"></i> November 2013</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> October 2013</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> September 2013</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> August 2013</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> July 2013</a></li>
		</ul>
        
	</div><!-- end section -->

	
</div>


</div><!-- end content area -->


<?php require_once("w-footer-texto.php"); ?>

<?php require_once("w-footer.php"); ?>
 
</div>
</div>

<?php require_once("w-footer-script.php"); ?>

</body>
</html>
