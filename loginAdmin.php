<?php

session_start();

require 'database.php';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id_user_admin, email, password FROM users_admin WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $message = '';

    if (count(array($results)) > 0 && password_verify($_POST['password'], $results['password'])) {
        $_SESSION['admin_user_id'] = $results['id_user_admin'];
        header("Location: /phperos-app/indexAdmin.php");
    } else {
        $message = 'Usuario o Contraseña incorrecto';
    }
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="public/css/app.css" rel="stylesheet">
    <link href="public/css/login.css" rel="stylesheet">
  </head>
  <body>

    <div class="container">

    <section class="login-container">

    <h1 class="title">Inicio de sesión como administrador</h1>


    <form action="loginAdmin.php" method="POST">
      <input name="email" type="text" placeholder="Email">
      <input name="password" type="password" placeholder="Contraseña">
      <input type="submit" value="Login">
    </form>

    <?php if (!empty($message)): ?>
      <p> <?=$message?></p>
    <?php endif;?>

    <span><a href="login.php">Iniciar sesión como usuario</a></span>
    <span>Aún no estas registrado? <a href="registerAdmin.php">Registrate como ADMINISTRADOR!</a></span>
    </section>

    </div>

  </body>
</html>