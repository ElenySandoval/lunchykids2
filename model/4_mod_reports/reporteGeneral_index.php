
<link rel="stylesheet" type="text/css" href="../../assets/css/theme-1.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<?php
error_reporting(0);

 include("../../assets/bbdd_proyecto/DataBase.php");

$where="";
$nombre_usuario=$_POST['nombre_usuario'];
$nombreRol=$_POST['nombreRol'];
$limit=$_POST['registro_usuario'];

////////////////////// BOTON BUSCAR //////////////////////////////////////

if (isset($_POST['buscar']))
{

	if (empty($_POST['nombreRol']))
	{
		$where="where nombre like '".$nombre_usuario."%'";
	}

	else if (empty($_POST['nombre_usuario']))
	{
		$where="where nombreRol='".$nombreRol."'";
	}

	else
	{
		$where="where nombre_usuario like '".$nombre_usuario."%' and nombreRol='".$nombreRol."'";
	}
}
/////////////////////// CONSULTA A LA BASE DE DATOS ////////////////////////

$users="SELECT * FROM usuarios INNER JOIN roles $where $limit";
$resUsuario=$conn->query($users);
$resRol=$conn->query($users);

if(mysqli_num_rows($resUsuario)==0)
{
	$mensaje="<h1>No hay registros que coincidan con su criterio de búsqueda.</h1>";
}
?>


<body>
  <div class="main-wrapper">
    <section class="col p-5 p-lg-5 theme-bg-light">
      <div class="container">
        <div class="col-md-8";
        >
        <div class="col-md-12" style="
        width: 750px;
        ">



        <h1>Generar Reporte</h1>


        <section class="overview-section p-3 p-lg-5">
        <h2 class="section-title font-weight-bold mb-3">¿Cómo Funciona?</h2>

        <div class="section-intro mb-5">En este espacio tendrás la posibilidad de buscar los datos especificos que requieras y generar un reporte .PDF o .XLS".</div> 
    </section>
      
        		<form class="form-inline" method="post">
        			<div class="row">
        				<div class="col-lg-6" >
        				<input style="
    margin-bottom: 10px;
"class="form-control mr-sm-2" type="text" placeholder="Nombre" name="nombre_usuario"/>
        				
        			</div>
        			<div class="col-lg-6">
        				<input class="form-control mr-sm-2" type="text" placeholder="Apellido" name="apellido_usuario"/>
        			</div></div>
        			
				
				<select class="form-control" name="nombreRol"style="
    padding-top: 7px;
    padding-bottom: 7px;    margin-bottom: 10px;
">
					<option value="">Rol</option>
					<?php 
					while ($registroRol = $resRol->fetch_array(MYSQLI_BOTH))
						{
							echo '<option value="'.$registroRol['nombreRol'].'">'.$registroRol['nombreRol'].'</option>';
						} 
						?>
						
				</select>

				<select class="form-control" name="registro_usuario"style="
    padding-top: 7px;
    padding-bottom: 7px;
    margin-bottom: 10px;

">
					<option value="">No. de Registros</option>
					<option value="limit 3">3</option>
					<option value="limit 6">6</option>
					<option value="limit 9">9</option>
				</select>

				  <div class="col-lg-3">
				<button class="btn btn-outline-success my-2 my-sm-0"name="buscar" type="submit">Buscar</button>
      <div class="btn-group-lg" role="group" aria-label="Second group" style="margin-top: 10px;">
    </button></a>
   

  <div class="btn-group" role="group" aria-label="Third group">
    <button type="button" class="btn btn-secondary"><a href="../4_mod_reports/reporteUsers_pdf.php "target="_blank">

      <i class="bi bi-filetype-pdf"></i>

    </button></a>
  </div>
  <div class="btn-group" role="group" aria-label="Third group">
    <button type="button" class="btn btn-secondary"><a href="../4_mod_reports/reporteUsers_xls.php"target="_blank">

      <i class="bi bi-file-earmark-spreadsheet"></i>

    </button></a>
  </div>
</div>
  </div>
	
	</form></div>
        	

</nav>

          
       <section>
			
			<table class="table">
				<tr>
					<th>ID Rol</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Correo</th>
				</tr>

				<?php

				while ($registroUsuario = $resUsuario->fetch_array(MYSQLI_BOTH))
				{

					echo'<tr>
						 <td>'.$registroUsuario['nombreRol'].'</td>
						 <td>'.$registroUsuario['nombre_usuario'].'</td>
						 <td>'.$registroUsuario['apellido_usuario'].'</td>
						 <td>'.$registroUsuario['correo_usuario'].'</td>

						 </tr>';
				}
				?>
			</table>

			<?
				echo $mensaje;
			?>
		</section>
    </section>
      <footer class="footer text-center py-4">
      <small class="copyright">lUNCHY K. Oficial Colombia 2022 © </small>
    </footer>

   