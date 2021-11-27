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
$id_user_admin = $_POST['id_user_admin'];
$username = $_POST['username'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

//Preparamos el UPDATE
$sql = "UPDATE users_admin SET username = :username, name = :name, email = :email, password = :password WHERE users_admin.id_user_admin = :id_user_admin";

//Preparamos la consulta
$query = $bbdd->prepare($sql);

//Vinculamos los parametros al nombre de variable especificado
$query->bindParam(':id_user_admin', $id_user_admin, PDO::PARAM_INT);
$query->bindParam(':username', $username, PDO::PARAM_STR, 100);
$query->bindParam(':name', $name, PDO::PARAM_STR, 100);
$query->bindParam(':email', $email, PDO::PARAM_STR, 100);
$query->bindParam(':password', $password, PDO::PARAM_STR, 100);

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
            <button class="back-button class-button"><a class="white-link" style="text-decoration:none"  href="/select_users_admin.php"> VOLVER </a></button>
            </div>
    </body>

</html>


