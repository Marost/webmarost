<?php
session_start();
include("../../conexion/conexion.php");
include("../../conexion/funciones.php");
require_once('../../js/plugins/thumbs/ThumbLib.inc.php');

//DECLARACION DE VARIABLES
$nombre=$_POST["nombre"];
$url=getUrlAmigable(eliminarTextoURL($nombre));
$contenido_corto=$_POST["contenido_corto"];
$contenido=$_POST["contenido"];
$categoria=$_POST["categoria"];
$palabras_clave=$_POST["palabras_clave"];

//FECHA Y HORA
$pub_fecha=$_POST["pub_fecha"];
$pub_hora=$_POST["pub_hora"];
$fecha_publicacion=$pub_fecha." ".$pub_hora;
$publicar=1;

//TAGS
$tags=$_POST["tags"];
if($tags==""){ $union_tags=0; }
elseif($tags<>""){ $union_tags=implode(",", $tags);}

//SUBIR IMAGEN
$imagen=$_POST["uploader_0_tmpname"];

if($imagen<>""){
    $imagen_carpeta=fechaCarpeta()."/";
    $imagen=$_POST['uploader_0_tmpname'];
    $thumb=PhpThumbFactory::create("../../../imagenes/upload/".$imagen_carpeta."".$imagen."");
    $thumb->adaptiveResize(358,160);
    $thumb->save("../../../imagenes/upload/".$imagen_carpeta."thumb/".$imagen."", "jpg");
}

//INSERTANDO DATOS
$rst_guardar=mysql_query("INSERT INTO ".$tabla_suf."_noticia (url, titulo, contenido_corto,
	contenido, imagen, imagen_carpeta, fecha_publicacion, publicar, tags, categoria, palabras_clave)
VALUES('$url', '".htmlspecialchars($nombre)."', '$contenido_corto', '$contenido', '$imagen',
	'$imagen_carpeta', '$fecha_publicacion', $publicar, '0,$union_tags,0', $categoria, '$palabras_clave');",$conexion);

if (mysql_errno()!=0){
	echo "ERROR: <strong>".mysql_errno()."</strong> - ". mysql_error();
	mysql_close($conexion);
	header("Location:lista.php?msj=er");
} else {
	mysql_close($conexion);
	header("Location:lista.php?msj=ok");
}

?>