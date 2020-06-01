<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Modificar contrasena de persona</title>
    <script type="text/javascript" src="../JavaScript/validacion.js"></script>
    <link href="../../../public/vista/CSS/CSSADMINISTRADOR/cambiar-contrasena.css" type="text/css"  rel="stylesheet"/>
</head>
<body>
 <?php
    $codigo = $_GET["codigo"];
 ?>
 <form id="formulario01" method="POST" action="../../controladores/admin/cambiar_contrasena.php">

    <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>" />
    <label for="cedula">Contraseña Actual (*)</label>
    <input type="password" id="contrasena1" onkeyup="return validarContraseña(this)" name="contrasena1" value=""  required
    placeholder="Ingrese su contraseña actual ..."/>
    <span id="mensajeContrasena" class="error"></span>
    <br>
    <label for="cedula">Contraseña Nueva (*)</label>
    <input type="password" id="contrasena2" onkeyup="return validarContraseña(this)" name="contrasena2" value=""   required
    placeholder="Ingrese su contraseña nueva ..."/>
    <span id="mensajeContrasena" class="error"></span>
    <br>
    <input type="submit" id="modificar" name="modificar" value="Modificar" />         
    <input type="reset" id="cancelar"  onclick=history.back(); name="cancelar" value="Cancelar" />     
 </form>                                 
 
 </body> 
 </html> 