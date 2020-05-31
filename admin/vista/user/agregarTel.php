<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Eliminar Telefono</title>
    <script type="text/javascript" src="../JavaScript/validacion.js"></script>
    <link href="../../../public/vista/CSS/CSSUSUARIO/agregarTel.css" type="text/css"  rel="stylesheet"/>
    <style type="text/css">
    .error {
        color: red;
        font-size: 8px;
    }
    </style>
</head>
<body>
    <?php
    $codigo = $_GET["codigo"];
    include '../../../config/conexionBD.php';
    
    ?>
    <form id="formulario01" method="POST" action="../../controladores/usuario/telefonos/add_Tel.php">
        <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>" />
        <br>
        <label for="tip_telefono">Tipo Telefono (*)</label>
        <br>
        <input type="text" id="tip_telefono"  onkeyup="return validarTipoTelefono(this)" name="tip_telefono" value="" placeholder="Ingrese el tipo de telefono..." />
        <span id="mensajeTipTelefono" class="error"></span>
        <br> 
        <label for="telefono">Teléfono (*)</label>
        <br>
        <input type="text" id="telefono" onkeyup="return validarTelefono(this)"  name="telefono" value="" placeholder="Ingrese su número telefónico..." />
        <span id="mensajeTelefono" class="error"></span>
        <br>
        <label for="operadora">Operadora (*)</label>
        <br>
        <input type="text" id="operadora" name="operadora" onkeyup="return validarOperadora(this)" value="" placeholder="Ingrese la operadora de su telefono..." />
        <span id="mensajeOperadora" class="error"></span>
        <br>
        <button type="submit" id="crear" name="crear" value="Aceptar">Aceptar </button>
        <button type="reset" id="cancelar" name="cancelar" value="Cancelar">Cancelar </button>
    </form>
    <?php
    $conn->close();
    ?>
</body>
</html>
