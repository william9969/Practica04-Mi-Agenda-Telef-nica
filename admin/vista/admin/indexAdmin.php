<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Gestión de usuarios</title>
 <link href="../../../public/vista/CSS/CSSADMINISTRADOR/indexAdmi.css" type="text/css"  rel="stylesheet"/>
</head>
<body>
    
    <h1>Gestion de Usuarios</h1>

    <header>
    <div class="prin">
        <a  href="../../index.html"><img src="../../../public/vista/Imagenes/pricipal.jpg" alt="Pcont"  /></a>
        <form METHOD=POST ACTION="../controladores/buscador.php">
            <input  type="text" id="buscar" name="buscar" size="75"  onkeyup="return validarBusqueda(this)" placeholder="Buscar usuario ....."/> 
        </form>
        <a href="../../../public/vista/Docs/Login/login.html"><img id="log" src="../../../public/vista/Imagenes/login.png" alt=""/></a>
        <a  href="../../../public/vista/Docs/Validaciones/validacion.html"><img id="acer" src="../../../public/vista/Imagenes/anadir.png" alt=""/></a>
        
        </div>     
        
    </header>
  
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
        
        echo " <td> <a href='eliminar.php?codigo=" . $row['usu_cod'] . "'> <img id='imgl' src='../../../public/vista/Imagenes/eliminar.png'/>  Eliminar</a> </td>";
        echo " <td> <a href='modificar.php?codigo=" . $row['usu_cod'] . "'> <img id='imgl' src='../../../public/vista/Imagenes/modificar.png'/>  Modificar</a></td>";
        //echo " <td> <a href='buscar.php?cedula=" . $row['usu_cedula'] . "'>Buscar</a> </td>";
        echo " <td> <a href='cambiar_contrasena.php?codigo=" . $row['usu_cod'] . "'>Cambiar contraseña</a> </td>";
        echo "</tr>";
       }
    }
 $conn->close();
 ?>
</table>
</body>
</html>