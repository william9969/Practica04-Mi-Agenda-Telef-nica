<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Eliminar Telefono</title>
    <link href="../../../../public/vista/CSS/CSSLINK/link.css" type="text/css"  rel="stylesheet"/>
</head>
<body>
    <section>
        <?php
            //incluir conexión a la base de datos
            include '../../../../config/conexionBD.php';
            $codigo = $_POST["codigo"];
        
            $sql = "DELETE FROM telefono WHERE tel_cod = '$codigo'";
            if ($conn->query($sql) === TRUE) {
                echo "<h1>Se ha eliminado los datos correctamente !!!</h1>";
                
            } else {
                echo "<h1>Error: " . $sql . "<br>" . mysqli_error($conn) . "</h1>";
            }
            $id=$_POST["id"];
            echo "<a href='../../../vista/user/indexUser.php?id=$id'>Regresar</a>";
            $conn->close();
        ?>
    </section>
</body>
</html>