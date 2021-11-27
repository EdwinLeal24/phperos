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
$id_schedule = $_POST['id_schedule'];
$id_class = $_POST['id_class'];
$time_start = $_POST['time_start'];
$time_end = $_POST['time_end'];
$day = $_POST['day'];
$id_schedule = $id_schedule++;

//Preparamos el INSERT
$sql = "insert into schedule(Id_Schedule,Id_Class,Time_Start,Time_End,Day)
            values(:id_schedule,:id_class,:time_start,:time_end,:day)";

//Preparamos la consulta
$sql = $bbdd->prepare($sql);

//Vinculamos los parámetros al nombre de variable especificado
$sql->bindParam(':id_schedule', $id_schedule, PDO::PARAM_INT);
$sql->bindParam(':id_class', $id_class, PDO::PARAM_INT);
$sql->bindParam(':time_start', $time_start, PDO::PARAM_STR, 100);
$sql->bindParam(':time_end', $time_end, PDO::PARAM_STR, 100);
$sql->bindParam(':day', $day, PDO::PARAM_STR, 100);

//Ejecutamos la consulta
$sql->execute();

//Comprobamos que ha ido bien
$lastInsertId = $bbdd->lastInsertId();
if ($lastInsertId > 0) {
    echo " <div class='main-container'><div class='content alert alert-primary' > <h4>Horario añadido correctamente! Empiezas a las $time_start y terminas a las $time_end.</h4></div></div>";
} else {
    echo "<div class='main-container'><div class= 'content alert alert-primary' ><h4> Ha ocurriodo un error al intentar añadir el horario.</h4></div></div>";
}

?>
        <div class='main-container'>
        <button class="back-button class-button"><a class="white-link" style="text-decoration:none"  href="/select_schedule.php"> VOLVER </a></button>
    </div>
    </body>


</html>
