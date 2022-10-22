<?php 
include "../../assets/bbdd_proyecto/DataBase.php";
header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
header("Content-Disposition: attachment; filename= ReporteCursos.xls");
 ?>


                 <table class="table" >
                    <thead class="table-success table-striped" >
                        <tr>
                            <th style="padding: 10px 10px 10px 20px;">Id</th>
                            <th style="padding: 10px 10px 10px 20px;">Auxiliar</th>
                            <th style="padding: 10px 10px 10px 20px;">Director</th>
                            <th style="padding: 10px 10px 10px 20px;">Estado</th>
                            <th style="padding: 10px 10px 10px 20px;">Sede</th>
                            <th style="padding: 10px 10px 10px 20px;">Alumnos</th>
                            
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                        $sql="SELECT *  FROM cursos";
                        $result_create=mysqli_query($conn,$sql);
                    
                            while($row = mysqli_fetch_assoc($result_create)){ 
                            
                        ?>
                            <tr>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['id_curso']?></th>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['idAuxiliar_curso']?></th>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['idDirector_curso']?></th>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['estado_curso']?></th>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['sede_curso']?></th>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['cantAlum_curso']?></th>
                                       <th><a href="delete_cur.php?id=<?php echo $row['id_curso']?>" class="btn btn-secondary">Eliminar</a></th>                     
                            </tr>
                            <?php 
                        }
                        ?>
                    </tbody>
                </table>