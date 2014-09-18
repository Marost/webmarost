<?php
if(!session_id()) session_start();

if(isset($usuario_user)){
    if ($usuario_user==""){
        header("Location:".$fila_empresa["web"]."".$carpeta_admin."/login.php?nosesion=1");
    }
}