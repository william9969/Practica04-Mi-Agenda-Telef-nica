<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Crear Nuevo Usuario</title>
</head>
<body>
    <?php
    //incluir conexión a la base de datos
    include '../../../config/conexionBD.php';
    $cedula = isset($_POST["cedula"]) ? trim($_POST["cedula"]) : null;
    $nombres = isset($_POST["nombres"]) ? mb_strtoupper(trim($_POST["nombres"]), 'UTF-8') : null;
    $apellidos = isset($_POST["apellidos"]) ? mb_strtoupper(trim($_POST["apellidos"]), 'UTF-8') : null;
    $direccion = isset($_POST["direccion"]) ? mb_strtoupper(trim($_POST["direccion"]), 'UTF-8') : null;
    $tip_telefono = isset($_POST["tip_telefono"]) ? mb_strtoupper(trim($_POST["tip_telefono"]), 'UTF-8') : null;
    $telefono = isset($_POST["telefono"]) ? trim($_POST["telefono"]): null;
    $operadora = isset($_POST["operadora"]) ? mb_strtoupper(trim($_POST["operadora"]), 'UTF-8') : null;
    $correo = isset($_POST["correo"]) ? trim($_POST["correo"]): null;
    $fechaNacimiento = isset($_POST["fechaNacimiento"]) ? trim($_POST["fechaNacimiento"]): null;
    $tip_usuario = isset($_POST["tip_usuario"]) ? mb_strtoupper(trim($_POST["tip_usuario"]), 'UTF-8') : null;
    $contrasena = isset($_POST["contrasena"]) ? trim($_POST["contrasena"]) : null;
    $sql = "INSERT INTO usuario VALUES (0, '$cedula', '$nombres', '$apellidos', '$direccion','$fechaNacimiento','$correo', MD5('$contrasena'),'$tip_usuario','N',null,null)";
    $res = $conn->query($sql);
    $id_user=mysqli_insert_id($conn);

    if ($res === TRUE) {
        $sqlQ = "INSERT INTO telefono VALUES (0, '$tip_telefono', '$telefono',$id_user , '$operadora')";
        $resS = $conn->query($sqlQ);
   } else {
        if($conn->errno == 1062){
            echo "<h1>class='error'>La persona con la cedula $cedula ya esta registrada en el sistema </h1>";
        }else{
            echo "<h1> class='error'>Error: " . mysqli_error($conn) . "</h1>";
        }
    }

     //cerrar la base de datos
     $conn->close();
     header("<a href='../../vista/admin/listar.php'>Regresar</a>");
    
     ?>
</body>
</html>