
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

        if (isset($_POST['create_cur'])){
          $idCur=$_POST['id_curso'];
          $idAux=$_POST['idAuxiliar_curso'];
          $idDirec=$_POST['idDirector_curso'];
          $sede=$_POST['sede_curso'];
          $estatus=$_POST['estado_curso'];
          $cantAlum=$_POST['cantAlum_curso'];
          

          $query = "INSERT INTO cursos(id_curso, idAuxiliar_curso, idDirector_curso, sede_curso, estado_curso, cantAlum_curso) VALUES ('$idCur','$idAux', '$idDirec','$sede','$estatus','$cantAlum')";

          $result = mysqli_query($conn, $query);
          if(!$result) {
            die("Oops... Algo salió mal. Intentalo de nuevo");
          }
          $_SESSION['message'] = 'Curso creado.';
          $_SESSION['message_type'] = 'success';
          header('Location: go_consul.php');
        }


        ?>


        <h1>Crear Curso</h1>

        <section class="overview-section p-3 p-lg-5">
        <h2 class="section-title font-weight-bold mb-3">¿Cómo Funciona?</h2>
        <div class="section-intro mb-5">En este espacio tendrás la posibilidad de ingresar los datos de nuevos cursos. Podrás consultarlos posteriormente.".</div> </section>
        <form action="create_cur.php" method="POST">

          <div class="row">
            <div class="col"> 
              <input type="text" class="form-control mb-3" name="id_curso" placeholder="Id curso">
            </div>
            <div class="col">
              <input type="text" class="form-control mb-3" name="idAuxiliar_curso" placeholder="Auxiliar">
            </div>
          </div>
          <div class="row">
            <div class="col"> <input type="text" class="form-control mb-3" name="idDirector_curso" placeholder="Director de curso"></div>
            <div class="col"> <select class="form-control" name="sede_curso" placeholder="Sede">
  <option>Sede...</option>
  <option>A</option>  
  <option>B</option>  
  <option>C</option>
</select></div></div>

            <div class="col"><input type="text" class="form-control mb-3" name="estado_curso" placeholder="Estado"></div>

            <div class="row">
              <div class="col"><input type="" class="form-control mb-3" name="cantAlum_curso" placeholder="Cantidad de alumnos"></div>


                  <button type="submit" class="btn btn-primary" name="create_cur">Crear</button>
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