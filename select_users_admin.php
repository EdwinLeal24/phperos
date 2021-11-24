<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'PHPeros');


try
{
    $bbdd = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}

catch (PDOException $e)

{
    exit("Error: " . $e->getMessage());
}

?>

<html>
    <head>
        <title>PHPeros</title>
        <style>
            span {width:60px;display:inline-block;}
            span:nth-child(2) {width:250px;}
        </style>
    </head>
    <body>
        <h1>PHPeros</h1>
        <p>CONSULTAS A LA BASE DE DATOS</p>
        <?php
            //Consultas en base de datos
            $sql = "SELECT * FROM users_admin";

            //Preparacion de consulta
            $query = $bbdd -> prepare($sql);

            //Ejecucion de consulta
            $query -> execute();

            //Asignacion de resultados y devolucion de filas
            $results = $query -> fetchAll(PDO::FETCH_OBJ);

            //Si hay resultados, foreach
            if (count($results) > 0) {
                foreach($results as $result) {
                    echo "<div>
                    <span>".$result -> id_user_admin."</span>
                    <span>".$result -> username."</span>
                    <span>".$result -> name."</span>
                    <span>".$result -> email."</span>      
                    <span>".$result -> password."</span>
                    <span><a href= \"modificar_users_admin1.php?id=".$result -> id_user_admin."\">Modificar</a></span>
                    <span><a href= \"borrar_users_admin1.php?id=".$result -> id_user_admin."\">Borrar</a></span>
                    </div>";
                }
            }
            else
            {
                echo 'No hay resultados';
            }
        ?>
        <p>
            <a href="insert_users_admin1.php">Añadir un usuario administrador</a>
            <a href="modificar_users_admin1.php">Modificar un usuario administrador</a>
            <a href="borrar_users_admin1.php">Borrar un usuario administrador</a>
        </p>
    

    </body>


</html>

