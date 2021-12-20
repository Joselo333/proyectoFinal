<?php 
    include("conexion.php");
    $con=conectar();
    $id=$_GET['id']; 

    $sql="SELECT *  FROM formulario WHERE ID ='$id' ";
    $query=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="es">
  <head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/footers/">
    <link href="boot/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <link rel="stylesheet" href="css/inicio.css">
    <title>Registro</title>
  </head>

<body class="body-background">
<div>
    <!--barra navegación-->
    <!-- Navbar -->
    <div class="fixed-top"><nav class="navbar navbar-expand-lg navbar-light bg-dark" >
    <div class="container-fluid">
      <a class="navbar-brand text-light" href="#">🛒MarketPlace</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="btn btn-outline-light" aria-current="page" href="buscar.php"><</a>&nbsp&nbsp
          <a class="btn btn-outline-light" aria-current="page" href="login.php">Salir</a>
          &nbsp&nbsp
          
        </div>
      </div>
    </div>
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
         
      <li class="nav-item">
        <a class="nav-link active text-white" href="#">Actualizar&nbsp&nbsp&nbsp&nbsp</a>
      </li>
      <li class="nav-item">
        <img src="img/login_usuario.png" width="40" height="40" >
      </li>
      <li class="nav-item">
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      </li>

    </ul>
  </nav>
</div>
  <br>
  <!--Fin barra de navegacion-->

    <!--Formulario-->
    
    <div class="container shadow p-3 mb-5 rounded bg-white mt-5">
      <div class="row">
        <h5 class="display-1 text-dark text-center">Actualiza tus datos</h5>
        <div class="col-3"></div>
        <div class="col-6">
                    <?php 
                        while($row=mysqli_fetch_array($query)){
                    ?>
          <form action="update.php" method="POST">
            <input type="hidden" value="<?php  echo $row['ID']?>" name="ID">
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Nombre:</label>
              <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $row['nombre']?>">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Apellidos:</label>
              <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo $row['apellidos']?>">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">RUT:</label>
              <input type="text" class="form-control" id="rut" name="rut" value="<?php echo $row['rut']?>">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Usuario:</label>
              <input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $row['usuario']?>">
            </div> 
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Contraseña:</label>
              <input type="password" class="form-control" id="contraseña" name="contraseña" value="<?php echo $row['contraseña']?>">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Dirección:</label>
              <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $row['direccion']?>">
            </div>
            <div class="mb-3">
              <label for="flexRadioDefault1" class="form-label">Sexo:</label>
            
            <select class="form-select" name="sexo" id="state" >
                <option selected="true"><?php  echo $row['sexo']?></option>
                <option>Masculino</option>
                <option>Femenino</option>
                <option>Otro</option>
            </select>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Fecha nacimiento:</label>
              <input type="date" class="form-control" id="nacimiento" name="nacimiento" value="<?php echo $row['nacimiento']?>">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Edad:</label>
              <input type="number" class="form-control" id="Edad"  min="1" max="100" name="edad" value="<?php echo $row['edad']?>">
            </div>  
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email:</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="<?php echo $row['email']?>">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </form>
          </div>
            <?php
                        }
            ?>
        </div>
      </div>
    </div>






         





    
<!-- Footer -->
    <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
          <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
              <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
          </svg>
          </a>
          <span class="text-muted">&copy; 2021 Agustín-Javier-José, Inc</span>
        </div>
    
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
          <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
          <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
          <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
        </ul>
      </footer>
    </div>
<!-- Footer -->

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="facebook" viewBox="0 0 16 16">
    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
  </symbol>
  <symbol id="instagram" viewBox="0 0 16 16">
      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
  </symbol>
  <symbol id="twitter" viewBox="0 0 16 16">
    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
  </symbol>
</svg>
</body>

 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</div>
</html>