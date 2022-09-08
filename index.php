    <?php
    if (isset($_GET['usr'])) {
      $msj = "Usuario no registrado!";
    } else {
      $msj = "";
    }
    ?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>LOGIN</title>
      <link rel="shortcut icon" href="IMG/logo.png">
      <link href="CSS/bootstrap.min.css" rel="stylesheet">
      <link href="CSS/estilos_propios.css?V=1" rel="stylesheet">
    </head>

    <body>
      <nav class="nabvar navbar-default navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
              aria-expanded="false" aria-controls="navbar">
              <span class="sr-only"></span>
              <!--Este boton despliega la barra de navegacion-->
              <span class="icon-bar"></span>
              <!--estos son los iconos que-->
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span><!-- estan dentro del boton cuando se minimiza la pagina-->
            </button>
            <a class="navbar-brand" href="index.php">S. G. C.</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse"></div>
        </div>
      </nav>
      <br>
      <div class="container">
        <div class="jumbotron">
          <center>
            <h1>Sistema Gestión CUN</h1>
            <p>Ingresa con tu usuario y contraseña</p>
          </center>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <div class="panel panel-default">
              <div class="panel-heading">
                <center>
                  <img src="IMG/logo_sesion.png" alt="inicio sesion" width="100"><br>
                </center>
              </div>
              <div class="panel-body">
                <center>
                  <span style="color:red;font-weight: bold;text-shadow: 1px 1px 1px #000;font-size:25px;">
                    <?php
                    echo $msj;
                    ?>
                  </span>
                </center><br>
                <form action="PHP/validar.php" method="post">
                  <input type="text" class="form-control" name="usuario" placeholder="Usuario" required><br>
                  <input type="password" class="form-control" name="passwd" placeholder="Contraseña" required><br>
                  <input type="submit" class="form-control" value="Ingresar">
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-4"></div>
        </div>
      </div>
      <script src="JS/jquery.min.js"></script>
      <script src="JS/bootstrap.min.js"></script>
    </body>

    </html>