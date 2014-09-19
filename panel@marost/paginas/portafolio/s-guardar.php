<?php
session_start();
include("../../conexion/conexion.php");
include("../../conexion/funciones.php");
require_once('../../js/plugins/thumbs/ThumbLib.inc.php');

//DECLARACION DE VARIABLES
$nombre=$_POST["nombre"];
$url=getUrlAmigable(eliminarTextoURL($nombre));
$enlace=$_POST["enlace"];
$contenido=$_POST["contenido"];
$palabras_clave=$_POST["palabras_clave"];

//FECHA Y HORA
$pub_fecha=$_POST["pub_fecha"];
$pub_hora=$_POST["pub_hora"];
$fecha_publicacion=$pub_fecha." ".$pub_hora;
$publicar=1;

//SERVICIOS
$servicios=$_POST["servicios"];
if($servicios==""){ $union_servicios=0; }
elseif($servicios<>""){ $union_servicios=implode(" ", $servicios);}

//RECORTAR IMAGEN
if($_POST["uploader_0_tmpname"]<>""){
    $imagen=$_POST["uploader_0_tmpname"];
    $imagen_carpeta=fechaCarpeta()."/";
    $thumb=PhpThumbFactory::create("../../../imagenes/upload/".$imagen_carpeta."".$imagen."");
    $thumb->adaptiveResize(370,250);
    $thumb->save("../../../imagenes/upload/".$imagen_carpeta."thumb/".$imagen."", "jpg");
}

//INSERTANDO DATOS
$rst_guardar=mysql_query("INSERT INTO ".$tabla_suf."_portafolio (url, titulo, 
	contenido, imagen, imagen_carpeta, fecha_publicacion, publicar, enlace, palabras_clave, servicios)
VALUES('$url', '".htmlspecialchars($nombre)."', '$contenido', '$imagen', 
	'$imagen_carpeta', '$fecha_publicacion', $publicar, '$enlace', '$palabras_clave', '$union_tags');",$conexion);

if (mysql_errno()!=0){
	echo "ERROR: <strong>".mysql_errno()."</strong> - ". mysql_error();
	mysql_close($conexion);
	header("Location:lista.php?msj=er");
} else {
	mysql_close($conexion);
	header("Location:lista.php?msj=ok");
}