<?php
session_start();
include("../../conexion/conexion.php");
include("../../conexion/funciones.php");

//DECLARACION DE VARIABLES
$nombre=$_POST["nombre"];
$url=getUrlAmigable(eliminarTextoURL($nombre));

//INSERTANDO DATOS
$rst_guardar=mysql_query("INSERT INTO ".$tabla_suf."_portafolio_servicios (titulo, url) VALUES('".htmlspecialchars($nombre)."', '$url');",$conexion);

if (mysql_errno()!=0){
	echo "ERROR: <strong>".mysql_errno()."</strong> - ". mysql_error();
	mysql_close($conexion);
	header("Location:lista.php?msj=er");
} else {
	mysql_close($conexion);
	header("Location:lista.php?msj=ok");
}

?>