<?php
session_start();
include("../../conexion/conexion.php");
include("../../conexion/funciones.php");
require_once('../../js/plugins/thumbs/ThumbLib.inc.php');

//DECLARACION DE VARIABLES
$id=$_REQUEST["id"];
$nombre=$_POST["nombre"];
$noticia=$_POST["not"];

//IMAGEN
if($_POST['uploader_galeria_0_tmpname']==""){
	$imagen=$_POST["imagen_actual"];
	$carpeta=$_POST["carpeta"];
}else{
	$carpeta=fechaCarpeta()."/";
	$imagen=$_POST['uploader_galeria_0_tmpname'];
	
	$thumb140{$cont}=PhpThumbFactory::create("../../../imagenes/galeria/".$imagen_carpeta."".$imagen."");
	$thumb140{$cont}->adaptiveResize(140,140);
	$thumb140{$cont}->save("../../../imagenes/galeria/".$imagen_carpeta."thumb140/".$imagen."", "jpg");

	$thumb465{$cont}=PhpThumbFactory::create("../../../imagenes/galeria/".$imagen_carpeta."".$imagen."");
	$thumb465{$cont}->adaptiveResize(465,465);
	$thumb465{$cont}->save("../../../imagenes/galeria/".$imagen_carpeta."thumb465/".$imagen."", "jpg");
}

//INSERTANDO DATOS
$rst_guardar=mysql_query("UPDATE ".$tabla_suf."_galeria_slide SET 
	imagen='$imagen', 
	imagen_carpeta='$imagen_carpeta',
	noticia=$noticia WHERE id=$id;", $conexion);

if (mysql_errno()!=0){
	echo "ERROR: <strong>".mysql_errno()."</strong> - ". mysql_error();
	mysql_close($conexion);
	header("Location:lista.php?not=$noticia&msj=er");
} else {
	mysql_close($conexion);
	header("Location:lista.php?not=$noticia&msj=ok");
}

?>