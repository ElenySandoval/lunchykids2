<?php 
include("../../assets/bbdd_proyecto/DataBase.php");

?>
<link rel="stylesheet" type="text/css" href="../../assets/css/theme-1.css">

<body>
        <section class=" theme-bg-light">
            <div class="container">
                <div class='col-md-12'style="
    margin-top: 50px;
">

     <?php if (isset($_SESSION['message'])) { ?>
    <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
    <button type="button"  data-dismiss="alert" >
        <span aria-hidden="true">&times;</span>
    </button>
      </div>
      <?php session_unset(); } ?>

       <h1>Consultar Usuarios</h1>
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
                                <th> <a href="update_user.php?id=<?php echo $row['id_usuario']?>" class="btn btn-secondary">Editar </a></th>
                                 <th><a href="delete_user.php?id=<?php echo $row['id_usuario']?>" class="btn btn-secondary">Eliminar</a></th>  
                                                                      
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
    Regresar
  </button>

  </div>
</div>
</body>
</div>
            
</section>

<footer class="footer text-center py-4">
      <small class="copyright">lUNCHY K. Oficial Colombia 2022 © </small>
    </footer> 
