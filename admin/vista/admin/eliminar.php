<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Eliminar datos de Persona</title>
    <link href="../../../public/vista/CSS/CSSADMINISTRADOR/eliminar.css" type="text/css"  rel="stylesheet"/>
</head>
<body>
    <?php

    $codigo = $_GET["codigo"];
    $sql = "SELECT * FROM usuario,telefono where usu_cod=$codigo and tel_usu_cod= $codigo";

    include '../../../config/conexionBD.php';
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    ?>
    <form id="formulario01" method="POST" action="../../controladores/admin/eliminar.php">
        <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>" />

        <label for="cedula">Cedula (*)</label>
        <input type="text" id="cedula" name="cedula" value="<?php echo $row["usu_cedula"]; ?>"
        disabled/>

        <br>
        <label for="nombres">Nombres (*)</label>
        <input type="text" id="nombres" name="nombres" value="<?php echo $row["usu_nombre"];
        ?>" disabled/>
        <br>
        <label for="apellidos">Apelidos (*)</label>
        <input type="text" id="apellidos" name="apellidos" value="<?php echo $row["usu_apellido"];
        ?>" disabled/>
        <br>
        <label for="direccion">Dirección (*)</label>
        <input type="text" id="direccion" name="direccion" value="<?php echo $row["usu_direccion"];
        ?>" disabled/>
        <br>
        <label for="tip_telefono">Tipo Teléfono (*)</label>
        <input type="text" id="tip_telefono" name="tip_telefono" value="<?php echo $row["tel_tipo"];
        ?>" disabled/>
        <br>
        <label for="telefono">Teléfono (*)</label>
        <input type="text" id="telefono" name="telefono" value="<?php echo $row["tel_numero"];
        ?>" disabled/>
        <br>
        <label for="operadora">Operadora (*)</label>
        <input type="text" id="operadora" name="operadora" value="<?php echo $row["tel_operadora"];
        ?>" disabled/>
        <br>
        <label for="fecha">Fecha Nacimiento (*)</label>
        <input type="text" id="fechaNacimiento" name="fechaNacimiento" value="<?php echo $row["usu_fec_nac"]; ?>" disabled/>
        <br>
        <label for="correo">Correo electrónico (*)</label>
        <input type="email" id="correo" name="correo" value="<?php echo $row["usu_email"]; ?>"
        disabled/>
        <br>

        <input type="submit" id="eliminar" name="eliminar" value="Eliminar" />
        <input type="reset" id="cancelar" onclick=history.back(); name="cancelar" value="Cancelar" />
     </form>
    <?php
    }
    } else {
    echo "<p>Ha ocurrido un error inesperado !</p>";
    echo "<p>" . mysqli_error($conn) . "</p>";
    }
    $conn->close();
    ?>
</body>
</html>
