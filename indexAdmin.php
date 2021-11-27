<?php
// iniciamos sesion
session_start();

// requerimos base de datos
require 'database.php';

if (isset($_SESSION['admin_user_id'])) {

    $records = $conn->prepare('SELECT id_user_admin, name, email, pass FROM users_admin WHERE id_user_admin = :id_user_admin');

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
    <link href="public/css/shared.css" rel="stylesheet">
</head>
  <body>

    <?php require 'header.php'?>

    <?php if (empty($resultsAdmin)): ?>
        <h1>Please Login or SignUp</h1>

        <section class="card">

        <h2>POR FAVOR, INICIA SESIÓN O REGISTRATE</h2>

        <div class="enlaces">
          <a class="link" href="loginAdmin.php">
            <h4>Iniciar</h4>
          </a>
          <a class="link" href="registerAdmin.php">
            <h4>Registrar</h4>
          </a>
        </div>
      <?php else: ?>

        <div class="main-container">

        <section class="card">
        <h2>PANEL DE ADMINISTRADOR</h2>
        <div class="enlaces enlaces-admin">
          <a class="link" href="select_enrollment.php">
            <h4>Enrollment</h4>
          </a>
          <a class="link" href="select_schedule.php">
            <h4>Horarios</h4>
          </a>
          <a class="link" href="select_students.php">
            <h4>Estudiantes</h4>
          </a>
          <a class="link" href="select_teachers.php">
            <h4>Profesores</h4>
          </a>
          <a class="link" href="select_users_admin.php">
            <h4>Administradores</h4>
          </a>
        </div>


          <a href="logout.php">
          <p>Logout</p>
        </a>
        </section>

        </div>
      <?php endif;?>




  </body>

</html>
