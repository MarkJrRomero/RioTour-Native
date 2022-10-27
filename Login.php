<?php
session_start();

include('con_db.php');
$usuario=$_POST['Usuario'];
$contraseña=$_POST['Contraseña'];

if($usuario == "ADMIN" && $contraseña == "ADMIN"){

  $consulta= "SELECT `Usuario`, `Contraseña` 
  FROM `usuarios` WHERE Usuario = '$usuario' AND Contraseña = '$contraseña'";
  
  
  $resultado=mysqli_query($conexion,$consulta);
  $results = mysqli_fetch_assoc($resultado);
  $filas=mysqli_num_rows($resultado);
  
  if($filas){
  
      $_SESSION['user'] = $results['Usuario'];
      header("location:ADMIN/Admin.html");
  
  }else{
    ?>
    <?php
    include("index.html");
    ?>
    <Script>swal("Ops Algo Salio Mal!", "Error de autentificacion", "error");</Script>
    <?php
      }


}else{

$consulta1= "SELECT `Usuario`, `Contraseña` 
FROM `usuarios` WHERE Usuario = '$usuario' AND Contraseña = '$contraseña'";


$resultado1=mysqli_query($conexion,$consulta1);
$results1 = mysqli_fetch_assoc($resultado1);
$filas1=mysqli_num_rows($resultado1);

if($filas1){

    $_SESSION['user'] = $results['Usuario'];
    header("location:HOME/Home.php");

}else{
  ?>
  <?php
  include("index.html");
  ?>
  <Script>swal("Ops Algo Salio Mal!", "Error de autentificacion", "error");</Script>
  <?php
    }
  }  
