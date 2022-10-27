<?php 
    session_start();
    include("con_db.php");

    $buscar = trim($_POST['Buscar']);
    $mostrar = '';
  

		$sql="SELECT * FROM `lugares` WHERE Ciudad = '$buscar'";
		$result=mysqli_query($conexion,$sql);

    if(!isset($result)){
      $mostrar ='Error al buscar los requerimientos';
  }else{
            while($valores=mysqli_fetch_array($result)){
		 
                $mostrar = $mostrar. 
                '<div class="container  text-center">
                <div class="row d-flex justify-content-center">'.
                
                '<div class="col-sm d-flex justify-content-center m-3">'.
                 $valores['MapsUrl']. 
                '<div class="card" style="width: 18rem;">
                <img src="'. $valores['ImgUrl']. '" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">'. $valores['Lugar']. ' - '. $valores['Ciudad']. '</h5>
                  <p class="card-text">'. $valores['Descripcion']. '</p>
                </div>
              </div>'. '</div>'.
              '</div>'. '</div>';
        }
      }
		
      include("EmpHome.php");
        echo $mostrar
	 ?>