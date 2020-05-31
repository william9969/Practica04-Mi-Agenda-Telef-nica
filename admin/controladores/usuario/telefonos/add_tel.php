<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Agregar Nuevo Telefono</title>
</head>
<body>
    <?php
    include '../../../../config/conexionBD.php';
    $codigo = isset($_POST["codigo"]) ? trim($_POST["codigo"]) : null;
    $tip_telefono = isset($_POST["tip_telefono"]) ? mb_strtoupper(trim($_POST["tip_telefono"]), 'UTF-8') : null;
    $telefono = isset($_POST["telefono"]) ? trim($_POST["telefono"]): null;
    $operadora = isset($_POST["operadora"]) ? mb_strtoupper(trim($_POST["operadora"]), 'UTF-8') : null;
    $sql = "INSERT INTO telefono VALUES (0, '$tip_telefono','$telefono','$codigo','$operadora')";
    $res = $conn->query($sql);
    $id_user=mysqli_insert_id($conn);
    if ($res === TRUE) {
        echo "<p>Agregadocorrectamemte!!!</p>";
    }
     $conn->close();
     header("Location: ../../../vista/user/indexUser.php?id=$codigo");
    
     ?>
</body>
</html>