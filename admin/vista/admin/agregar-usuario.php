<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Agregar Usuario</title>
    <script type="text/javascript" src="../JavaScript/validacion.js"></script>
    <link href="../../../public/vista/CSS/CSSADMINISTRADOR/agregar-usuario.css" type="text/css"  rel="stylesheet"/>
    <style type="text/css">
    .error {
        color: red;
        font-size: 8px;
    }
    </style>
</head>
<body>
    <?php
    //$codigo = $_GET["codigo"];
    include '../../../config/conexionBD.php';
    
    ?>
    <form id="formulario01" method="POST" action="../../controladores/admin/agregar-usuario.php">
    <label for="cedula">Cedula (*)</label>
        <br>
        <input type="text" id="cedula" name="cedula" value="" onkeyup="return validarCedula(this)"  placeholder="Ingrese el número de cedula ..."/>
        <span id="mensajeCedula" class="error"></span>
        
        <br>

        <label for="nombres">Nombres (*)</label>
        <br>
        <input type="text" id="nombres" name="nombres" value="" placeholder="Ingrese sus dos nombres ..." onkeyup="return validarNombres(this)"/>
        <span id="mensajeNombres" class="error"></span>
        <br>

        <label for="apellidos">Apelidos (*)</label>
        <br>
        <input type="text" id="apellidos" name="apellidos" value="" placeholder="Ingrese sus dos apellidos ... " onkeyup="return validarApellidos(this)"/>
        <span id="mensajeApellidos" class="error"></span>
        <br>

        <label for="direccion">Dirección (*)</label>
        <br>
        <input type="text" id="direccion" name="direccion" value="" placeholder="Ingrese su dirección ..." />
        <span id="mensajeDireccion" class="error"></span>
        <br>
        
        <label for="tip_telefono">Tipo Telefono (*)</label>
        <br>
        <input type="text" id="tip_telefono" name="tip_telefono" onkeyup="return validarTipoTelefono(this)" value="" placeholder="Ingrese el tipo de telefono..." />
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

        <label for="fecha">Fecha Nacimiento (*)</label>
        <br>
        <input type="text" id="fechaNacimiento" onkeyup="return validarFecha(this)" name="fechaNacimiento" value="" placeholder="yyyy-mm-dd" />
        <span id="mensajeFecha" class="error"></span>
        <br>

        <label for="correo">Correo electrónico (*)</label>
        <br>
        <input type="email" id="correo" name="correo"  onkeyup="return validarCorreo(this)" value="" placeholder="Ingrese su correo electrónico ..." />
        <span id="mensajeCorreo" class="error"></span>
        <br>

        <label for="password">Contraseña (*)</label>
        <br>
        <input type="password" id="contrasena" name="contrasena" value="" onkeyup="return validarContraseña(this)" placeholder="Ingrese su contraseña ..." />
        <span id="mensajeContrasena" class="error"></span>
        <br>
        <button type="submit" id="crear" name="crear" onclick="botonSubmit()" value="Aceptar">Aceptar </button>
        <button type="reset" id="cancelar" name="cancelar" value="Cancelar" onclick="window.close()">Cancelar </button>
        <!--<input type="submit" id="crear" name="crear" value="Aceptar" />
        <input type="reset" id="cancelar" name="cancelar" value="Cancelar" />-->
    </form>
    <?php
    $conn->close();
    ?>
</body>
</html>
