<?php
    include '../../config/conexionBD.php';
    $busqueda = isset($_POST["buscar"]) ? trim($_POST["buscar"]) : null;
    
    $sql = "SELECT * FROM usuario WHERE usu_cedula='$busqueda'  or usu_email='$busqueda'";
    $result = $conn->query($sql);
    
    
    if ($result->num_rows > 0) {
        $user = array_values(mysqli_fetch_array($conn->query("SELECT * FROM usuario WHERE usu_cedula='$busqueda'  or usu_email='$busqueda'")))[0];    
        header("Location: ../vista/Docs/Persona/persona.php?id=$user");
    } 
    else {
        //echo "<p>No Encontrado </p>";
        //header("Location: ../vista/index.html");
    }
    $conn->close();
?>