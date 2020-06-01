<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Gestión de usuarios</title>
 <link href="../../../public/vista/CSS/CSSUSUARIO/indexUser.css" type="text/css"  rel="stylesheet"/>
</head>
<body>
    <header>
        <div class="prin">
            <a  href=""><img id='pri'src="../../../public/vista/Imagenes/pricipal.jpg" alt="Pcont"  /></a>
            <form METHOD=POST ACTION="../../controladores/usuario/telefonos/buscar_Tel.php">
                <input  type="text" id="buscar" name="buscar" size="75"  ng-click="busquedaTelefono()" placeholder="Buscar telefono ....."/> 
            </form>
            <?php 
            $id= $_GET["id"];
            echo "<a href='contraEditar.php?codigo=$id'><img id='log' src='../../../public/vista/Imagenes/editarContra.png' alt=''/></a>";
            echo "<a href='agregarTel.php?codigo=$id'><img id='men' src='../../../public/vista/Imagenes/addTel.png' alt=''/></a>";
            echo "<a  href='../../controladores/usuario/personal/sesion.php'><img id='acer' src='../../../public/vista/Imagenes/salir.png' alt=''/></a>";
            ?>
        </div>     
    </header>
    <div id="informacion">
            <h1>Datos Telefonicos</h1>
    </div>
            <table style="width:100%">
            <tr>
                <th>Tipo de Telefono</th>
                <th>Numero de Telefono</th>
                <th>Operadora de Telefono</th>
                <th colspan="2">Opciones de Telefono</th>
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