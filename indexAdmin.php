<?php
// iniciamos sesion
session_start();

// requerimos base de datos
require 'database.php';

if (isset($_SESSION['admin_user_id'])) {

    $records = $conn->prepare('SELECT id_user_admin, name, email, pass FROM users_admin WHERE id_user_admin = :id_user_admin');
    echo "Today is " . date("d/m/Y") . "<br>";

    $records->bindParam(':id_user_admin', $_SESSION['admin_user_id']);
    $records->execute();
    $resultsAdmin = $records->fetch(PDO::FETCH_ASSOC);
    $userAdmin = $resultsAdmin;

    if (count(array($resultsAdmin)) > 0) {
        $userAdmin = $resultsAdmin;
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
</head>
  <body>

    <?php require 'header.php'?>

    <?php if (!empty($resultsAdmin)): ?>
        <h1>Please Login or SignUp</h1>

        <a href="login.php">Login</a> or
        <a href="register.php">SignUp</a>
        <a href="logout.php">
          Logout
        </a>
      <?php else: ?>
        <div class="main-container">
          <h2>PANEL DE ADMINISTRADOR</h2>

          <section class="enlaces">
            <a href="select_enrollment.php">ENLACE A ENROLLMENT</a><br><br>
            <a href="select_schedule.php">ENLACE A LOS HORARIOS</a><br><br>
            <a href="select_students.php">ENLACE A LOS ESTUDIANTES</a><br><br>
            <a href="select_teachers.php">ENLACE A LOS PROFESORES</a><br><br>
            <a href="select_users_admin.php">ENLACE A LOS USUARIOS ADMINISTRADORES</a><br><br>
            <a href="logout.php">
              Logout
            </a>
          </section>
        </div>
      <?php endif;?>




  </body>

</html>