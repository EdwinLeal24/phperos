<?php

//requerimos la conexion de la base de datos
require 'database.php';

$message = '';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    // preparo consulta
    $sql = "INSERT INTO users_admin(username, name, email, password)
    values(:username, :name, :email, :password)";

    $sql = $conn->prepare($sql);

    // encriptamos password
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $sql->bindParam(':username', $username, PDO::PARAM_STR, 100);
    $sql->bindParam(':name', $name, PDO::PARAM_STR, 100);
    $sql->bindParam(':email', $email, PDO::PARAM_STR, 100);
    $sql->bindParam(':password', $password, PDO::PARAM_STR, 100);

    // ejecutamos consulta
    if ($sql->execute()) {
        $message = 'Registrado correctamente';
    } else {
        $message = 'Lo siento ha ocurrido un error :(';
    }
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="public/css/app.css" rel="stylesheet">
    <link href="public/css/register.css" rel="stylesheet">
  </head>
  <body>

    <div class="container">

      <?php if (!empty($message)): ?>
        <p> <?=$message?></p>
      <?php endif;?>
      <section class="login-container">
      <h1>Registro como administrador</h1>

      <form action="registerAdmin.php" method="POST">
              <label>Nombre</label>
              <input type="text" name="name">

              <label>Usuario</label>
              <input type="text" name="username">

              <label>Email</label>
              <input type="text" name="email">

              <label>Contraseña</label>
              <input type="password" name="password">

              <input type="submit" value="REGISTRARME COMO ADMINISTRADOR">
      </form>

      <span>Ya tienes cuenta como administrador? <a href="loginAdmin.php">Inicia sesión!</a></span>

    </section>

    </div>
  </body>
</html>
