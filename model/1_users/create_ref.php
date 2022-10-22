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

        if (isset($_POST['datosRef'])){
          $IdCor=$_POST['id_coordinador_refri'];
          $IdAux=$_POST['id_auxiliar_refri'];
          $Date=$_POST['fecha_refrigerio'];
          $Time=$_POST['hora_refrigerio'];
          $Type=$_POST['tipo_refrigerio'];
          $Desc=$_POST['descripcion_refrigerio'];
          

          $query = "INSERT INTO refrigerios (id_coordinador_refri, id_auxiliar_refri, fecha_refrigerio, hora_refrigerio, tipo_refrigerio, descripcion_refrigerio) VALUES ('$IdCor','$IdAux', '$Date','$Time','$Type','$Desc')";

          $result = mysqli_query($conn, $query);
          if(!$result) {
            die("Oops... Algo salió mal. Intentalo de nuevo");
          }
          $_SESSION['message'] = 'Datos subidos correctamente';
          $_SESSION['message_type'] = 'success';
          header('Location: go_consul.php');
        }


        ?>


        <h1>Refrigerios</h1>

        <section class="overview-section p-3 p-lg-5">
        <h2 class="section-title font-weight-bold mb-3">¿Cómo Funciona?</h2>
        <div class="section-intro mb-5">En este espacio tendrás la posibilidad de ingresar los datos de los refrigerios para ser almacenados en el sistema.</div> </section>
        <form action="create_ref.php" method="POST">

          <div class="row">
            <div class="col"> 
              <input type="text" class="form-control mb-3" name="id_coordinador_refri" placeholder="Id Coordinador">
            </div>
            <div class="col">
              <input type="text" class="form-control mb-3" name="id_auxiliar_refri" placeholder="Id Auxiliar" >
            </div>
          </div>
          <div class="row">
            
            <div class="col"> <input type="text" class="form-control mb-3" name="fecha_refrigerio" placeholder="Fecha"></div></div>

            <div class="col"><input type="text" class="form-control mb-3" name="hora_refrigerio" placeholder="Hora"></div>

            <div class="row">
              <div class="col"><input type="text" class="form-control mb-3" name="tipo_refrigerio" placeholder="Tipo"></div>

              <div class="col"><input type="text" class="form-control mb-3" name="descripcion_refrigerio"
                placeholder="Descripción"></div></div>

                  <button type="submit" class="btn btn-primary" name="datosRef">Crear</button>
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