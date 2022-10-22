<?php 
include "../../assets/bbdd_proyecto/DataBase.php";
header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
header("Content-Disposition: attachment; filename= ReporteOtros.xls");
 ?>

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