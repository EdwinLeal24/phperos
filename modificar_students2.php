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
$id = $_POST['id'];
$username = $_POST['username'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$telephone = $_POST['telephone'];
$nif = $_POST['nif'];
$date_registered = $_POST['date_registered'];

//Preparamos el UPDATE
$sql = "UPDATE students SET username = :username, pass = :pass, email = :email, name = :name, surname = :surname,
    telephone = :telephone, nif = :nif, date_registered = :date_registered WHERE students.id = :id";

//Preparamos la consulta
$query = $bbdd->prepare($sql);

//Vinculamos los parametros al nombre de variable especificado
$query->bindParam(':id', $id, PDO::PARAM_INT);
$query->bindParam(':username', $username, PDO::PARAM_STR, 100);
$query->bindParam(':pass', $pass, PDO::PARAM_STR, 100);
$query->bindParam(':email', $email, PDO::PARAM_STR, 100);
$query->bindParam(':name', $name, PDO::PARAM_STR, 100);
$query->bindParam(':surname', $surname, PDO::PARAM_STR, 100);
$query->bindParam(':telephone', $telephone, PDO::PARAM_STR, 100);
$query->bindParam(':nif', $nif, PDO::PARAM_STR, 100);
$query->bindParam(':date_registered', $date_registered, PDO::PARAM_STR, 100);

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
        <button class="back-button class-button"><a class="white-link" style="text-decoration:none"  href="/select_students.php"> VOLVER </a></button>
        </div>
    </body>

</html>


