<?php
session_start();
include("../../conexion/conexion.php");
include("../../conexion/funciones.php");
require_once('../../js/plugins/thumbs/ThumbLib.inc.php');

//DECLARACION DE VARIABLES
$nota_id=$_REQUEST["id"];
$nombre=$_POST["nombre"];
$url=getUrlAmigable(eliminarTextoURL($nombre));
$contenido=$_POST["contenido"];
$palabras_clave=$_POST["palabras_clave"];
$tags=$_POST["tags"];

//FECHA Y HORA
$pub_fecha=$_POST["pub_fecha"];
$pub_hora=$_POST["pub_hora"];
$fecha_publicacion=$pub_fecha." ".$pub_hora;

//TAGS
$tags=$_POST["tags"];
if($tags==""){ $union_tags=0; }
elseif($tags<>""){ $union_tags=implode(",", $tags);}

//PUBLICAR
if ($_POST["publicar"]<>""){ $publicar=$_POST["publicar"]; }else{ $publicar=0; }

//IMAGEN
if($_POST['uploader_0_tmpname']<>""){
	$imagen=$_POST["uploader_0_tmpname"];
	$imagen_carpeta=fechaCarpeta()."/";	
}else{
	$imagen=$_POST["imagen"];
	$imagen_carpeta=$_POST["imagen_carpeta"];
}


//INSERTANDO DATOS
$rst_guardar=mysql_query("UPDATE ".$tabla_suf."_noticia SET url='$url', titulo='".htmlspecialchars($nombre)."', 
	contenido='$contenido', 
	imagen='$imagen', 
	imagen_carpeta='$imagen_carpeta', 
	fecha_publicacion='$fecha_publicacion', 
	publicar=$publicar, 
	tags='0,$union_tags,0',
	palabras_clave='$palabras_clave' WHERE id=$nota_id;", $conexion);

if (mysql_errno()!=0){
	echo "ERROR: <strong>".mysql_errno()."</strong> - ". mysql_error();
	mysql_close($conexion);
	header("Location:lista.php?msj=er");
} else {
	mysql_close($conexion);
	header("Location:lista.php?msj=ok");
}

?>