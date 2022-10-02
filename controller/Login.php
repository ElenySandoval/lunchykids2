<?php

include '../assets/bbdd_proyecto/DataBase.php';

 if (isset($_SESSION['id'])) {
    header('Location: Login.php');
  }

  if (!empty($_POST['correo_usuario']) && !empty($_POST['contraseña_usuario'])) {
    $records = $conn->prepare('SELECT correo_usuario, contraseña_usuario FROM usuarios WHERE 1');
    $records->bindParam(':correo_usuario', $_POST['correo_usuario']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['contraseña_usuario'], $results['contraseña_usuario'])) {
      $_SESSION['id'] = $results[':id_usuario'];
      header("Location: ../index_admin.php");
    } else {
      echo 'Sorry, those credentials do not match';
    }
  }

	?>


<link rel="stylesheet" type="text/css" href="../assets/css/theme-1.css">

<body>
    <section class="row theme-bg-dark">
      <div class="container">
        <div class="row";
        >
        <div class="row" style="
        width: 750px;
        ">

                 <!-- Formulario Modal Ingreso -->
     <br>
     <div class="card text-center"style="
    margin-top: 100px;
    margin-left: 300px;
    margin-bottom: 100px;
">
  <div class="card-header"> <h1 class="text-center" >INGRESAR </h1>
  </div>
  <div class="card-body">
    <p class="card-text">
      <form action="../index_admin.php" method="POST" style="
    width: 500px;
    margin-left: 80px;
    margin-top: 30px;
">
    <input type="email" class="form-control" name="correo_usuario" aria-describedby="emailHelp" placeholder="Ingresa tu correo" style="
    margin-bottom: 30px;
">
      <input type="password" class="form-control" name="contraseña_usuario" placeholder="Ingresa tu contraseña" style="
    margin-bottom: 30px;
">  
<input type="submit" value="Submit"><a href="../index_admin.php"></a>
    </form>
    </p>
    
  </div>
  <div class="card-footer text-muted"><a href="../index.php">¿No tienes una cuenta? Vuelve al Inicio</a>

 </div>
</div>
  
              </div><!--//col-->
              
            </div>
          </div>  
        </div>
      </body>  
    </section>
      <footer class="footer text-center py-4">
      <small class="copyright">lUNCHY K. Oficial Colombia 2022 © </small>
    </footer>

		