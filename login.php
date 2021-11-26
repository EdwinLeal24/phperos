<?php

session_start();

require 'database.php';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, pass FROM students WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['pass'])) {
        $_SESSION['user_id'] = $results['id'];
        header("Location: /phperos-app");
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

    <h1>Inicia sesión</h1>


    <form action="login.php" method="POST">
      <input name="email" type="text" placeholder="Email">
      <input name="password" type="password" placeholder="Contraseña">
      <input type="submit" value="Login">
    </form>

    <?php if (!empty($message)): ?>
      <p> <?=$message?></p>
    <?php endif;?>

    <span><a href="loginAdmin.php">Inicia sesión como administrador</a></span>
    <span>Aún no estas registrado? <a href="register.php">Registrate!</a></span>
    </section>

    </div>

  </body>
</html>