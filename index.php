<?php 
// include'assets/bbdd_proyecto/DataBase.php';
  if (isset($_SESSION['id'])) {
    $records = $conn->prepare('SELECT id_usuario, correo_usuario, contraseña_usuario FROM usuarios WHERE id_usuario = :id');
    $records->bindParam(':id_usuario', $_SESSION['id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }  

if(!isset($_REQUEST['id'])) {
  require_once 'view/business/header.php';
  require_once 'model/0_mains/index.main.php';
  require_once 'view/business/footer.php';
  
 }

?>


