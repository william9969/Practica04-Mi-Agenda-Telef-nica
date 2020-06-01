<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Gestión de usuarios</title>
 <link href="../../../public/vista/CSS/CSSUSUARIO/indexUser.css" type="text/css"  rel="stylesheet"/>
 <script  type="text/javascript" src="../JavaScript/validacion.js"></script>
</head>
<body>
    <header>
        <div class="prin">
            <a  href=""><img id='pri'src="../../../public/vista/Imagenes/pricipal.jpg" alt="Pcont"  /></a>
            <input  type="text" id="buscar" name="buscar" size="40"   onkeyup="return busquedaTelefono()" placeholder="Buscar telefono ....."/> 
            <?php 
                $id= $_GET["id"];
                echo "<a href='contraEditar.php?codigo=$id'><img id='log' src='../../../public/vista/Imagenes/editarContra.png' alt=''/></a>";
                echo "<a href='agregarTel.php?codigo=$id'><img id='men' src='../../../public/vista/Imagenes/addTel.png' alt=''/></a>";
                echo "<a  href='../../controladores/usuario/personal/sesion.php'><img id='acer' src='../../../public/vista/Imagenes/salir.png' alt=''/></a>";
            ?>
        </div>     
    </header>

    
    <section id="datos">
        <h1>Mis Datos</h1>
        <img id='pri'src="../../../public/vista/Imagenes/per1.png" alt="Pcont"  />
        <?php
            include '../../../config/conexionBD.php';
            $id= $_GET["id"];
            $sqlU = "SELECT * FROM usuario WHERE usu_cod='$id' ";
            $resultU = $conn->query($sqlU);
            $rowU = $resultU->fetch_assoc();
            echo "<h3> Cédula: </h3>";
            //echo "<br>";
            echo " <p>" . $rowU["usu_cedula"] . "</p>";
            echo "<br>";
            echo "<h3> Nombre: </h3>";
            //echo "<br>";
            echo " <p>" . $rowU["usu_nombre"] . " " . $rowU["usu_apellido"] . "</p>";
            echo "<br>";
            echo "<h3> Dirección: </h3>";
            //echo "<br>";
            echo " <p>" . $rowU["usu_direccion"] . "</p>";
            echo "<br>";
            echo "<h3> Fecha Nacimiento: </h3>";
            //echo "<br>";
            echo " <p>" . $rowU["usu_fec_nac"] . "</p>";
            echo "<br>";
            echo "<h3> Correo Electronico: </h3>";
            //echo "<br>";
            echo " <p> <a href='mailto:".$rowU["usu_email"]."'> " . $rowU["usu_email"] . "</a></p>";
            
        ?>
    </section>
    <section id="Btlf">
        <h1>Busqueda de Telefonos</h1>
            
        <div id="informacion">
        <p>Aun no ah buscado nada......</p>
        </div>
    </section>
    <section id="tlf">
        <h1>Mis Telefonos</h1>
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
    </section>

    <footer >
        <div class="fone">
            <a href="https://www.facebook.com/william.sinchi.3" ><img id="fbk" src="../../../public/vista/Imagenes/fb.jpg" alt=""/> </a>
            <a href="https://www.facebook.com/william.sinchi.3" ><img id="ins" src="../../../public/vista/Imagenes/insta.png" alt=""/> </a>
            <br>
            <img id="logof" src="../../../public/vista/Imagenes/pricipal.jpg" alt=""/>
            <br>
            <p>Correo: <a href="mailto:wsinchi@est.ups.edu.ec"> wsinchi@est.ups.edu.ec</a> <br></p>
            <p>Celular: <a href="tel:0980217186"> 0980217186</a> <br></p>
            <p>&#169; Todos los derechos reservados</p>

        </div>

        <div class="ftwo">
            <fieldset>
                <legend>¿Quienes somos?</legend>
                <hr>
                <h4>Nuestra Historia</h4>
                <h4>Nuestro Equipo</h4>
                <h4>¿Porque Nosotros?</h4>
                <h4>Nuestros Contactos</h4>
            </fieldset>
        </div>

        <div class="ftres">
            <fieldset>
                <legend > Ayuda</legend>
                <hr>
                <h4>Asistencias</h4>
                <h4>Pedidos</h4>
                <h4>Entregas</h4>
                <h4>Ventas</h4>
            </fieldset>
        </div>
        
    </footer>
</body>
</html>