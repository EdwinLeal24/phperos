<?php

//requerimos la conexion de la base de datos
require 'database.php';

$message = '';

if (!empty($_POST['email']) && !empty($_POST['pass'])) {
    // preparo consulta
    $sql = "INSERT INTO students(username, pass, email, name, surname, telephone, nif, date_registered)
    values(:username, :pass, :email, :name, :surname, :telephone, :nif, :date_registered)";

    $sql = $conn->prepare($sql);

    // encriptamos password
    $password = password_hash($_POST['pass'], PASSWORD_BCRYPT);

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $telephone = $_POST['telephone'];
    $nif = $_POST['nif'];
    $date_registered = '2021-11-25 00:02:53';

    $sql->bindParam(':name', $name, PDO::PARAM_STR, 100);
    $sql->bindParam(':username', $username, PDO::PARAM_STR, 100);
    $sql->bindParam(':pass', $password, PDO::PARAM_STR, 100);
    $sql->bindParam(':email', $email, PDO::PARAM_STR, 100);
    $sql->bindParam(':surname', $surname, PDO::PARAM_STR, 100);
    $sql->bindParam(':telephone', $telephone, PDO::PARAM_STR, 100);
    $sql->bindParam(':nif', $nif, PDO::PARAM_STR, 100);
    $sql->bindParam(':date_registered', $date_registered, PDO::PARAM_STR, 100);

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
      <h1>Registrate</h1>

      <form action="register.php" method="POST">
              <label>Nombre</label>
              <input type="text" name="name">

              <label>Apellido</label>
              <input type="text" name="surname">

              <label>Usuario</label>
              <input type="text" name="username">

              <label>Telefono</label>
              <input type="text" name="telephone">

              <label>NIF</label>
              <input type="text" name="nif">

              <label>Email</label>
              <input type="text" name="email">

              <label>Contraseña</label>
              <input type="password" name="pass">

              <input type="submit" value="REGISTRARME">
      </form>

      <span>Ya tienes una cuenta? <a href="login.php">Inicia sesión!</a></span>

    </section>

    </div>
  </body>
</html>
