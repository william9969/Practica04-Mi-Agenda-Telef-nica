<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Eliminar Telefono</title>
    <script type="text/javascript" src="../JavaScript/validacion.js"></script>
</head>
<body>
    <?php
    include '../../../config/conexionBD.php';
    $codigo = $_GET["codigo"];
    ?>
    <form id="formulario01" method="POST" action="../../controladores/usuario/telefonos/del_Tel.php">
        <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>" />
        <br>
        <label for="tip_telefono">Tipo Telefono (*)</label>
        <br>
        <input type="text" id="tip_telefono" onkeyup=""  name="tip_telefono" value="" placeholder="Ingrese el tipo de telefono..." />
        <span id="mensajeTipTelefono" class="error"></span>
        <br> 
        <label for="telefono">Teléfono (*)</label>
        <br>
        <input type="text" id="telefono" onkeyup="return validarTelefono(this)"  name="telefono" value="" placeholder="Ingrese su número telefónico..." />
        <span id="mensajeTelefono" class="error"></span>
        <br>
        <label for="operadora">Operadora (*)</label>
        <br>
        <input type="text" id="operadora" onkeyup=""  name="operadora" value="" placeholder="Ingrese la operadora de su telefono..." />
        <span id="mensajeOperadora" class="error"></span>
        <br>
    </form>
    <?php
    $conn->close();
    ?>
</body>
</html>
