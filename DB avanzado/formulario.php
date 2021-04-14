<!DOCTYPE html>

<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href ="stylechevere.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com/" >
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
    <title>Formulario</title>
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
      
      <div class="container-datos">
        <form action="#" class="textosec" method="POST">
          <div class="datos-nombres">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre"required>
          </div>

          <div class="datos-apellido">
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" required>
          </div>

          <div class="datos-correo">
            <label for="correo">Correo:</label>
            <input type="email" name="correo" required>
          </div> 
          <div class="datos-disfraz">
            <label for="disfraz">Disfraz: &nbsp</label>
            <input type="text" name="disfraz" required>
          </div>
          <div class="datos-bebida">
            <label for="bebida">Bebida:</label>
            <input type="text" name="bebida" required>
          </div>
          <div class="datos-radio1">
            <p>Asistencia: </p>
            <input type="radio" name="asistencia" value="si" required>
            <label for="asistencia">Si</label>
            <p>&nbsp</p>
            <input type="radio" name="asistencia" value="no" required>
            <label for="asistencia">No</label>
          </div>
          <div class="botoncitoenviar">
            <input class="enviar" type="submit" value="Enviar" ></input>
          </div>
          <?php require_once 'guardar.php'?>
        </form> 

        <div class="footer">
          <?php require_once 'footer.php'?>
        </div>
        
      </div>
    </div>
  </body>
</html>