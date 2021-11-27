<?php

//Update con PDO

//Credenciales usuario

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'PHPeros');

//Conexion

try
{
    //Ejecucion de variables conectando a la BBDD y aplicando UTF8
    $bbdd = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}

?>


<html>
<link href="public/css/app.css" rel="stylesheet">
        <link href="public/css/index.css" rel="stylesheet">
        <link href="public/css/select-class/selectClass.css" rel="stylesheet">

    <body>
    <?php require 'header.php'?>

    <?php
//Informacion enviada por el formulario
$id_enrollment = $_POST['id_enrollment'];
$id_student = $_POST['id_student'];
$id_course = $_POST['id_course'];
$status = $_POST['status'];

//Preparamos el UPDATE
$sql = "UPDATE enrollment SET id_student = :id_student, id_course = :id_course, status = :status WHERE enrollment.id_enrollment = :id_enrollment";

//Preparamos la consulta
$query = $bbdd->prepare($sql);

//Vinculamos los parametros al nombre de variable especificado
$query->bindParam(':id_enrollment', $id_enrollment, PDO::PARAM_INT);
$query->bindParam(':id_student', $id_student, PDO::PARAM_INT);
$query->bindParam(':id_course', $id_course, PDO::PARAM_INT);
$query->bindParam(':status', $status, PDO::PARAM_INT);

//Ejecutamos la consulta
$query->execute();

//Comprobamos que ha ido bien
$lastInsertId = $bbdd->lastInsertId();

if ($query->rowCount() > 0) {
    $count = $query->rowCount();
    require 'successUpdate.php';

} else {
    require 'errorUpdate.php';

}

?>
       <div class='main-container'>
        <button class="back-button class-button"><a class="white-link" style="text-decoration:none"  href="/select_enrollment.php"> VOLVER </a></button>
        </div>
    </body>

</html>


