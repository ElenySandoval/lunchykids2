<?php 
include("../../assets/bbdd_proyecto/DataBase.php");
    
?>
<link rel="stylesheet" type="text/css" href="../../assets/css/theme-1.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<body>
  <style type="text/css">
        a:link, a:visited, a:active {
            text-decoration:none;
        }
    </style>
        <section >
            <div class="container">
                <div class='col-md-12'style="
    margin: 50px 50px 50px 50px;
">

     <?php if (isset($_SESSION['message'])) { ?>
    <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
    <button type="button"  data-dismiss="alert" >
        <span aria-hidden="true">&times;</span>
    </button>
      </div>
      <?php session_unset(); } ?>

<div class="row">
  <div class="col-lg-9">

    <h1>Consultar Usuarios</h1></div>

    <div class="col-lg-3">
      <div class="btn-group-lg" role="group" aria-label="Second group" style="padding-left: 50px;">
    <button type="button" class="btn btn-secondary" style="margin-right:10px; ">
    <a href="../../index_admin.php"><i class="bi bi-arrow-return-left"></i></button>
    
  <div class="btn-group" role="group" aria-label="Third group">
    <button type="button" class="btn btn-secondary"><a href="../4_mod_reports/reporteUsers_pdf.php "target="_blank">

      <i class="bi bi-filetype-pdf"></i>

    </button>
  </div>
  <div class="btn-group" role="group" aria-label="Third group">
    <button type="button" class="btn btn-secondary"><a href="../4_mod_reports/reporteUsers_xls.php"target="_blank">

      <i class="bi bi-file-earmark-spreadsheet"></i>

    </button>
  </div>
</div>
  </div>
</div>
       </div>

       <br>
        
          </div><!--//col-->
                <table class="table" >
                    <thead class="table-success table-striped" >
                        <tr>
                            <th style="padding: 10px 10px 10px 20px;">Rol</th>
                            <th style="padding: 10px 10px 10px 20px;">Id</th>
                            <th style="padding: 10px 10px 10px 20px;">Nombres</th>
                            <th style="padding: 10px 10px 10px 20px;">Apellidos</th>
                            <th style="padding: 10px 10px 10px 20px;">Correo</th>
                            <th style="padding: 10px 10px 10px 20px;">Telefono</th>
                            <th style="padding: 10px 10px 10px 20px;">Dirección</th>
                            <th style="padding: 10px 10px 10px 20px;">Contraseña</th>
                            <th style="padding: 10px 10px 10px 20px;">Estado</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                        $sql="SELECT *  FROM usuarios";
                        $result_create=mysqli_query($conn,$sql);
                        
                            while($row = mysqli_fetch_assoc($result_create)){
                        

                         ?>
                            <tr>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['id_rol']?></th>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['id_usuario']?></th>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['nombre_usuario']?></th>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['apellido_usuario']?></th>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['correo_usuario']?></th> 
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['telefono_usuario']?></th>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['direccion_usuario']?></th>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['contraseña_usuario']?></th>   
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['estado_usuario']?></th>  
                                <th> <a href="update_user.php?id=<?php echo $row['id_usuario']?>" class="btn btn-secondary"><i class="bi bi-pencil-square"></i> </a></th>
                                 <th><a href="delete_user.php?id=<?php echo $row['id_usuario']?>" class="btn btn-secondary"><i class="bi bi-trash"></i></a></th>  
                                                                      
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
  </div>
</div>
</body>
</div>
            
</section>

<footer class="footer text-center py-4">
      <small class="copyright">lUNCHY K. Oficial Colombia 2022 © </small>
    </footer> 
