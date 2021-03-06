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

//Informacion enviada por el formulario
$id_class = $_POST['id_class'];
$id_teacher = $_POST['id_teacher'];
$id_course = $_POST['id_course'];
$id_schedule = $_POST['id_schedule'];
$name = $_POST['name'];
$color = $_POST['color'];
$id_class = $id_class++;

//Preparamos el INSERT
$sql = "insert into class(Id_Class,Id_Teacher,Id_Course,Id_Schedule,Name,Color)
            values(:id_class,:id_teacher,:id_course,:id_schedule,:name,:color)";

//Preparamos la consulta
$sql = $bbdd->prepare($sql);

//Vinculamos los parámetros al nombre de variable especificado
$sql->bindParam(':id_class', $id_class, PDO::PARAM_INT);
$sql->bindParam(':id_teacher', $id_teacher, PDO::PARAM_INT);
$sql->bindParam(':id_course', $id_course, PDO::PARAM_INT);
$sql->bindParam(':id_schedule', $id_schedule, PDO::PARAM_INT);
$sql->bindParam(':name', $name, PDO::PARAM_STR, 100);
$sql->bindParam(':color', $color, PDO::PARAM_STR, 100);

//Ejecutamos la consulta
$sql->execute();

//Comprobamos que ha ido bien
$lastInsertId = $bbdd->lastInsertId();

if ($lastInsertId > 0) {
    echo " <div class='main-container'><div class='content alert alert-primary' > <h4>Tu clase $name se ha guardado correctamente</h4></div></div>";
} else {
    echo "<div class='main-container'><div class= 'content alert alert-primary' ><h4> Los datos no se han podido agregar. </h4></div></div>";
}

?>
    <div class='main-container'>
        <button class="back-button class-button"><a class="white-link" style="text-decoration:none"  href="/select_class.php"> VOLVER </a></button>
    </div>
    </body>


</html>
