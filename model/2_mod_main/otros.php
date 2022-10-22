<?php 
include("../../assets/bbdd_proyecto/DataBase.php");
 
 
?>
<link rel="stylesheet" type="text/css" href="../../assets/css/theme-1.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<body>

        <section>
            <div class="container">
                <div class='col-md-12'style="
    margin: 50px 50px 50px 50px;
">

       <h1>Consultar Coordinadores</h1>
       <br>
        
          </div><!--//col-->
                <table class="table" >
                    <thead class="table-success table-striped" >
                        <tr>
                            <th style="padding: 10px 10px 10px 20px;">Id</th>
                            <th style="padding: 10px 10px 10px 20px;">Oficina</th>
                            <th style="padding: 10px 10px 10px 20px;">Nombre</th>
                            <th style="padding: 10px 10px 10px 20px;">Apellido</th>
                            <th style="padding: 10px 10px 10px 20px;">Telefono</th>
                            <th style="padding: 10px 10px 10px 20px;">Correo</th>
                            
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                        $sql="SELECT DISTINCT * FROM coordinador INNER JOIN usuarios on id_usuario = id_coordinador";
                        $result_create=mysqli_query($conn,$sql);

                        while($row = mysqli_fetch_assoc($result_create)){ ?>
                            <tr>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['id_coordinador']?></th>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['oficina_coord']?></th>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['nombre_usuario']?></th>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['apellido_usuario']?></th>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['telefono_usuario']?></th>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['correo_usuario']?></th>
                        
                                           
                            </tr>
                            <?php 
                        }
                        ?>
                    </tbody>
                </table>


            </div>
        </div>  
    </div>
<section class=" theme-bg-light">
            <div class="container">
                <div class='col-md-12'style="
    margin-top: 50px;
">

       <h1>Consultar Auxiliares</h1>
       <br>
        
          </div><!--//col-->
                <table class="table" >
                    <thead class="table-success table-striped" >
                        <tr>
                            <th style="padding: 10px 10px 10px 20px;">Id</th>
                            <th style="padding: 10px 10px 10px 20px;">Jornada</th>
                            <th style="padding: 10px 10px 10px 20px;">Nombre</th>
                            <th style="padding: 10px 10px 10px 20px;">Apellido</th>
                            <th style="padding: 10px 10px 10px 20px;">Telefono</th>
                            <th style="padding: 10px 10px 10px 20px;">Correo</th>
                            
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                        $sql="SELECT DISTINCT * FROM auxiliar INNER JOIN usuarios on id_usuario = id_auxiliar";
                        $result_create=mysqli_query($conn,$sql);

                        while($row = mysqli_fetch_assoc($result_create)){ ?>
                            <tr>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['id_auxiliar']?></th>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['jornada_auxiliar']?></th>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['nombre_usuario']?></th>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['apellido_usuario']?></th>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['telefono_usuario']?></th>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['correo_usuario']?></th>
                        
                            </tr>
                            <?php 
                        }
                        ?>
                    </tbody>
                </table>

                
            </div>
        </div>  
    </div>

    <section class=" theme-bg-light">
            <div class="container">
                <div class='col-md-12'style="
    margin-top: 50px;
">

       <h1>Consultar Directores de Curso</h1>
       <br>
        
          </div><!--//col-->
                <table class="table" >
                    <thead class="table-success table-striped" >
                        <tr>
                            <th style="padding: 10px 10px 10px 20px;">Id</th>
                            <th style="padding: 10px 10px 10px 20px;">Nombre</th>
                            <th style="padding: 10px 10px 10px 20px;">Apellido</th>
                            <th style="padding: 10px 10px 10px 20px;">Telefono</th>
                            <th style="padding: 10px 10px 10px 20px;">Correo</th>
                            
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                        $sql="SELECT DISTINCT * FROM director INNER JOIN usuarios on id_usuario = idDirector";
                        $result_create=mysqli_query($conn,$sql);

                        while($row = mysqli_fetch_assoc($result_create)){ ?>
                            <tr>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['idDirector']?></th>
            
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['nombre_usuario']?></th>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['apellido_usuario']?></th>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['telefono_usuario']?></th>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['correo_usuario']?></th>
                        
                            </tr>
                            
                            <?php 
                        }
                        ?>
                    </tbody>
                </table>

                
            </div>
        </div>  
    </div>
    <div class="btn-group dropright" style="padding-top: 50px;"
>
  <button  type="button" class="btn btn-secondary" style="
    border-left-width: 0px;
    margin-left: 80px;
"><a href="../../index_admin.php"> 
     <i class="bi bi-arrow-return-left"></i></i>
  </button>
  
      <button  type="button" class="btn btn-secondary" style="
    border-left-width: 0px;
    margin-left: 80px;
"><a href="../../model/4_mod_reports/reporteOtros_pdf.php" target="_blank"> 
  <i class="bi bi-filetype-pdf"></i>
  </button>

      <button  type="button" class="btn btn-secondary" style="
    border-left-width: 0px;
    margin-left: 80px;
"><a href="../../model/4_mod_reports/reporteOtros_xls.php" target="_blank"> 
<i class="bi bi-file-earmark-spreadsheet"></button>

  </div>
</body></div>
            
</section>
<footer class="footer text-center py-4">
      <small class="copyright">lUNCHY K. Oficial Colombia 2022 © </small>
    </footer> 
