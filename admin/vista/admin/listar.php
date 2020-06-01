<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Listado de usuarios</title>
    <link href="../../../public/vista/CSS/CSSADMINISTRADOR/listar.css" type="text/css"  rel="stylesheet"/>
</head>
<body>
<h1>Listado de Usuarios</h1>
<table >
    <tr>
        <th>Cedula</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Dirección</th>
        <th>Fecha Nacimiento</th>
        <th>Correo</th>
        <th colspan="4"> Acciones</th>
    </tr>
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
    <?php
    include '../../../config/conexionBD.php';
    $sql = "SELECT * FROM usuario";
    $result = $conn->query($sql);
   
    if ($result->num_rows > 0) {
   
       while($row = $result->fetch_assoc()) {
           echo "<tr>";
           echo " <td>" . $row["usu_cedula"] . "</td>";
           echo " <td>" . $row['usu_nombre'] ."</td>";
           echo " <td>" . $row['usu_apellido'] . "</td>";
           echo " <td>" . $row['usu_direccion'] . "</td>";
           echo " <td>" . $row['usu_fec_nac'] . "</td>";
           echo " <td>" . $row['usu_email'] . "</td>";
           
           echo " <td> <a href='../../../admin/vista/admin/eliminar.php?codigo=" . $row['usu_cod'] . "'> <img id='imgl' src='../../../public/vista/Imagenes/eliminar.png'/>  Eliminar</a> </td>";
           echo " <td> <a href='../../vista/admin/modificar.php?codigo=" . $row['usu_cod'] . "'> <img id='imgl' src='../../../public/vista/Imagenes/modificar.png'/>  Modificar</a></td>";
           //echo " <td> <a href='buscar.php?cedula=" . $row['usu_cedula'] . "'>Buscar</a> </td>";
           echo " <td> <a href='../../vista/admin/cambiar_contrasena.php?codigo=" . $row['usu_cod'] . "'>Cambiar contraseña</a> </td>";
           echo "</tr>";
          }
       }
    $conn->close(); 
     ?>
</body>
</html>