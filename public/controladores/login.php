<?php
    session_start();
    include '../../config/conexionBD.php';
    $usuario = isset($_POST["correo"]) ? trim($_POST["correo"]) : null;
    $contrasena = isset($_POST["contrasena"]) ? trim($_POST["contrasena"]) : null;
    $sql = "SELECT * FROM usuario WHERE usu_email='$usuario' and usu_password=MD5('$contrasena')";
    echo MD5('$contrasena'); 
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $_SESSION['isLogged'] = TRUE;
        header("Location: ../../admin/vista/admin/indexAdmin.php");
    } else {
        echo "<p>lOGGEO fALLIDO!! :)</p>"; 
       // header("Location: ../vista/Docs/Login/login.html");
    }
    $conn->close();
?>