
<link rel="stylesheet" type="text/css" href="../../assets/css/theme-1.css">

<body>
  <div class="main-wrapper">
    <section class="col p-5 p-lg-5 theme-bg-light">
      <div class="container">
        <div class="col-md-8";
        >
        <div class="col-md-12" style="
        width: 750px;
        ">

        <?php

        include("../../assets/bbdd_proyecto/DataBase.php");

        if (isset($_POST['create_user'])){
          $idRol=$_POST['id_rol'];
          $idUser=$_POST['id_usuario'];
          $nameUser=$_POST['nombre_usuario'];
          $lastnameUser=$_POST['apellido_usuario'];
          $emailUser=$_POST['correo_usuario'];
          $telUser=$_POST['telefono_usuario'];
          $direcUser=$_POST['direccion_usuario'];
          $passwordUser=$_POST['contraseña_usuario'];
          $stateUser=$_POST['estado_usuario'];

          $query = "INSERT INTO usuarios(id_rol, id_usuario, nombre_usuario, apellido_usuario, correo_usuario, telefono_usuario, direccion_usuario, contraseña_usuario, estado_usuario) VALUES ('$idRol','$idUser', '$nameUser','$lastnameUser','$emailUser','$telUser','$direcUser','$passwordUser','$stateUser')";

          $result = mysqli_query($conn, $query);
          if(!$result) {
            die("Oops... Algo salió mal. Intentalo de nuevo");
          }
          $_SESSION['message'] = 'Usuario creado.';
          $_SESSION['message_type'] = 'success';
          header('Location: go_consul.php');
        }


        ?>


        <h1>Crear Usuario</h1>

        <section class="overview-section p-3 p-lg-5">
        <h2 class="section-title font-weight-bold mb-3">¿Cómo Funciona?</h2>
        <div class="section-intro mb-5">En este espacio tendrás la posibilidad de ingresar los datos nuevos usuarios para ser almacenados en el sistema. Podrás consultarlos posteriormente en "consultar".</div> </section>
        <form action="create_user.php" method="POST">

          <div class="row">
            <div class="col"> 
              <input type="text" class="form-control mb-3" name="id_rol" placeholder="Asignar Rol">
            </div>
            <div class="col">
              <input type="text" class="form-control mb-3" name="id_usuario" placeholder="id">
            </div>
          </div>
          <div class="row">
            <div class="col"> <input type="text" class="form-control mb-3" name="nombre_usuario" placeholder="Nombre"></div>
            <div class="col"> <input type="text" class="form-control mb-3" name="apellido_usuario" placeholder="Apellido"></div></div>

            <div class="col"><input type="text" class="form-control mb-3" name="correo_usuario" placeholder="Correo"></div>

            <div class="row">
              <div class="col"><input type="text" class="form-control mb-3" name="telefono_usuario" placeholder="Telefono"></div>

              <div class="col"><input type="text" class="form-control mb-3" name="direccion_usuario"
                placeholder="Direccion"></div></div>


                <div class="col"><input type="text" class="form-control mb-3" name="contraseña_usuario"
                  placeholder="contraseña"></div>

                  <div class="col"><input type="text" class="form-control mb-3" name="estado_usuario"
                    placeholder="Estado">
                  </div>
                  

                  <button type="submit" class="btn btn-primary" name="create_user">Crear</button>
                </form>
                
              </div><!--//col-->
              
            </div>
          </div>  
        </div>
      </body>  
    </section>
      <footer class="footer text-center py-4">
      <small class="copyright">lUNCHY K. Oficial Colombia 2022 © </small>
    </footer>