<?php
    $bbdd = new PDO('mysql:host=localhost;dbname=PHPeros', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
?>

<html>
<link rel="stylesheet" href="styles.css">
    <body>
        <?php

            //INformacion enviada por el formulario
            $id_schedule=$_POST['id_schedule'];
            $id_class=$_POST['id_class'];
            $time_start=$_POST['time_start'];
            $time_end=$_POST['time_end'];
            $day=$_POST['day'];
            $id_schedule=$id_schedule++;

            //Preparamos el INSERT
            $sql="insert into schedule(Id_Schedule,Id_Class,Time_Start,Time_End,Day)
            values(:id_schedule,:id_class,:time_start,:time_end,:day)";

            //Preparamos la consulta
            $sql = $bbdd->prepare($sql);


            //Vinculamos los parámetros al nombre de variable especificado
            $sql->bindParam(':id_schedule',$id_schedule,PDO::PARAM_INT);
            $sql->bindParam(':id_class',$id_class,PDO::PARAM_INT);
            $sql->bindParam(':time_start',$time_start,PDO::PARAM_STR,100);
            $sql->bindParam(':time_end',$time_end,PDO::PARAM_STR,100);
            $sql->bindParam(':day',$day,PDO::PARAM_STR,100);

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
<br>
        <span class="button"><b><a style="text-decoration:none"  href="index"> VOLVER </a></b></span><br><br>

    </body>


</html>
