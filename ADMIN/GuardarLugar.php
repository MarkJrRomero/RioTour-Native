<?php
include('con_db.php');
session_start();

$usuario = $_SESSION['user'];
$lugar = trim($_POST['Lugar']);
$ciudad = trim($_POST['Ciudad']);
$imgurl = trim($_POST['ImgUrl']);
$mpsurl = trim($_POST['MapsUrl']);
$descripcion = trim($_POST['Descripcion']);



if (strlen($usuario) >= 1 &&  strlen($lugar) >= 1 && strlen($ciudad) >= 1
    && strlen($imgurl) >= 1 && strlen($mpsurl) >= 1 && strlen($descripcion) >= 1
    
    ) {

        $consulta= "INSERT INTO `lugares`(`UsuarioAdmin`, `Lugar`, `Ciudad`, `ImgUrl`, `MapsUrl`, `Descripcion`)
         VALUES ('$usuario','$lugar','$ciudad','$imgurl','$mpsurl','$descripcion')";
        
        
        $resultado=mysqli_query($conexion,$consulta);
        
        if($resultado){
          
        
          ?>
          <?php
          include("Admin.html");
        
        ?>
        <Script>alert("SE GUARDO EL LUGAR CORRECTAMENTE")</Script>
        <?php
            }else{


        ?>
          <?php
          include("Admin.html");
        
        ?>
        <Script>swal("Ops Algo Salio Mal!", "Error al Guardar lugar", "error");</Script>
        <?php

            }
          }else{


            ?>
              <?php
              include("Admin.html");
            
            ?>
            <Script>swal("Llene todos los campos!", "Error Campos Vacios", "error");</Script>
            <?php
    
                }
    