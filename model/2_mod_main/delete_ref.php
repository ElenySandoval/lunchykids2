<?php

include("../../assets/bbdd_proyecto/DataBase.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM  refrigerios WHERE id_refrigerio  = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Oops... Algo salió mal. Intentalo de nuevo");
  }
  $_SESSION['message'] = 'Refrigerio eliminado.';
  $_SESSION['message_type'] = 'danger';
  header('Location: refrigerios.php');
}

?>
