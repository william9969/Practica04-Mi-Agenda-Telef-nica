<?php
 //incluir conexión a la base de datos
 include "conexionBD.php";
 $telefono = $_GET['telefono'];
 //echo "Hola " . $cedula;

 $sql = "SELECT * FROM telefono WHERE  tel_cod='$telefono'";
//cambiar la consulta para puede buscar por ocurrencias de letras
 $result = $conn->query($sql);
 echo " <table style='width:100%'>
 <tr>
 <th>Tipo Telefono</th>
 <th>Numero Telefono</th>
 <th>Operadora</th>
 </tr>";
 if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {

 echo "<tr>";
 echo " <td>" . $row['tel_tipo'] . "</td>";
 echo " <td>" . $row['tel_numero'] ."</td>";
 echo " <td>" . $row['tel_operadora'] . "</td>";
 echo "</tr>";
 }
 } else {
 echo "<tr>";
 echo " <td colspan='7'> No existe el telefono </td>";
 echo "</tr>";
 }
 echo "</table>";
 $conn->close();

?>