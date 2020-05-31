<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Crear Telefono</title>
</head>
<body>
        <?php
        //incluir conexión a la base de datos
        include '../../../../config/conexionBD.php';
        $codigo = $_POST["codigo"];
        $sql = "DELETE FROM telefonos WHERE tel_cod = '$codigo'";
        if ($conn->query($sql) === TRUE) {
            echo "<p>Se ha eliminado los datos correctamemte!!!</p>";
        } else {
         echo "<p>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
        }
        header("Location: ../../../vista/user/indexUser.php");
        $conn->close();
    ?>
</body>
</html>