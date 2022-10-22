<?php 
include "../../assets/bbdd_proyecto/DataBase.php";
header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
header("Content-Disposition: attachment; filename= ReporteRefrigerios.xls");
 ?>

  <table class="table" >
                    <thead class="table-success table-striped" >
                        <tr>
                            <th style="padding: 10px 10px 10px 20px;">Coordinador</th>
                            <th style="padding: 10px 10px 10px 20px;">Auxiliar</th>
                            <th style="padding: 10px 10px 10px 20px;">Id</th>
                            <th style="padding: 10px 10px 10px 20px;">Fecha</th>
                            <th style="padding: 10px 10px 10px 20px;">Hora</th>
                            <th style="padding: 10px 10px 10px 20px;">Tipo</th>
                            <th style="padding: 10px 10px 10px 20px;">Descripción</th>
                            
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                        $sql="SELECT *  FROM refrigerios";
                        $result_create=mysqli_query($conn,$sql);

                        while($row = mysqli_fetch_assoc($result_create)){ ?>
                            <tr>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['id_coordinador_refri']?></th>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['id_auxiliar_refri']?></th>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['id_refrigerio']?></th>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['fecha_refrigerio']?></th>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['hora_refrigerio']?></th> 
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['tipo_refrigerio']?></th>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['descripcion_refrigerio']?></th>
                            
                                 <th><a href="delete_ref.php?id=<?php echo $row['id_refrigerio']?>" class="btn btn-secondary">Eliminar</a></th>                               
                            </tr>
                            <?php 
                        }
                        ?>
                    </tbody>
                </table>