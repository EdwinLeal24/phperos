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

    <!-- Fonts -->
    <link href="public/css/app.css" rel="stylesheet">
    <link href="public/css/index.css" rel="stylesheet">
</head>
  <body>

    <?php require 'header.php'?>

    <?php if (!empty($user)): ?>

      <div class="main-container">
        <h2>GESTIONA TU HORARIO</h2>

        <section class="enlaces">
          <a href="select_class.php">Mis clases</a><br><br>
          <a href="select_courses.php">Mis cursos</a><br><br>
        </section>

        <a href="logout.php">
          Logout
        </a>

      <?php else: ?>
        <h1>Please Login or SignUp</h1>

        <a href="login.php">Login</a> or
        <a href="register.php">SignUp</a>
      <?php endif;?>
    </div>


  </body>

</html>