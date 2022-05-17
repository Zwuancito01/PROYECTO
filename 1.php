<?php
  session_start();

  require 'BaseDeDatos.php';

  if (isset($_SESSION['users_idusers'])) {
    $records = $conn->prepare('SELECT idusers, email, password FROM users WHERE idusers = idusers');
    $records->bindParam('idusers', $_SESSION['users_idusers']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $users = null;

    if (count($results) > 0) {
      $users = $results;
    }
  }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <title>Mayantlan</title>	
        <link href="css/Menu.css" rel="stylesheet" type="text/css"/>
        <link href="css/Personajes.css" rel="stylesheet" type="text/css"/>
        <script src="JavaScrip/jquery-3.2.1.js" type="text/javascript"></script>
        <script src="JavaScrip/Personajes.js" type="text/javascript"></script>
    </head>
    <body>
	<?php if(!empty($users)): ?>
      <br> Welcome. <?= $users['usuario']; ?>
	<section class="title">
		<h1>Raíces Ancestrales</h1>
	</section>

	<nav class="navegacion">
		<ul class="menu">

			<li class="first-item">
				<a href="index.html">
					<img src="Imagenes/Logo4.0.png" alt="" class="imagen">
					<span class="text-item">Inicio</span>
					<span class="down-item"></span>
				</a>
			</li>

			<li>
                            <a href="Desarrolladores.jsp">
					<img src="Imagenes/Desarrollador.jpg" alt="" class="imagen">
					<span class="text-item">Desarrolladores</span>
					<span class="down-item"></span>
				</a>
			</li>

			<li>
                            <a href="Servicios.jsp">
					<img src="Imagenes/Servicios.jpg" alt="" class="imagen">
					<span class="text-item">Servicios</span>
					<span class="down-item"></span>
				</a>
			</li>
                        <%--Autor: Leonardo solo descarga--%> 
			<li>
				<a href="https://store.steampowered.com/app/244750/Aztez/">
					<img  src="Imagenes/Descarga.png" alt="" class="imagen">
					<span class="text-item">Descarga</span>
					<span class="down-item"></span>
				</a>
			</li>

			<li>
				<a href="Foro.jsp" href="#">
                    <img src="Imagenes/Foro.png" alt="" class="imagen">
					<span class="text-item">Foro</span>
					<span class="down-item"></span>
				</a>
			</li>
                         <li>
				<a href="CerrarSesion.php">
					<img src="Imagenes/Perfil.png" alt="" class="imagen">
					<span class="text-item">CerrarSesion</span>
					<span class="down-item"></span>
				</a>
			</li>    

		</ul>
	</nav>           
        <div class="wrap">
		<h1 style="color:#ffffff";>Escoge tu guerrero astral</h1>
		<div class="store-wrapper">
			<div class="category_list">
				<a href="#" class="category_item" category="all">Personajes</a>
				<a href="#" class="category_item" category="Azteca">Aztecas</a>
				<a href="#" class="category_item" category="Egipcio">Egipcios</a>
				<a href="#" class="category_item" category="Inca">Incas</a>
				
			</div>
			<section class="products-list">
				<div class="product-item" category="Azteca">
                                    <img src="Imagenes/KingAzteca.png" alt="" >
					<a href="#">Guerrero de la clase guardian</a>
				</div>
				<div class="product-item" category="Egipcio">
                                    <img src="Imagenes/KingEgipcio.png" alt="" >
					<a href="#">Guerrero de la clase cuerpo a cuerpo</a>
				</div>
				<div class="product-item" category="Inca">
                                    <img src="Imagenes/QueenInca.png" alt="" >
					<a href="#">Guerrera de la clase mago</a>
				</div>
				
			</section>
		</div>
	</div>
        <p class="cuadro" style="text-align: center; "><a style="color:#ffffff">Musica para relajarse un poquito</a></p>
        <br/><br/>
        <p style="text-align: center; ">
            
        <iframe width="560" height="315" src="https://www.youtube.com/embed/XrCawmaP-Lk" 
                 frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                 allowfullscreen> </iframe> </p>
	<?php else: ?>
      <h1>Por favor Inicie sesion o cree una cuenta</h1>

      <a href="IniciarSesion.php">Iniciar sesion</a> o
      <a href="index.php">Crear Cuenta</a>
    <?php endif; ?>		 
    </body>
</html>
