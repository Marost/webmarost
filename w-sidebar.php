<?php
//CATEGORIAS
$rst_CatSb=mysql_query("SELECT * FROM mrt_noticia_categoria ORDER BY categoria ASC;", $conexion);

//TAGS
$rst_TagSb=mysql_query("SELECT * FROM mrt_noticia_tags ORDER BY nombre ASC;", $conexion);
?>
<!-- right sidebar starts -->
<div class="right_sidebar">

    <!--
    <div class="site-search-area">

        <form method="get" id="site-searchform" action="blog.html">
            <div>
                <input class="input-text" name="s" id="s" value="Buscar..." onFocus="if (this.value == 'Enter Search keywords...') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Enter Search keywords...';}" type="text" />
                <input id="searchsubmit" value="Search" type="submit" />
            </div>
        </form>

    </div><!-- end site search --

    <div class="clearfix mar_top4"></div>
    -->

    <div class="sidebar_widget">

        <div class="sidebar_title"><h3>Categorias</h3></div>
        <ul class="arrows_list1">
            <?php while($fila_CatSb=mysql_fetch_array($rst_CatSb)){
                    $CatSb_id=$fila_CatSb["id"];
                    $CatSb_url=$fila_CatSb["url"];
                    $CatSb_titulo=$fila_CatSb["categoria"];

                    //URL
                    $CatSb_UrlWeb=$web."categoria/".$CatSb_url;
            ?>
            <li>
                <a href="<?php echo $CatSb_UrlWeb; ?>">
                    <i class="fa fa-angle-right"></i> <?php echo $CatSb_titulo; ?>
                </a>
            </li>
            <?php } ?>
        </ul>

    </div><!-- end section -->

    <div class="clearfix mar_top4"></div>

    <?php if(isset($w_tagsNota)){ if($w_tagsNota==true){ ?>
    <div class="sidebar_widget">

        <div id="tabs">

            <ul class="tabs">
                <li class="last" style="width: 100%;"><a href="javascript:;">Tags de la noticia</a></li>
            </ul><!-- /# end tab links -->

            <div class="tab_container">

                <div id="tab3" class="tab_content">
                    <ul class="tags">

                        <?php while($fila_tagsNota=mysql_fetch_array($rst_tagsNota)){
                            $tagsNota_id=$fila_tagsNota["id"];
                            $tagsNota_url=$fila_tagsNota["url"];
                            $tagsNota_nombre=$fila_tagsNota["nombre"];

                            //URL
                            $tagsNota_WebURL=$web."tags/".$tagsNota_id."-".$tagsNota_url;
                            if(in_array($tagsNota_id, $tags)){
                        ?>
                            <li>
                                <a href="<?php echo $tagsNota_WebURL; ?>"><?php echo $tagsNota_nombre; ?></a>
                            </li>
                        <?php }} ?>

                    </ul>
                </div>

            </div>

        </div>

    </div><!-- end section -->

    <div class="clearfix mar_top4"></div>

    <?php }} ?>

    <?php if(isset($w_tagsBlog)){ if($w_tagsBlog==true){ ?>
    <div class="sidebar_widget">

        <div id="tabs">

            <ul class="tabs">
                <li class="last"><a href="javascript:;">Tags</a></li>
            </ul><!-- /# end tab links -->

            <div class="tab_container">

                <div id="tab3" class="tab_content">
                    <ul class="tags">

                        <?php while($fila_TagSb=mysql_fetch_array($rst_TagSb)){
                            $TagSb_id=$fila_TagSb["id"];
                            $TagSb_url=$fila_TagSb["url"];
                            $TagSb_titulo=$fila_TagSb["nombre"];

                            //URL
                            $TagSb_UrlWeb=$web."tags/".$TagSb_id."-".$TagSb_url;
                            ?>
                            <li>
                                <a href="<?php echo $TagSb_UrlWeb; ?>">
                                    <?php echo $TagSb_titulo; ?>
                                </a>
                            </li>
                        <?php } ?>

                    </ul>
                </div>

            </div>

        </div>

    </div><!-- end section -->
    <?php }} ?>

</div>