<?php 
	if(isset($error)){
?>		
	<script type="text/javascript">
		alert("Usuario o contraseña no válidos");
	</script>
<?php 
	}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>

	<!-- Latest compiled and minified CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu|Lora">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather|Open+Sans">
</head>
<style>
	.w-80{
		margin-top: 10%;
		margin-left:25%;
	    width: 50%;
	    padding: 10px;
	    height: 40%;
	}

	.bg-lightgreen{
		background-color: #D8EEE0;
	}

</style>

<body class="d-flex flex-column ">
	<section class="d-flex flex-column bg-lightgreen w-80 rounded shadow" >
		<div>
			<h3 class="text-center">Bienvenido! <hr></h3>
		</div>

		<div class="d-flex justify-content-center text-center">
			<div class =" w-25">
				<form action="<?php echo site_url('log_in');?>" method="POST">
				  <div class="mb-3 mt-3">
				    <label for="username" class="form-label">Usuario:</label>
				    <input type="text" class="form-control" id="username" placeholder="Usuario" name="username" required>
				  </div>
				  <div class="mb-3">
				    <label for="password" class="form-label">Contraseña:</label>
				    <input type="password" class="form-control" id="password" placeholder="Contraseña" name="password" required>
				  </div>
				  
				  <button type="submit" class="btn btn-outline-success">INGRESAR</button>
				</form>
			</div>
		</div>
	</section>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>