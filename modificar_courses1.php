<html>
    <head>
        <title>PHPeros update</title>
    </head>

    <body>
        <h1>PHPeros Update</h1>
        <form action="modificar_courses2.php" method="post">
            <label>Id_Course:</label><input type="text" name="id_course"><br><br>
            <label>Name:</label><input type="text" name="name"><br><br>
            <label>Description:</label><input type="text" name="description"><br><br>
            <label>Date_Start:</label><input type="text" name="date_start"><br><br>
            <label>Date_End:</label><input type="text" name="date_end"><br><br>
            <label>Active:</label>
            <select name="active">
                <option value=0>0</option>
                <option value=1>1</option>          
            </select><br><br>
            <input type="submit" value="Actualizar datos">
        </form>
    </body>

</html>