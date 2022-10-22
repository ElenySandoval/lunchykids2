<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Perfil Admin</title>
	
	<!-- Google Fonts -->
	<link href="./index_admin_files/css" rel="stylesheet">
	
	<!-- FontAwesome JS -->
    <script defer="" src="assets/css/index_admin_files/testimonials.js.descarga"></script>
    
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="assets/css/tiny-slider.css">
	<!-- Theme CSS -->  
	<link id="theme-style" rel="stylesheet" href="assets/css/theme-1.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head> 

<body >
	
	<header class="header text-center" style="background: #B39B7B;"style="scrollbar background: #9C7149;">	    
		<div class="force-overflow">
			<h1 class="blog-name pt-lg-4 mb-0"><a class="no-text-decoration">Perfil Admin</a></h1>
			
			<nav class="navbar navbar-expand-lg navbar-dark" >
				
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation" >
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<div id="navigation" class="collapse navbar-collapse flex-column">
					<div class="profile-section pt-3 pt-lg-0">
						<img class="profile-image mb-3 rounded-circle mx-auto" src="assets/img/GESTION.png" alt="image">			
						
						<div class="bio mb-3">Bienvenido a tu perfil en Gestión de Refrigerios.</div><!--//bio-->
						
					</div>
					
					<!--//profile-section-->
					
					<ul class="navbar-nav flex-column text-start">
				
					<li class="nav-item">
							<a class="nav-link" href="Area_trabajo.php" target="area" ><i class="fas fa-laptop-code fa-fw me-2"></i>Inicio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="model/1_users/create_user.php" target="area"><i class="fas fa-briefcase fa-fw me-2"></i>Crear Usuario</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="model/1_users/create_ref.php" target="area"><i class="fas fa-briefcase fa-fw me-2"></i>Refrigerios</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="model/2_mod_main/create_cur.php" target="area"><i class="fas fa-briefcase fa-fw me-2"></i>Cursos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="model/1_users/go_consul.php" target="area"><i class="fas fa-blog fa-fw me-2"></i>Consultar</a>
							
						</li>
					</ul>
					
					<!-- Split dropright button -->
<div class="btn-group btn-group-lg" style="margin: 45px "
>
  <button type="button" class="btn btn-secondary"style="
    width: 74px;
    height: 68px;
    padding-left: 0px;
    padding-right: 0px;
    padding-top: 0px;
    padding-bottom: 0px;
    border-radius: 50px;
"><a href="controller/Logout.php">
                <i class="bi bi-power"></i>
              </button></a>

  </div>
</div>
					    
					</div><!--//cerrar sesion-->
					
				</div>
			</nav>
		</div><!--//force-overflow-->
	</header>
	
		<!-- Area de trabajo -->
		<main class="overview-section p-3 p-lg-5">
			<div class="container">
				<div class="col-md-12">
					
     <iframe class="col-md-8 col-lg-12" name="area" src="Area_trabajo.php"  style="height: 620px;"   
></iframe>
</main>



	<!-- Javascript -->
	<script src="./index_admin_files/popper.min.js.descarga"></script> 
	<script src="./index_admin_files/bootstrap.min.js.descarga"></script>
	
	<script src="./index_admin_files/tiny-slider.js.descarga"></script>
	<script src="./index_admin_files/testimonials.js.descarga"></script>