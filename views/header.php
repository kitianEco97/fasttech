<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo RUTA; ?>/images/logo-fasttech.png">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA; ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo RUTA; ?>/css/estilos.css">
	<meta charset="utf-8">
	<title>Fasttech</title>
	<script type="text/javascript" src="<?php echo RUTA; ?>/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="<?php echo RUTA; ?>/js/bootstrap.min.js"></script>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		  <a href="<?php echo RUTA; ?>"><img src="<?php echo RUTA; ?>/images/logo-fasttech.png" style="width: 50px;"></a>
		  <a style="margin-left: 15px;" class="navbar-brand" href="<?php echo RUTA; ?>">Fasttech</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo RUTA; ?>/views/qui-som.php">¿Quiénes somos?</a>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Productos
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="<?php echo RUTA; ?>/views/prod-sof.php">Softaware</a>
		          <a class="dropdown-item" href="<?php echo RUTA; ?>/views/prod-hard.php">Hardware - soporte </a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="<?php echo RUTA; ?>/views/prod-sis-com.php">Sistemas complejos</a>
		        </div>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0" name="busqueda" action="<?php echo RUTA; ?>/buscar.php" method="get">
		      <input class="form-control mr-sm-2" name="busqueda" type="search" placeholder="Busca algo aqui" aria-label="Search">
		      <button class="btn btn-primary my-2 my-sm-0 fa fa-search" type="submit"> Buscar</button>
		    </form>
		  </div>
		</nav>
	</header>
