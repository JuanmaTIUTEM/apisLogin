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
<style type="text/css">
	.w-30{
		width: 30%;
		padding: 10px;
	}
	.img{
		width: 5em;
		height: 5em;
	}
</style>
<body>
	<?php 
		print_r($_SESSION);
			 
	?>

	<main class="d-flex flex-column bg-light">
		  
		<div class="p-2">
			<nav class="navbar navbar-expand-sm bg-success navbar-dark">
			  <div class="d-flex justify-content-between">
				    <div>
				    	<ul class="navbar-nav">
				    	  <li class="nav-item">
				    	    <a class="nav-link active" href="#">
				    	    	<img src="<?php echo base_url() . "assets/images/logo.png" ?>" class="img">
				    	    </a>
				    	    </li>
				    	</ul>	
				    </div>
				    <div>
				    	<h2><?php echo $_SESSION['userName'] . " " . $_SESSION['userLName'] ?></h2>
				    </div>

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
					<div id="vwusuarios" class="w-50 border border-danger">
						<h4>Usuarios <hr></h4>
						<div id="listaUsuarios" class="d-flex flex-row justify-content-around">
							<div class="table-responsive">
							  <table class="table">
							    <thead>
							         <tr>
							           <th>ID</th>
							           <th>Nombre Completo</th>
							           <th>Email</th>
							           <th>Tipo</th>
							         </tr>
							       </thead>
							       <tbody>
							            
							  
						<?php 

							if(isset($users)){
								foreach ($users as $user) {
									//print_r($users);
						?>
						
							<tr>
							  <td><?php echo $user['user_code']; ?></td>
							  <td><?php echo $user['first_name']. " ". $user['last_name'] ?></td>
							  <td><?php echo $user['email']; ?></td>
							  <td><?php echo $user['userType']; ?></td>
							</tr>
								<!--<div class="card">
								  <img class="card-img-top" src="<?php echo base_url() . "assets/images/user.png" ?>" alt="Card image">
								  <div class="card-body">
								    <h4 class="card-title"><?php echo $user['first_name']. " ". $user['last_name'] ?></h4>
								    <p class="card-text">Some example text.</p>
								    <a href="#" class="btn btn-sm btn-primary"><?php echo $user['user_code']; ?></a>
								  </div>
								</div>-->
							
										
						<?php  	}
							}	
						 ?>
						   </table>
						 </div>
					</div>
						


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
<footer class="d-flex justify-content-center bg-dark">
	<div class="p-2 text-white"> 
		<p>Universidad Tecnológica de Manzanillo</p>
	</div>
</footer>
</html>