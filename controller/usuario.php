<?php

    require_once("../config/conexion.php");
    require_once("../models/Usuario.php");
    $usuario = new Usuario();

    switch($_GET["op"]){
        case "acceso":
            $datos=$usuario->get_login($_POST["usu_correo"],$_POST["usu_pass"]);
            if(is_array($datos)==true and count($datos)>0){
                echo "1";
            }else{
                echo "0";
            }
            break;

        case "accesosocial":
            $datos=$usuario->get_login_social($_POST["usu_correo"]);
            if(is_array($datos)==true and count($datos)>0){
                echo "1";
            }else{
                echo "0";
            }
            break;

        case "registro":
            $datos=$usuario->get_correo($_POST["usu_correo"]);
            if(is_array($datos)==true and count($datos)>0){
               echo "1";
            }else{
                $usuario->register_usuario($_POST["usu_nom"],$_POST["usu_correo"],$_POST["usu_pass"]);
                echo "0";
            }
            break;
    }
