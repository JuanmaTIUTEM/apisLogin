<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sitio principal Admin</title>
	<!-- Latest compiled and minified CSS -->
	<link href="http://localhost/apisLogin/assets/bootstrap5/css/bootstrap.min.css" rel="stylesheet">

	<!-- Latest compiled JavaScript -->
	<script src="http://localhost/apisLogin/assets/bootstrap5/js/bootstrap.bundle.min.js"></script>

</head>
<body>
	<?php 
		//session_start();
		print_r($_SESSION); 
	?>

	<main class="d-flex flex-column bg-light">
		  
		<div class="p-2">
			<nav class="navbar navbar-expand-sm bg-success navbar-dark">
			  <div class="container-fluid">
			    <ul class="navbar-nav">
			      <li class="nav-item">
			        <a class="nav-link active" href="#">Active</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Link</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Link</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link disabled" href="#">Disabled</a>
			      </li>
			    </ul>
			  </div>
			</nav>
		</div>
		<div id="cuerpo" class="d-flex flex-wrap ">
			<div id="menuLateral" class="d-flex flex-column w-25 border border-primary align-self-strech">
				<div id="titleMenu">
					<h3 class="text-center">Menu <hr></h3>
				</div>
				<div>
					<ol>
						<li>
							<a href="#">Opcion 1</a>
						</li>
						<li>
							<a href="#">Opcion 2</a>
						</li>
						
					</ol>
				</div>
			</div>
			<div id="dashboard" class="d-flex flex-column w-75 border border-success align-self-start">
				<div class="d-flex flex-wrap">
					<div id="vwlineamientos" class="w-50 border border-danger">
						<h4>Lineamientos <hr></h4>
					</div>
					<div id="vwprestamos" class="w-50 border border-secondary">
						<h4>Préstamos <hr></h4>
					</div>
				</div>
				<div  class="d-flex flex-wrap">
					<div id="vwlaboratorios" class="w-50 border border-danger">
						<h4>Laboratorios <hr></h4>
					</div>
					<div id="vwcontacto" class="w-50 border border-secondary">
						<h4>Contacto <hr></h4>
					</div>
				</div>
			</div>
		</div>
		
	</main>


</body>
<footer>
	
</footer>
</html>