<?php

include("../../assets/bbdd_proyecto/DataBase.php");

$idRol='';
$idUser='';
$NameUser='';
$lastnameUser='';
$emailUser='';
$telUser='';
$direcUser='';
$passwordUser='';
$stateUser='';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM usuarios WHERE id_usuario = $id";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
$row = mysqli_fetch_array($result);
$idRol = $row['id_rol'];
$idUser = $row['id_usuario'];
$NameUser = $row['nombre_usuario'];
$lastnameUser = $row['apellido_usuario'];
$emailUser = $row['correo_usuario'];
$telUser = $row['telefono_usuario'];
$direcUser = $row['direccion_usuario'];
$passwordUser = $row['contraseña_usuario'];
$stateUser = $row['estado_usuario'];
  }
}

if (isset($_POST['update_user'])) {
$id = $_GET['id'];
$idRol = $_POST['id_rol'];
$idUser = $_POST['id_usuario'];
$NameUser = $_POST['nombre_usuario'];
$lastnameUser = $_POST['apellido_usuario'];
$emailUser = $_POST['correo_usuario'];
$telUser = $_POST['telefono_usuario'];
$direcUser = $_POST['direccion_usuario'];
$passwordUser = $_POST['contraseña_usuario'];
$stateUser = $_POST['estado_usuario'];


$query = "UPDATE usuarios SET id_rol='$idRol',id_usuario='$idUser',nombre_usuario='$NameUser',apellido_usuario='$lastnameUser',correo_usuario='$emailUser',telefono_usuario='$telUser',direccion_usuario='$direcUser',contraseña_usuario='$passwordUser',estado_usuario='$stateUser' WHERE id = $id";

  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Usuario Actualizado.';
  $_SESSION['message_type'] = 'warning';
  header('Location: consultar_user.php');

}

?>
 <link rel="stylesheet" type="text/css" href="../../assets/css/theme-1.css">

<div > 	
		<section class="section p-3 p-lg-5  theme-bg-light">
			<div class="container">
				<div class='col-md-12'>
          <h1>Actualizar Usuario</h1>
         <form action="update_user.php" method="POST">

            <input type="text" class="form-control mb-3" name="id_rol" placeholder="Editar Rol" value="<?php echo $idRol; ?>">
            <input type="text" class="form-control mb-3" name="id_usuario" placeholder="id " value=" <?php echo $idUser; ?>">
            <input type="text" class="form-control mb-3" name="nombre_usuario" placeholder="Nombres" value="<?php echo $NameUser; ?>">
            <input type="text" class="form-control mb-3" name="apellido_usuario" placeholder="Apellidos" value="<?php echo $lastnameUser; ?>" >
            <input type="text" class="form-control mb-3" name="correo_usuario" placeholder="Correo" value=" <?php echo $emailUser; ?>">
            <input type="text" class="form-control mb-3" name="telefono_usuario" placeholder="Telefono" value="<?php echo $telUser; ?>"> 
            <input type="text" class="form-control mb-3" name="direccion_usuario" placeholder="Dirección" value="<?php echo $direcUser; ?>"> 
            <input type="text" class="form-control mb-3" name="contraseña_usuario" placeholder="Contraseña" value="<?php echo $passwordUser; ?>"> 
            <input type="text" class="form-control mb-3" name="estado_usuario" placeholder="Estado" value="<?php echo $stateUser; ?>"> 
            <button type="submit" class="btn btn-primary" name="update_user">Actualizar</button>
</form>
<div class="btn-group dropright" style="padding-top: 50px;"
>
  <button  type="button" class="btn btn-secondary" style="
    border-left-width: 0px;
    margin-left: 80px;
"><a href="consultar_user.php"> 
    Regresar
  </button>

  </div>
</div>
 
</div>
  <footer class="footer text-center py-4">
      <small class="copyright">lUNCHY K. Oficial Colombia 2022 © </small>
    </footer>
    
</html>