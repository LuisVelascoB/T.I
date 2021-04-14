<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href ="stylemostrar.css"/>
        <link rel="preconnect" href="https://fonts.gstatic.com/" >
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
        <title>Mostrar Base de Datos</title>
    </head>
    
    <body>
        <div class="container">
            <div class="barra-superior">
                <div class="texto-menu">
                    <h2> Menu </h2> 
                </div>

                <div class="botones-bs">
                <a class="boton p-2" href="formulario.php"> Formulario </a>
                <a class="boton" href="mostrar.php"> Mostrar </a>
                </div>
            </div>
            <div class="tablita">
            <?php
                require_once "conexion2.php";
                require_once 'menu.php';
                $sql=$conexion->query("SELECT * FROM lista_asistencia_invitados");
                if(mysqli_num_rows($sql)>0){ 
                    ?>
                    <table>
                        <thead>
                            <th>nombre</th>
                            <th>apellido</th>
                            <th>correo</th>
                            <th>disfraz</th>
                            <th>bebida</th>
                            <th>asistencia</th>
                        </thead>
                        <tbody>
                            <?php while ($row=mysqli_fetch_array($sql)) { ?>
                                <tr>
                                    <td><?php echo $row["Nombre"]?></td>
                                    <td><?php echo $row["Apellido"]?></td>
                                    <td><?php echo $row["Correo"]?></td>
                                    <td><?php echo $row["Disfraz"]?></td>
                                    <td><?php echo $row["Bebida"]?></td>
                                    <td><?php echo $row["Asistencia"]?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                <?php }
            ?>
            </div>
            
            <div class="footer">
             <?php require_once 'footer.php'?>   
            </div>
        </div>
    </body>
</html>
