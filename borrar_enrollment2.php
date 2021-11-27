<html>
<link href="public/css/app.css" rel="stylesheet">
        <link href="public/css/index.css" rel="stylesheet">
        <link href="public/css/select-class/selectClass.css" rel="stylesheet">
<body>
    <?php require 'header.php'?>
<?php

//Insercion con PDO

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

//Recogemos ID candidato a modificar con un GET
$id_enrollment = $_POST['id_enrollment'];

//Preparamos el borrado
$sql = "DELETE FROM enrollment WHERE id_enrollment = :id_enrollment";

//Preparamos la consulta
$sql = $bbdd->prepare($sql);

//Vinculamos los parámetros de la consulta
$sql->bindParam(':id_enrollment', $id_enrollment, PDO::PARAM_INT);

//Ejecutamos la consulta
$sql->execute();

if ($sql->rowCount() > 0) {
    $count = $sql->rowCount();
    echo " <div class='main-container'><div class='content alert alert-primary' > <h4>Matrícula eliminada correctamente</h4></div></div>";
} else {
    echo "<div class='main-container'><div class= 'content alert alert-primary' ><h4> Error al intentar eliminar la matícula </h4></div></div>";
}

?>
         <div class='main-container'>
        <button class="back-button class-button"><a class="white-link" style="text-decoration:none"  href="/phperos-app/select_enrollment.php"> VOLVER </a></button>
    </div>

    </body>


</html>
