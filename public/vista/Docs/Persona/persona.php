<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Listar Telefonos</title>
 <link href="../../CSS/CSSPERSONA/persona.css" type="text/css"  rel="stylesheet" />
</head>
<body>
    <header>
        <div class="prin">
            <a  href="../../index.html"><img src="../../Imagenes/pricipal.jpg" alt="Pcont"  /></a>
            <input  type="text" size="75"/> 
            <a href="../Login/login.html"><img id="log" src="../../Imagenes/login.png" alt=""/></a>
            <img id="men" src="../../Imagenes/mensaje.png" alt=""/>
            <a  href="../Validaciones/validacion.html"><img id="acer" src="../../Imagenes/anadir.png" alt=""/></a>
        </div>   
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="../../index.html">Inicio</a></li>
                    <li><a href="../AsesoriaContable/acontable.html">Asesoria Contable</a></li>
                    <li><a href="../AsesoriaLaboral/alaboral.html">Asesoria Laboral</a></li>
                    <li><a href="../AsesoriaTributaria/atributaria.html">Asesoria Tributaria</a></li>
                    <li><a href="../Clientes/clientes.html">Clientes</a></li>
                    <li><a href="empresa.html">Nuestra Empresa</a></li>
                    <li><a href="../Contactenos/contactenos.html">Contactenos</a></li>
                    <li><a id="ultimo" href="../Ubicacion/ubicacion.html">Ubicacion</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="datos">
        <h1> Datos Personales</h1>   
        <?php
            $idU= $_GET["id"];
            include '../../../../config/conexionBD.php';
            $sqlU = "SELECT * FROM usuario WHERE usu_cod='$idU' ";
            $resultU = $conn->query($sqlU);
            $rowU = $resultU->fetch_assoc();
            echo "<h3> Nombre: </h3>";
            echo "<br>";
            echo " <p>" . $rowU["usu_nombre"] . " " . $rowU["usu_apellido"] . "</p>";
            echo "<br>";
            echo "<h3> Correo Electronico: </h3>";
            echo "<br>";
            echo " <p> <a href='mailto:".$rowU["usu_email"]."'> " . $rowU["usu_email"] . "</a></p>";
        ?>
    </section>
    <section id="telefonos">
        <h1>Lista de Telefonos</h1>
        <table >
            <tr>
                <th>Tipo de Telefono</th>
                <th>Numero</th>
                <th>Operadora</th>
            </tr>
            <?php
            $id= $_GET["id"];
            include '../../../../config/conexionBD.php';
            $sql = "SELECT * FROM TELEFONO WHERE tel_usu_cod='$id' ";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo " <td>" . $row["tel_tipo"] . "</td>";
                    echo " <td> <a href=tel:". $row['tel_numero'] .">" . $row['tel_numero'] ."</a></td>";
                    echo " <td>" . $row['tel_operadora'] . "</td>";
                    echo "</tr>";
                }
                }
            $conn->close();
            ?>
        </table>
    </section>
</body>
</html>