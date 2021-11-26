<?php
    $bbdd = new PDO('mysql:host=localhost;dbname=PHPeros', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
?>

<html>
<link rel="stylesheet" href="styles.css">

    <body>
        <?php

            //INformacion enviada por el formulario
            $id=$_POST['id'];
            $username=$_POST['username'];
            $pass=$_POST['pass'];
            $email=$_POST['email'];
            $name=$_POST['name'];
            $surname=$_POST['surname'];
            $telephone=$_POST['telephone'];
            $nif=$_POST['nif'];
            $date_registered=$_POST['date_registered'];
            $id=$id++;


            //Preparamos el INSERT
            $sql="insert into students(Id,Username,Pass,Email,Name,Surname,Telephone,Nif,Date_Registered)
            values(:id,:username,:pass,:email,:name,:surname,:telephone,:nif,:date_registered)";

            //Preparamos la consulta
            $sql = $bbdd->prepare($sql);


            //Vinculamos los parámetros al nombre de variable especificado
            $sql->bindParam(':id',$id,PDO::PARAM_INT);
            $sql->bindParam(':username',$username,PDO::PARAM_STR, 100);
            $sql->bindParam(':pass',$pass,PDO::PARAM_STR, 100);
            $sql->bindParam(':email',$email,PDO::PARAM_STR, 100);
            $sql->bindParam(':name',$name,PDO::PARAM_STR, 100);
            $sql->bindParam(':surname',$surname,PDO::PARAM_STR, 100);
            $sql->bindParam(':telephone',$telephone,PDO::PARAM_INT);
            $sql->bindParam(':nif',$nif,PDO::PARAM_STR, 100);
            $sql->bindParam(':date_registered',$date_registered,PDO::PARAM_STR, 100);

            //Ejecutamos la consulta
            $sql->execute();

            //Comprobamos que ha ido bien
            $lastInsertId = $bbdd->lastInsertId();
            if($lastInsertId>0){
                echo "<div class='content alert alert-primary' > Gracias, $name $surname . Estas ya registrado. </div>";
            }
            else{
                echo "<div class= 'content alert alert-primary' > No se pueden agregar datos, ya lo siento. </div>";
            }

        ?>
<br>
        <span class="button"><b><a style="text-decoration:none"  href="index"> VOLVER </a></b></span><br><br>

    </body>


</html>
