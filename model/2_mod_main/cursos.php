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
        <section>
            <div class="container">
                <div class='col-md-12'style="
    margin: 50px 50px 50px 50px;
">
<div class="row">
  <div class="col-lg-9">

    <h1>Consultar Cursos</h1></div>

    <div class="col-lg-3">
      <div class="btn-group-lg" role="group" aria-label="Second group" style="padding-left: 50px;">
    <button type="button" class="btn btn-secondary" style="margin-right:10px; ">
    <a href="../../index_admin.php"><i class="bi bi-arrow-return-left"></i></button></a>
    
  <div class="btn-group" role="group" aria-label="Third group">
    <button type="button" class="btn btn-secondary"><a href="../4_mod_reports/reporteCur_pdf.php "target="_blank">

      <i class="bi bi-filetype-pdf"></i>

    </button></a>
  </div>
  <div class="btn-group" role="group" aria-label="Third group">
    <button type="button" class="btn btn-secondary"><a href="../4_mod_reports/reporteCur_xls.php"target="_blank">

      <i class="bi bi-file-earmark-spreadsheet"></i>

    </button></a>
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
                                       <th><a href="delete_cur.php?id=<?php echo $row['id_curso']?>" class="btn btn-secondary"><i class="bi bi-trash"></i></a></th>                     
                            </tr>
                            <?php 
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>  
    </div>

    
</body></div>
            
</section>
<footer class="footer text-center py-4">
      <small class="copyright">lUNCHY K. Oficial Colombia 2022 © </small>
    </footer> 
