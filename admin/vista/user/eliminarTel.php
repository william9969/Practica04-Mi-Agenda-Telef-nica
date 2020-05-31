<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Eliminar Telefono</title>
    <link href="../../../public/vista/CSS/CSSUSUARIO/eliminarTel.css" type="text/css"  rel="stylesheet"/>
</head>
<body>
    <?php
    include '../../../config/conexionBD.php';
    $codigo = $_GET["codigo"];
    $sql = "SELECT * FROM telefono where tel_cod=$codigo";  
    $result = $conn->query($sql);
    $sentencia = "SELECT tel_usu_cod FROM telefono where tel_cod=$codigo";    
    $cod=array_values(mysqli_fetch_array( $conn->query($sentencia)))[0];
    //echo "<p>Codigo---- $cod</p>"
    if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    ?>
        <form id="formulario01" method="POST" action="../../controladores/usuario/telefonos/del_Tel.php">
            <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>" />
            <input type="hidden" id="id" name="id" value="<?php echo $cod ?>" />
            <br>
            <label for="nombres">Tipo Telefono (*)</label>
            <input type="text" id="tipoTel" name="tipoTel" value="<?php echo $row["tel_tipo"];
            ?>" disabled/>
            <br>
            <label for="apellidos">Numero (*)</label>
            <input type="text" id="numTel" name="numTel" value="<?php echo $row["tel_numero"];
            ?>" disabled/>
            <br>
            <label for="direccion">Operadora (*)</label>
            <input type="text" id="opeTel" name="opeTel" value="<?php echo $row["tel_operadora"];
            ?>" disabled/>
            <br>
            <input type="submit" id="eliminar" name="eliminar" value="Eliminar" />
            <input type="reset" id="cancelar" name="cancelar" value="Cancelar" />
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
