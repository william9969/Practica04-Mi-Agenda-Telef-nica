<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Modificar Telefono </title>
</head>
<body>
<?php
    //incluir conexión a la base de datos
    include '../../../../config/conexionBD.php';
    $codigo = $_POST["codigo"];
    $tip_telefono = isset($_POST["tip_telefono"]) ? mb_strtoupper(trim($_POST["tip_telefono"]), 'UTF-8') : null;
    $telefono = isset($_POST["telefono"]) ? trim($_POST["telefono"]): null;
    $operadora = isset($_POST["operadora"]) ? mb_strtoupper(trim($_POST["operadora"]), 'UTF-8') : null;
    $sql = "UPDATE telefono SET tel_tipo = '$tip_telefono', tel_numero = '$telefono', tel_operadora = '$operadora' WHERE tel_cod = $codigo";


    if ($conn->query($sql) === TRUE) {
        echo "Se ha actualizado los datos personales correctamemte!!!<br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
    }
    $id=$_POST["id"];
    echo "<a href='../../../vista/user/indexUser.php?id=$id'>Regresar</a>";
    $conn->close();
?>
</body>
</html>