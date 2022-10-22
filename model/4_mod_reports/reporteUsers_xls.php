<?php 
include "../../assets/bbdd_proyecto/DataBase.php";
header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
header("Content-Disposition: attachment; filename= ReporteUsers.xls");
 ?>

               <table class="table" >
               	<caption>Reporte</caption>
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