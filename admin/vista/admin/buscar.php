<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Modificar datos de persona</title>
    <script type="text/javascript" src="../../vista/JavaScript/validacion.js"></script>
</head>
<body>
    <form onsubmit="return buscarPorCedula()"  method="POST" action="../../controladores/admin/buscar.php" >         
        <input type="text" id="cedula" name="cedula" value="">         
        <input type="button" id="buscar" name="buscar" value="Buscar" onclick="buscarPorCedula()"> 
        <div id="informacion"><b>Datos de la persona</b></div> 
    </form>
</body>
</html>