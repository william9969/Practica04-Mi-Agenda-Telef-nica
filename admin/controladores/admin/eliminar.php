<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Eliminar datos de persona </title>
    <link href="../../../public/vista/CSS/CSSLINK/link.css" type="text/css"  rel="stylesheet"/>
</head>
<body>
    <section>
        <?php
            //incluir conexión a la base de datos
            include '../../../config/conexionBD.php';
            $codigo = $_POST["codigo"];

            //Si voy a eliminar físicamente el registro de la tabla
            //$sql = "DELETE FROM usuario WHERE usu_cod = '$codigo'";
            date_default_timezone_set("America/Guayaquil");
            $fecha = date('Y-m-d H:i:s', time());
            $sql = "UPDATE usuario SET usu_eliminado = 'S', usu_fec_modificacion = '$fecha' WHERE usu_cod = $codigo";
            if ($conn->query($sql) === TRUE) {
            echo "<h1>Se ha eliminado los datos correctamemte!!!</h1>";
            } else {
            echo "<h1>Error: " . $sql . "<br>" . mysqli_error($conn) . "</h1>";
            }
            echo "<a href='../../vista/admin/indexAdmin.php'>Regresar</a>";
            $conn->close();
        ?>
    </section>
</body>
</html>