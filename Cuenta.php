
<!DOCTYPE html>
<html>
<head>
	<title>How To Make Drop Down Menu Using HTML And CSS</title>
	<link rel="stylesheet" type="text/css" href="usuario.css">
	<link rel="stylesheet" type="text/css" href="normalize.css">
	<link rel="stylesheet" type="text/css" href="skeleton.css">
	<script src="JavaScrips/jquery-3.2.1.js" type="text/javascript"></script>
    <script src="JavaScrips/Compras.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    
	<div class="wrapper">
		<nav>
			<h2>U-WORKING-NOW</h2>
			<ul class="links">
				<li><a href="">Inicio</a></li>
				<li><a href="">Sobre Nosotros</a></li>
				<li><a href="">Proximamente</a>
				</li>
				<li><a href="">Contactos</a></li>
			</ul>
		</nav>
		<div id="lista-platillos" class="container">
			<h1 class="encabezado">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
					  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner" >
					  <div class="carousel-item active" >
						<img class="d-block w-50 h-100" id="centro" src="img\carpinteros.jpg"  alt="First slide" >
						<div class="carousel-caption d-none d-md-block">
					  <h5>Carpinteria</h5>
					  
					</div>
						</div>
					  <div class="carousel-item">
						<img class="d-block w-50 h-100" id="centro" src="img\electrisista.jpg" alt="Second slide">
						<div class="carousel-caption d-none d-md-block">
					  <h5>Electricista</h5>
					  
					</div>
					  </div>
					  <div class="carousel-item">
						<img class="d-block w-50 h-100" id="centro" src="img\DOCENTE.jpg" alt="Third slide">
						<div class="carousel-caption d-none d-md-block">
					  <h5>Maestra Particular</h5>
					  
					</div>
					  </div>
					  </div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					  <span class="sr-only"></span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					  <span class="carousel-control-next-icon" aria-hidden="true"></span>
					  <span class="sr-only"></span>
				    </a>
				  </div>







			</h1>
	
			<div class="row">
				<div class="four columns">
					<div  class="card">
						<img src="img\carpinteros.jpg" class="imagen-platillo u-full-width">
						<div class="info-card">
							<h4>Carpinteria</h4>
							<p>Todo tipo de Trabajos</p>
							<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Solicitar</a>
						</div>
					</div>
				</div>
				<div class="four columns">
					<div class="card">
						<img src="img\maestra.jpg" class="imagen-platillo u-full-width">
						<div class="info-card">
							<h4>Maestr@</h4>
							<p>Todo tipo de materias</p>
							<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="2">Solicitar</a>
						</div>
					</div>
				</div>
				
			</div>
	
			<div class="row">
				<div class="four columns">
					<div class="card">
						<img src="img\plomeria.jpg" class="imagen-platillo u-full-width">
						<div class="info-card">
							<h4>Plomeria</h4>
							<p>Todo tipo de trabajos</p>
							<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="4">Solicitar</a>
						</div>
					</div>
				</div>
				<div class="four columns">
					<div class="card">
						<img src="img\albañil.jpg" class="imagen-platillo u-full-width">
						<div class="info-card">
							<h4>albañil</h4>
							<p>Todo tipo de trabajos</p>
							<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="5">Solicitar</a>
						</div>
					</div>
				</div>
				
			</div>
	
			<div class="row">
				<div class="four columns">
					<div class="card">
						<img src="img\electrisista.jpg" class="imagen-platillo u-full-width">
						<div class="info-card">
							<h4>Electricistas</h4>
							<p>Todo tipo de trabajos</p>
							<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="3">Solicitar</a>
						</div>
					</div>
				</div>
				<div class="four columns">
					<div class="card">
						<img src="img\sastre.jpg" class="imagen-platillo u-full-width">
						<div class="info-card">
							<h4>Satre</h4>
							<p>Remiendos y trajes a medida</p>
							<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="6">Solicitar</a>
						</div>
					</div>
				</div>
			</div>
	
		</div>
	</div>

</body>
</html>