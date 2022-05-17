<?php

  require 'BaseDeDatos.php';

  $message = '';

  if (!empty($_POST['usuario']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (usuario, email, password) VALUES (usuario, email, password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam('usuario', $_POST['usuario']);
    $stmt->bindParam('email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam('password', $password);

    if ($stmt->execute()) {
      
    } else {
      $message = 'Lo siento, debe haber habido un problema al crear su cuenta';
    }
  }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="theme-color" content="#004bed">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="shortcut icon" type="image/png" href="./img/U-Work_Now.png">
    <link rel="apple-touch-icon" href="./U-Work_Now.png">
    <link rel="apple-touch-startup-image" href="./U-Work_Now.png">
    <link rel="manifest" href="./manifest.json">

    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Bienvenido a U-Working-Now</title>
</head>

<body>
<?php require 'partials/header.php' ?>

<?php if(!empty($message)): ?>
  <p> <?= $message ?></p>
<?php endif; ?> 

    <div class="container-form sign-up">   
        <form class="formulario" action="index.php" method="POST">
            <img src="img/U-Work 5.0.png" height="35%">
            <h3 class="create-account">Crear una cuenta</h3>
            <div class="iconos">
                <div class="border-icon">
                    <i class='bx bxl-instagram'></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-linkedin' ></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-facebook-circle' ></i>
                </div>
            </div> <br>
            <input type="text" name="usuario" placeholder="Usuario">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Contraseña">
            <input type="submit" name="action" value="Registrarse">
            <br>
            <div class="message">
                <p>Si ya tienes una cuenta</p>
                <a href="IniciarSesion.php"  >Iniciar Sesion</a>
            </div>
        </form>
    </div>
<script src="registro.js"></script>
<script src="script.js"></script>
</body>

</html>