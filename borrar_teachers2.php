<html>
<link rel="stylesheet" href="styles.css">

    <body>
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
    $bbdd = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}

catch (PDOException $e)
{
    exit("Error: " . $e->getMessage());
}


//Recogemos ID candidato a modificar con un GET
$id_teacher=$_POST['id_teacher'];

//Preparamos el borrado
$sql="DELETE FROM teachers WHERE id_teacher = :id_teacher";

//Preparamos la consulta
$sql=$bbdd->prepare($sql);

//Vinculamos los parámetros de la consulta
$sql->bindParam(':id_teacher',$id_teacher,PDO::PARAM_INT);

//Ejecutamos la consulta
$sql->execute();

if($sql->rowCount() > 0)
{
    $count = $sql -> rowCount();
    echo "<div class='content alert alert-primary' > ¡DESPEDIDO! </div>";
}
else{
    echo "<div class= 'content alert alert-primary' > No se puede borrar el registro, ya lo siento. </div>";
}

?>
        <br>
        <span class="button"><b><a style="text-decoration:none"  href="index"> VOLVER </a></b></span><br><br>

    </body>


</html>
