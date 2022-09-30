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

       <h1>Consultar Coordinadores</h1>
       <br>
        
          </div><!--//col-->
                <table class="table" >
                    <thead class="table-success table-striped" >
                        <tr>
                            <th style="padding: 10px 10px 10px 20px;">Id</th>
                            <th style="padding: 10px 10px 10px 20px;">Oficina</th>
                            
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                        $sql="SELECT *  FROM coordinador";
                        $result_create=mysqli_query($conn,$sql);

                        while($row = mysqli_fetch_assoc($result_create)){ ?>
                            <tr>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['id_coordinador']?></th>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['oficina_coord']?></th>
                                           
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
                            
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                        $sql="SELECT *  FROM auxiliar";
                        $result_create=mysqli_query($conn,$sql);

                        while($row = mysqli_fetch_assoc($result_create)){ ?>
                            <tr>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['id_auxiliar']?></th>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['jornada_auxiliar']?></th>
                                           
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
                            
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                        $sql="SELECT *  FROM director";
                        $result_create=mysqli_query($conn,$sql);

                        while($row = mysqli_fetch_assoc($result_create)){ ?>
                            <tr>
                                <th style="padding: 10px 10px 10px 10px;"><?php  echo $row['idDirector']?></th>
                        
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
