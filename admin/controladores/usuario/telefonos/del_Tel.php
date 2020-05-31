<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Eliminar Telefono</title>
</head>
<body>
        <?php
        //incluir conexión a la base de datos
        include '../../../../config/conexionBD.php';
        $codigo = $_POST["codigo"];
       
        $sql = "DELETE FROM telefono WHERE tel_cod = '$codigo'";
        if ($conn->query($sql) === TRUE) {
            echo "<p>Se ha eliminado los datos correctamemte!!!</p>";
            
        } else {
         echo "<p>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
        }
        $id=$_POST["id"];
        echo "<a href='../../../vista/user/indexUser.php?id=$id'>Regresar</a>";
        $conn->close();
    ?>
</body>
</html>