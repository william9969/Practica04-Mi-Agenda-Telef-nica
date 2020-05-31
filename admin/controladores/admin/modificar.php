<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Modificar datos de persona </title>
</head>
<body>
<?php
    //incluir conexión a la base de datos
    include '../../../config/conexionBD.php';
    $codigo = $_POST["codigo"];
    $cedula = isset($_POST["cedula"]) ? trim($_POST["cedula"]) : null;
    $nombres = isset($_POST["nombres"]) ? mb_strtoupper(trim($_POST["nombres"]), 'UTF-8') : null;
    $apellidos = isset($_POST["apellidos"]) ? mb_strtoupper(trim($_POST["apellidos"]), 'UTF-8') : null;
    $direccion = isset($_POST["direccion"]) ? mb_strtoupper(trim($_POST["direccion"]), 'UTF-8') : null;
    $tip_telefono = isset($_POST["tip_telefono"]) ? mb_strtoupper(trim($_POST["tip_telefono"]), 'UTF-8') : null;
    $telefono = isset($_POST["telefono"]) ? trim($_POST["telefono"]): null;
    $operadora = isset($_POST["operadora"]) ? mb_strtoupper(trim($_POST["operadora"]), 'UTF-8') : null;
    $correo = isset($_POST["correo"]) ? trim($_POST["correo"]): null;
    $fechaNacimiento = isset($_POST["fechaNacimiento"]) ? trim($_POST["fechaNacimiento"]): null;
    date_default_timezone_set("America/Guayaquil");
    $fecha = date('Y-m-d H:i:s', time());
    
    $sql = "UPDATE usuario u, telefono t SET u.usu_cedula = '$cedula', u.usu_nombre = '$nombres', u.usu_apellido = '$apellidos', u.usu_direccion = '$direccion', t.tel_tipo = '$tip_telefono', t.tel_numero = '$telefono', t.tel_operadora = '$operadora', u.usu_fec_nac = '$fechaNacimiento', u.usu_fec_modificacion = '$fecha' WHERE u.usu_cod = $codigo and t.tel_usu_cod = $codigo";
    if ($conn->query($sql) === TRUE) {
        echo "Se ha actualizado los datos personales correctamemte!!!<br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
    }
    echo "<a href='../../vista/admin/indexAdmin.php'>Regresar</a>";
    $conn->close();
?>
</body>
</html>