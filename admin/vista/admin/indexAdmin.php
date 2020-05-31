<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Gestión de usuarios</title>
</head>
<body>

    <table style="width:100%">
    <tr>
        <th>Cedula</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Dirección</th>
        <th>Fecha Nacimiento</th>
        <th>Correo</th>
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
        echo " <td> <a href='eliminar.php?codigo=" . $row['usu_cod'] . "'>Eliminar</a> </td>";
        echo " <td> <a href='modificar.php?codigo=" . $row['usu_cod'] . "'>Modificar</a> </td>";
        echo " <td> <a href='cambiar_contrasena.php?codigo=" . $row['usu_cod'] . "'>Cambiar
       contraseña</a> </td>";
        echo "</tr>";
       }
    }
 $conn->close();
 ?>
</table>
</body>
</html>