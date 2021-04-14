<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href ="estilo.css"/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
        <title>Parcial 2</title>
    </head>
    
    <body>
      <div class="container">
        <?php
        /*quitar los comentarios (//) si la tabla de prgramas esta vacia*/
        //require_once 'insertar_programas.php';
        ?>
        <form action="#" class="textosec" method="POST">
          <h3>Ingresar datos de estudiantes:</h3>
        <div class="inputs">
            <label for="codigo">Codigo:</label>
            <input type="text" name="codigo" required>

            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required>

            <label for="correo">Correo:</label>
            <input type="text" name="correo" required>

            <label for="promedio_acumulado">Promedio:</label>
            <input type="number" step="any" name="promedio_acumulado" required>

            <label for="pograma">Programa:</label>
            <input type="text" name="programa" required>

          </div>

            <input name="tipo_boton" class="boton" type="submit" value="Enviar" ></input>
            <?php require_once 'insertar_estudiantes.php'?>
        </form>
    <div class="tablas">
      <div class="tabla1">
        <h3>Tabla de Programa</h3>
        <?php
        require_once 'conexion.php';
        $sql1=$conexion->query("SELECT * FROM programa");
        if(mysqli_num_rows($sql1)>0){
        ?>
        <table>
          <thead>
            <th>codigo</th>
            <th>Nombre Programa</th>
            <th>Sede</th>
          </thead>
          <tbody>
            <?php while ($resultado1=mysqli_fetch_array($sql1)) { ?>
              <tr>
                <td><?php echo $resultado1["codigo"]?></td>
                <td><?php echo $resultado1["nombre_programa"]?></td>
                <td><?php echo $resultado1["sede"]?></td>
              </tr>
            <?php } ?>
          </tbody>
          </table>
        <?php } ?>
      </div>
      <div class="tabla2">
        <h3>Tabla de Estudiantes</h3>
        <?php
        require_once 'conexion.php';
        $sql2=$conexion->query("SELECT * FROM estudiantes");
        if(mysqli_num_rows($sql2)>0){
        ?>
        <table>
          <thead>
            <th>codigo</th>
            <th>Nombre</th>
            <th>Sede</th>
            <th>Promedio</th>
            <th>Programa Id</th>
          </thead>
          <tbody>
            <?php while ($resultado2=mysqli_fetch_array($sql2)) { ?>
              <tr>
                <td><?php echo $resultado2["codigo"]?></td>
                <td><?php echo $resultado2["nombre"]?></td>
                <td><?php echo $resultado2["correo"]?></td>
                <td><?php echo $resultado2["promedio_acumulado"]?></td>
                <td><?php echo $resultado2["programa_id"]?></td>
              </tr>
            <?php } ?>
          </tbody>
          </table>
        <?php } ?>
      </div>
    </div>
      <div class="filtros">
        <form action="#" class="textosec" method="POST">
          <h3>(Punto 1) Filtro por programa</h3>
          <h4>Seleccione el programa:</h4>
          <select name="filtro_programa" required>
            <option selected></option>
            <option value="multimedia">Multimedia</option>
            <option value="mecatronica">Mecatronica</option>    
            <option value="civil">Civil</option>
            <option value="industrial">Industrial</option>
          </select>

          <input name="tipo_boton" class="boton" type="submit" value="Filtrar" ></input>

          <div class="tablas">
            <div class="tablas3">
            <?php
            require_once "conexion.php";
            if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['tipo_boton']=="Filtrar"){
              if(!empty(trim($_POST["filtro_programa"]))){
                $programa=$_POST['filtro_programa'];
                $sql3=$conexion->query("SELECT estudiantes.codigo,estudiantes.nombre,estudiantes.correo,estudiantes.promedio_acumulado FROM estudiantes INNER JOIN programa ON estudiantes.programa_id=programa.codigo WHERE nombre_programa='$programa'");
                if(mysqli_num_rows($sql3)>0){?>
              <table class="tabla3">
                <thead>
                  <th>Codigo</th>
                  <th>Nombre</th>
                  <th>Correo</th>
                  <th>Promedio</th>
                </thead>
                <tbody>
                  <?php while ($resultado3=mysqli_fetch_array($sql3)) { ?>
                    <tr>
                      <td><?php echo $resultado3["codigo"]?></td>
                      <td><?php echo $resultado3["nombre"]?></td>
                      <td><?php echo $resultado3["correo"]?></td>
                      <td><?php echo $resultado3["promedio_acumulado"]?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            <?php } ?>
            <?php }?>
           <?php }?>
          </div>
        </div>
        </form>
      </div>
      <div class="filtro">
        <h3>(Punto 2) Promedio Bogota</h3>
        <?php
        //toca sacar el promedio ahi solo esta la suma
        require_once "conexion.php";
        $sql4=$conexion->query("SELECT SUM(promedio_acumulado) FROM estudiantes INNER JOIN programa ON estudiantes.programa_id=programa.codigo  WHERE sede='calle 100'");
        $aux=mysqli_fetch_lengths($sql4);
        $resultado4=mysqli_fetch_array($sql4);
        echo $resultado4['SUM(promedio_acumulado)'];
        ?>
      </div>
      <div class="filtro">
        <h3>(Punto 3) Promedio mas Alto</h3>
        <?php
        require_once "conexion.php";

        $sql5=$conexion->query("SELECT max(promedio_acumulado) FROM estudiantes");
        $resultado5=mysqli_fetch_array($sql5);
        $aux=$resultado5['max(promedio_acumulado)'];

        $sql6=$conexion->query("SELECT nombre FROM estudiantes WHERE promedio_acumulado ='$aux'");
        $resultado6=mysqli_fetch_array($sql6);
        echo $resultado6['nombre'];
        ?>
      </div>
      <div class="filtro">
        <h3>(Punto 4) Estudiantes y Programas</h3>
        <?php
        require_once "conexion.php";
        $sql7=$conexion->query("SELECT estudiantes.nombre,estudiantes.correo,programa.nombre_programa,programa.sede FROM estudiantes INNER JOIN programa ON estudiantes.programa_id=programa.codigo");
        if(mysqli_num_rows($sql7)>0){
        ?>
        <table class="tablas4">
                <thead>
                  <th>Nombre</th>
                  <th>Correo</th>
                  <th>Programa</th>
                  <th>Sede</th>
                </thead>
                <tbody>
                  <?php while ($resultado7=mysqli_fetch_array($sql7)) { ?>
                    <tr>
                      <td><?php echo $resultado7["nombre"]?></td>
                      <td><?php echo $resultado7["correo"]?></td>
                      <td><?php echo $resultado7["nombre_programa"]?></td>
                      <td><?php echo $resultado7["sede"]?></td>

                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            <?php } ?>
      </div>
    </div>
  </body>
</html>
