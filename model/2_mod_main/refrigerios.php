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

       <h1>Consultar Refrigerios</h1>
       <br>
        
          </div><!--//col-->
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

</body></div>
            
</section>
<footer class="footer text-center py-4">
      <small class="copyright">lUNCHY K. Oficial Colombia 2022 © </small>
    </footer> 
