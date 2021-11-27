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
$id_teacher = $_POST['id_teacher'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$telephone = $_POST['telephone'];
$nif = $_POST['nif'];
$email = $_POST['email'];
$id_teacher = $id_teacher++;

//Preparamos el INSERT
$sql = "insert into teachers(Id_Teacher,Name,Surname,Telephone,Nif,Email)
            values(:id_teacher,:name,:surname,:telephone,:nif,:email)";

//Preparamos la consulta
$sql = $bbdd->prepare($sql);

//Vinculamos los parámetros al nombre de variable especificado
$sql->bindParam(':id_teacher', $id_teacher, PDO::PARAM_INT);
$sql->bindParam(':name', $name, PDO::PARAM_STR, 100);
$sql->bindParam(':surname', $surname, PDO::PARAM_STR, 100);
$sql->bindParam(':telephone', $telephone, PDO::PARAM_INT);
$sql->bindParam(':nif', $nif, PDO::PARAM_STR, 100);
$sql->bindParam(':email', $nif, PDO::PARAM_STR, 100);

//Ejecutamos la consulta
$sql->execute();

//Comprobamos que ha ido bien
$lastInsertId = $bbdd->lastInsertId();
if ($lastInsertId > 0) {
    echo " <div class='main-container'><div class='content alert alert-primary' > <h4>Profesor $name $surname se ha añadido correctamente!</h4></div></div>";
} else {
    echo "<div class='main-container'><div class= 'content alert alert-primary' ><h4> Ha ocurriodo un error al intentar añadir al estudiante.</h4></div></div>";
}

?>
                                <div class='main-container'>
                                <button class="back-button class-button"><a class="white-link" style="text-decoration:none"  href="/select_teachers.php"> VOLVER </a></button>
                            </div>

                        </body>


</html>
