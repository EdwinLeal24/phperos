<?php
// iniciamos sesion
session_start();

// requerimos base de datos
require 'database.php';

// comprobamos que existe la sesion
if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, pass, name FROM students WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
        $user = $results;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PHPeros</title>

    <link href="public/css/app.css" rel="stylesheet">
    <link href="public/css/index.css" rel="stylesheet">
    <link href="public/css/shared.css" rel="stylesheet">
</head>
  <body>

    <?php require 'header.php'?>

    <?php if (!empty($user)): ?>

      <div class="main-container">

        <section class="card">
        <h2>GESTIONA TU HORARIO</h2>
        <div class="enlaces">
          <a class="link" href="select_class.php">
            <h4>Mis clases</h4>
          </a>
          <a class="link" href="select_courses.php">
            <h4>Mis cursos</h4>
          </a>
        </div>


          <a href="logout.php">
          <p>Logout</p>
        </a>
        </section>

        </div>


      <?php else: ?>
        <div class="main-container">

        <section class="card">

        <h2>POR FAVOR, INICIA SESIÓN O REGISTRATE</h2>

        <div class="enlaces">
          <a class="link" href="login.php">
            <h4>Iniciar</h4>
          </a>
          <a class="link" href="register.php">
            <h4>Registrar</h4>
          </a>
        </div>


        </section>

        </div>
      <?php endif;?>


  </body>

</html>