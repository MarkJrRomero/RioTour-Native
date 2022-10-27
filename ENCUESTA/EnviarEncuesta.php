<?php
include('con_db.php');
session_start();

$usuario = $_SESSION['user'];
$dondEres = trim($_POST['DondeEres']);
$dondeEstas = trim($_POST['DondeEstas']);
$transporte = trim($_POST['Transporte']);
$playa = trim($_POST['Playa']);
$niños = trim($_POST['Niños']);


        $consulta= "INSERT INTO `encuestas`(`Usuario`, `DondeEres`, `DondeEstas`, `Transporte`, `Playa`, `Niños`)
         VALUES ('$usuario','$dondEres','$dondeEstas','$transporte','$playa','$niños')";
        
        
        $resultado=mysqli_query($conexion,$consulta);
        
        if($resultado){
            
            header("location:../HOME/Home.php");

        }else{
        
          ?>
          <?php
          include("Encuesta.html");
        
        ?>
        <Script>alert("ALGO SALIO MAL :C")</Script>
        <?php
            }

