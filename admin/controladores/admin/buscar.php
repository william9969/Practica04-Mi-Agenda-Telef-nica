<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Buscar datos de persona </title>
</head>
<body>
    <?php
    //incluir conexión a la base de datos
    include '../../../config/conexionBD.php';
    $cedula = $_GET['cedula'];
    echo "Hola " . $cedula;

    $sql = "SELECT * FROM usuario WHERE usu_eliminado = 'N' and usu_cedula='$cedula'";
    //cambiar la consulta para puede buscar por ocurrencias de letras
    $result = $conn->query($sql);
    echo " <table style='width:100%'>
    <tr>
    <th>Cedula</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Dirección</th>
        <th>Fecha Nacimiento</th>
        <th>Correo</th>
        <th colspan='4'> Acciones</th>
    </tr>";
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
    } else {
        echo "<tr>";
        echo " <td colspan='7'> No existen usuarios registradas en el sistema </td>";
        echo "</tr>";
    }
        echo "</table>";
        $conn->close();
    ?>
</body> 
</html>