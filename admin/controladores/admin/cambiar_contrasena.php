<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Modificar datos de persona </title>
    <link href="../../../public/vista/CSS/CSSLINK/link.css" type="text/css"  rel="stylesheet"/>
</head>
<body>
    <section>
    <?php
        //incluir conexión a la base de datos
        include '../../../config/conexionBD.php';
        $codigo = $_POST["codigo"];
        $contrasena1 = isset($_POST["contrasena1"]) ? trim($_POST["contrasena1"]) : null;
        $contrasena2 = isset($_POST["contrasena2"]) ? trim($_POST["contrasena2"]) : null;
        $sqlContrasena1 = "SELECT * FROM usuario where usu_cod= $codigo and usu_password=MD5('$contrasena1')";
        $result1 = $conn->query($sqlContrasena1);

        if ($result1->num_rows > 0) {
            date_default_timezone_set("America/Guayaquil");
            $fecha = date('Y-m-d H:i:s', time());
            $sqlContrasena2 = "UPDATE usuario SET usu_password = MD5('$contrasena2'), usu_fec_modificacion = '$fecha' WHERE usu_cod = $codigo";
        if ($conn->query($sqlContrasena2) === TRUE) {
            echo "<h1>Se ha actualizado la contraseña correctamemte!!!</h1>"; 
        } else {
            echo "<h1>Error: " . mysqli_error($conn) . "</h1>";
            }

            }else{
                echo "<h1>La contraseña actual no coincide con nuestros registros!!! </h1>";
            }
                echo "<a href='../../vista/admin/indexAdmin.php'>Regresar</a>";
        $conn->close();
    ?> 
    </section>
</body> 
</html>