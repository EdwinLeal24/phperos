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

//Preparamos el UPDATE
$sql = "UPDATE class SET name = :name, id_teacher = :id_teacher, id_course = :id_course, id_schedule = :id_schedule, color = :color WHERE id_class = :id_class";

//Preparamos la consulta
$query = $bbdd->prepare($sql);

//Vinculamos los parametros al nombre de variable especificado
$query->bindParam(':id_class', $id_class, PDO::PARAM_INT);
$query->bindParam(':id_teacher', $id_teacher, PDO::PARAM_INT);
$query->bindParam(':id_course', $id_course, PDO::PARAM_INT);
$query->bindParam(':id_schedule', $id_schedule, PDO::PARAM_INT);
$query->bindParam(':name', $name, PDO::PARAM_STR, 100);
$query->bindParam(':color', $color, PDO::PARAM_STR, 100);

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
        <button class="back-button class-button"><a class="white-link" style="text-decoration:none"  href="/phperos-app/select_class.php"> VOLVER </a></button>
        </div>
    </body>

</html>


