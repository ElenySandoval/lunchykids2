<?php

include("../../assets/bbdd_proyecto/DataBase.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM  usuarios  WHERE id_usuario  = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Oops... Algo salió mal. Intentalo de nuevo");
  }
  $_SESSION['message'] = 'Usuario eliminado.';
  $_SESSION['message_type'] = 'danger';
  header('Location: consultar_user.php');
}

?>
