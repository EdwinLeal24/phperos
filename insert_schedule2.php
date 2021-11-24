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

?>

<html>
    <head>
        <title>PHPeros insert</title>
    </head>

    <body>
        <?php

            //INformacion enviada por el formulario
            $id_schedule=$_POST['id_schedule'];
            $id_class=$_POST['id_class'];
            $time_start=$_POST['time_start'];
            $time_end=$_POST['time_end'];
            $day=$_POST['day'];

            //Preparamos el INSERT
            $sql="insert into schedule(Id_Schedule,Id_Class,Time_Start,Time_End,Day)
            values(:id_schedule,:id_class,:time_start,:time_end,:day)";

            //Preparamos la consulta
            $sql = $bbdd->prepare($sql);


            //Vinculamos los parámetros al nombre de variable especificado
            $sql->bindParam(':id_schedule',$id_schedule,PDO::PARAM_INT);
            $sql->bindParam(':id_class',$id_class,PDO::PARAM_INT);
            $sql->bindParam(':time_start',$time_start,PDO::PARAM_STR, 100);
            $sql->bindParam(':time_end',$time_end,PDO::PARAM_STR, 100);
            $sql->bindParam(':day',$day,PDO::PARAM_STR, 100);

            //Ejecutamos la consulta
            $sql->execute();

            //Comprobamos que ha ido bien
            $lastInsertId = $bbdd->lastInsertId();
            if($lastInsertId>0){
                echo "<div class='content alert alert-primary' > Gracias, tu horario es de: $time_start a: $time_end </div>";
            }
            else{
                echo "<div class= 'content alert alert-primary' > No se pueden agregar datos, ya lo siento. </div>";
            }

        ?>

    </body>


</html>
