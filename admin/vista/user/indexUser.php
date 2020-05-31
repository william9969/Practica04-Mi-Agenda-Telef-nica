<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Gestión de usuarios</title>
</head>
<body>

    <table style="width:100%">
    <tr>
        <th>Tipo de Telefono</th>
        <th>Numero de Telefono</th>
        <th>Operadora de Telefono</th>
        <th colspan="3">Opciones de Telefono</th>
    </tr>
 <?php
 
    include '../../../config/conexionBD.php';
    $id= $_GET["id"];
    $sql = "SELECT * FROM telefono WHERE tel_usu_cod='$id' ";
    $result = $conn->query($sql);

 if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo " <td>" . $row['tel_tipo'] . "</td>";
        echo " <td>" . $row['tel_numero'] ."</td>";
        echo " <td>" . $row['tel_operadora'] . "</td>";
        echo " <td> <a href='agregarTel.php?codigo=$id'>Agregar</a> </td>";
        echo " <td> <a href='eliminarTel.php?codigo=" . $row['tel_cod'] . "'>Eliminar</a> </td>";
        echo " <td> <a href='modificarTel.php?codigo=" . $row['tel_cod'] . "'>Modificar</a> </td>";  
        echo "</tr>";
       }
    }
    else{
        echo "<p>No tienes Telefonos</p>";
    }
 $conn->close();
 ?>
</table>
</body>
</html>