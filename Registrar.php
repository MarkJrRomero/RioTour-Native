<?php
include('con_db.php');
session_start();

$usuario = trim($_POST['Usuario']);
$contraseña = trim($_POST['Contraseña']);
$nombres = trim($_POST['Nombres']);
$apellidos = trim($_POST['Apellidos']);
$telefono = trim($_POST['Telefono']);
$correo = trim($_POST['Correo']);
$ID_Usuario = 1;



if (strlen($usuario) >= 1 &&  strlen($contraseña) >= 1 && strlen($nombres) >= 1
    && strlen($apellidos) >= 1 && strlen($telefono) >= 1 && strlen($correo) >= 1
    
    ) {

        $consulta= "INSERT INTO `usuarios`(`Usuario`, `Contraseña`, `Nombres`, `Apellidos`, `Telefono`, `Correo`, ID_TipoUsuario) 
        VALUES ('$usuario','$contraseña','$nombres','$apellidos','$telefono','$correo', $ID_Usuario)";
        
        
        $resultado=mysqli_query($conexion,$consulta);
        
        if($resultado){
            

            $_SESSION['user'] = $usuario;
            header("location:ENCUESTA/Encuesta.html");

            $_POST[''] = "";
            $_POST['nombre'] = "";
            $_POST['direccion'] = "";
            $_POST['telefono'] = "";
            $_POST['ID_TipoUsuario'] = "";
            $_POST['contraseña'] = "";

        }else{
        
          ?>
          <?php
          include("Registrar.html");
        
        ?>
         <Script>swal("Ops Algo Salio Mal!", "Error al registrar", "error");</Script>
        <?php
            }



    }else{


        ?>
          <?php
          include("Registrar.html");
        
        ?>
         <Script>swal("Llene todo los campos por favor", "Error campos Vacios", "error");</Script>
        <?php


    }