<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>RioTour</title>
</head>
<body>
   
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <div class="container-fluid">
  <img src="Logo.png" alt="Logo" width="40px" height="40px" >
    <a class="navbar-brand" href="#">RioTour</a> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Home.php">Home</a>
        </li>
    
      </ul>
      
      <form class="d-flex m-2" action="Buscar.php" method="post">
        
      <select name="Buscar" class="form-select m-1" aria-label="Default select example">
      <option selected>Ciudad</option>
      <option>Barranquilla</option>
      <option>Santa Marta</option>
      <option>RioHacha</option>
      </select>

        <button class="btn btn-dark" type="submit">Buscar</button>
      </form>

      <form class="m-1" action="Logout.php">
      <button type="submit" class="btn btn-danger btn-lg">
      <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Log Out
      </button>
      </form>
      
      
    </div>
  </div>
</nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>