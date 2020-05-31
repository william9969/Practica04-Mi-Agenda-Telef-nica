<?php
    session_start();
    include '../../config/conexionBD.php';
    $usuario = isset($_POST["correo"]) ? trim($_POST["correo"]) : null;
    $contrasena = isset($_POST["contrasena"]) ? trim($_POST["contrasena"]) : null;
    $sql = "SELECT usu_tipo,usu_cod FROM usuario WHERE usu_email='$usuario' and usu_password=MD5('$contrasena')";
   // echo MD5('$contrasena'); 
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $tipo_usu=array_values(mysqli_fetch_array( $conn->query($sql)))[0];
        $cod_usu=array_values(mysqli_fetch_array( $conn->query($sql)))[2];
        $_SESSION['isLogged'] = TRUE;
       if($tipo_usu=="U"){
            header("Location: ../../admin/vista/user/indexUser.php?id=$cod_usu");
        }
        if($tipo_usu=="A"){
            header("Location: ../../admin/vista/admin/indexAdmin.php");
        }
    } else {
        echo "<p>lOGGEO fALLIDO!! :)</p>"; 
       // header("Location: ../vista/Docs/Login/login.html");
    }
    $conn->close();
?>