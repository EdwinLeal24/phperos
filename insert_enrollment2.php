<?php
$bbdd = new PDO('mysql:host=localhost;dbname=PHPeros', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
?>


<html>
<link href="public/css/app.css" rel="stylesheet">
        <link href="public/css/index.css" rel="stylesheet">
        <link href="public/css/select-class/selectClass.css" rel="stylesheet">

    <body>
    <?php require 'header.php'?>

        <?php

//INformacion enviada por el formulario
$id_enrollment = $_POST['id_enrollment'];
$id_student = $_POST['id_student'];
$id_course = $_POST['id_course'];
$status = $_POST['status'];
$id_enrollment = $id_enrollment++;

//Preparamos el INSERT
$sql = "insert into enrollment(Id_Enrollment,Id_Student,Id_Course,Status)
            values(:id_enrollment,:id_student,:id_course,:status)";

//Preparamos la consulta
$sql = $bbdd->prepare($sql);

//Vinculamos los parámetros al nombre de variable especificado
$sql->bindParam(':id_enrollment', $id_enrollment, PDO::PARAM_INT);
$sql->bindParam(':id_student', $id_student, PDO::PARAM_INT);
$sql->bindParam(':id_course', $id_course, PDO::PARAM_INT);
$sql->bindParam(':status', $status, PDO::PARAM_INT);

//Ejecutamos la consulta
$sql->execute();

//Comprobamos que ha ido bien
$lastInsertId = $bbdd->lastInsertId();
if ($lastInsertId > 0) {
    echo " <div class='main-container'><div class='content alert alert-primary' > <h4>Matricula añadida correctamente, el estado es $status</h4></div></div>";
} else {
    echo "<div class='main-container'><div class= 'content alert alert-primary' ><h4> Ha ocurriodo un error al intentar añadir la matricula. </h4></div></div>";
}

?>
<div class='main-container'>
        <button class="back-button class-button"><a class="white-link" style="text-decoration:none"  href="/select_enrollment.php"> VOLVER </a></button>
    </div>

    </body>


</html>
