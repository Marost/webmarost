<?php
//CONEXION CON EL SERVIDOR
$conexion=mysql_connect("localhost","root","") or die("no se puede conectar");
mysql_select_db("marost", $conexion) or die("no se puede seleccionar la BD");

//ZONA HORARIA
date_default_timezone_set('America/Lima');

//ERROR REPORTING
ini_set('error_reporting', E_ALL ^ E_NOTICE);

//VARIABLES GLOBALES
global $carpeta_admin;
global $tabla_suf;
global $sesion_pre;
global $rst_empresa;
global $fila_empresa;
global $rst_prv_user;
global $fila_prv_user;
global $usuario_user;
global $usuario_nombre;
global $usuario_apellido;
global $usuario_email;
global $web;
global $web_nombre;
global $web_nosotros;
global $fechaActual;

//SOCIAL
global $social_email;
global $social_facebook;
global $social_twitter;
global $social_youtube;
global $social_palabrasclave;
global $social_nosotros;

//VARIABLES
$carpeta_admin="panel@marost";
$tabla_suf="mrt";
$sesion_pre="mrts";
$fechaActual=date("Y-m-d H:i:s");

//EMPRESA
$rst_empresa=mysql_query("SELECT * FROM ".$tabla_suf."_empresa WHERE id=1;", $conexion);
$fila_empresa=mysql_fetch_array($rst_empresa);
$web=$fila_empresa["web"];
$web_nombre=$fila_empresa["nombre"];
$web_nosotros=$fila_empresa["nosotros"];

//SOCIAL
$social_email=$fila_empresa["social_email"];
$social_facebook=$fila_empresa["social_facebook"];
$social_twitter=$fila_empresa["social_twitter"];
$social_youtube=$fila_empresa["social_youtube"];
$social_youtube=$fila_empresa["social_youtube"];
$social_palabrasclave=$fila_empresa["palabras_clave"];
$social_nosotros=$fila_empresa["nosotros"];

//URL DE ARCHIVOS
$url_admin=$web."".$carpeta_admin."/";

if(isset($_SESSION["user-".$sesion_pre.""])){

    if($_SESSION["user-".$sesion_pre.""]<>""){
        $usuario_user=$_SESSION["user-".$sesion_pre.""];
        $usuario_nombre=$_SESSION["user_nombre-".$sesion_pre.""];
        $usuario_apellido=$_SESSION["user_apellido-".$sesion_pre.""];
        $usuario_email=$_SESSION["user_email-".$sesion_pre.""];
    }

}