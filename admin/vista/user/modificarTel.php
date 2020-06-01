<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Modificar Telefono</title>
    <script type="text/javascript" src="../JavaScript/validacion.js"></script>
    <link href="../../../public/vista/CSS/CSSUSUARIO/modificarTel.css" type="text/css"  rel="stylesheet"/>
</head>
<body>
 <?php
    $codigo = $_GET["codigo"];
    $sql = "SELECT * FROM telefono where tel_cod= $codigo";
    include '../../../config/conexionBD.php';
    $result = $conn->query($sql);

    $sentencia = "SELECT tel_usu_cod FROM telefono where tel_cod=$codigo";    
    $cod=array_values(mysqli_fetch_array( $conn->query($sentencia)))[0];
    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
        ?>
        <form id="formulario01" method="POST" action="../../controladores/usuario/telefonos/upd_Tel.php">
                <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>" />
                <input type="hidden" id="id" name="id" value="<?php echo $cod ?>" />
                <br>
                <label for="tip_telefono">Editar Tipo Teléfono (*)</label>
                <input type="text" id="tip_telefono" onkeyup="return validarTipoTelefono(this)" name="tip_telefono" value="<?php echo $row["tel_tipo"];
                ?>" required placeholder="Ingrese...."/>
                <span id="mensajeTipTelefono" class="error"></span>
                <br>
                <label for="telefono">Editar Numero deTeléfono (*)</label>
                <input type="text" id="telefono" onkeyup="return validarTelefono(this)"  name="telefono" value="<?php echo $row["tel_numero"];
                ?>" required placeholder="Ingrese...."/>
                <span id="mensajeTelefono" class="error"></span>
                <br>
                <label for="operadora">Editar Operadora (*)</label>
                <input type="text" id="operadora" name="operadora" onkeyup="return validarOperadora(this)"  value="<?php echo $row["tel_operadora"];
                ?>" required placeholder="Ingrese...."/>
                <span id="mensajeOperadora" class="error"></span>
                <br>
                <input type="submit" id="modificar" name="modificar" value="Modificar" />
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