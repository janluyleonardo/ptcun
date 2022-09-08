<?php
if (isset($_GET['name'])) {
  $name = $_GET['name'];
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>ESTUDIANTE</title>

  <link rel="shortcut icon" href="IMG/d.png">
  <link href="../CSS/bootstrap.min.css" rel="stylesheet">
  <link href="../CSS/estilos_propios.css?v=1" rel="stylesheet">
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
        <a class="navbar-brand" href="#">S. G. C.</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <!-- <li><a href="#">Entradas</a></li>
          <li><a href="#">Armadores</a></li>
          <li><a href="#">Autores</a></li>
          <li><a href="#">Libros</a></li> -->
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="../index.php">salir</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <br>
  <div class="container">
    <div class="jumbotron">
      <h1>Bienvenido <?php echo $name; ?></h1>
      <p> Aca puedes ver las materias que te registro el docente a cargo</p>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4>
                  <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Busqueda
                </h4>
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <input type="search" class="form-control" placeholder="Que es lo que buscas?">
                  <button class="form-control">Buscar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading">
            <center>
              <h3>
                <span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span>
                Tu materias registradas
              </h3>
            </center>
          </div>

          <div class="panel-body">
          </div>
        </div>
      </div>
    </div>
  </div>



  <script src="JS/jquery.min.js"></script>
  <script src="JS/bootstrap.min.js"></script>
</body>

</html>