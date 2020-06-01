<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Gestión de usuarios</title>
    <link href="../../../public/vista/CSS/CSSADMINISTRADOR/indexAdmi.css" type="text/css"  rel="stylesheet"/>
    <script  type="text/javascript" src="../JavaScript/validacion.js"></script>
</head>
<body>
    
    <h1>Gestion de Usuarios</h1>

    <header>
    <div class="prin">
        <a  href="../../index.html"><img src="../../../public/vista/Imagenes/pricipal.jpg" alt="Pcont"  /></a>
            <input  type="text" id="buscar" name="buscar" size="30"  onkeyup="return buscarPorCedula()" placeholder="Buscar usuario ....."/> 
        <a href="../../../public/vista/Docs/Login/login.html"><img id="log" src="../../../public/vista/Imagenes/login.png" alt=""/></a>
        <?php 
            echo "<a href='agregar-usuario.php'><img id='men' src='../../../public/vista/Imagenes/anadir.png' alt = ''/></a>";
            echo "<a href='listar.php'><img id='men1' src='../../../public/vista/Imagenes/listar.png' alt = ''/></a>";
            ?>
         <a href="../../../public/vista/index.html"><img id="acer" src="../../../public/vista/Imagenes/salir.png" alt=""/></a>
        </div>     
        
    </header>
    <div id="informacion">
            <h1>Datos Personales</h1>
    </div>
    
</table>
</body>
</html>