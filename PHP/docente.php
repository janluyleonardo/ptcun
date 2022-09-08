<?php
include('../APP/conexion.inc.php');
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
      <p> Aca puedes ver las materias y los alumnos a tu cargo</p>
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
                  <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Buscar datos de alumno
                </h4>
              </div>
              <div class="panel-body">
                <div class="form-group">
                  <label for="Materia">Estudiante:</label>
                  <br>
                  <select id="Estudiante" name="Estudiante">
                    <option class="form-control" value="0">Seleccione:</option>
                    <?php
                    $query = $connect->prepare("SELECT * FROM estudiantes");
                    $query->execute();
                    $data = $query->fetchAll();

                    foreach ($data as $valores) :
                      echo '<option class="form-control" value="' . $valores["Documento"] . '">' . $valores["Nom_Estudiante"] . " " . $valores["Ape_estudiante"] . '</option>';
                    endforeach;
                    ?>
                  </select>
                  <br>
                  <label for="Carrera">Carrera:</label>
                  <br>
                  <select id="Carrera" name="Carrera">
                    <option class="form-control" value="0">Seleccione:</option>
                    <?php
                    $query = $connect->prepare("SELECT * FROM carrera");
                    $query->execute();
                    $data = $query->fetchAll();

                    foreach ($data as $valores) :
                      echo '<option class="form-control" value="' . $valores["id"] . '">' . $valores["id"] . " - " . $valores["nombre"] . '</option>';
                    endforeach;
                    ?>
                  </select>
                  <br>
                  <label for="Materia">Materia:</label>
                  <select id="Materia" name="Materia">
                    <option value="0">Seleccione:</option>
                    <?php
                    $query = $connect->prepare("SELECT * FROM materias");
                    $query->execute();
                    $data = $query->fetchAll();

                    foreach ($data as $valores) :
                      echo '<option value="' . $valores["ID_Materia"] . '">' . $valores["ID_Carrera"] . " - " . $valores["Nom_Materia"] . '</option>';
                    endforeach;
                    ?>
                  </select>
                  <br><br>
                  <button class="form-control" onclick="verDato()">Cargar datos</button>
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
                <span class="glyphicon glyphicon-save" aria-hidden="true"></span>
                Registrar datos de alumno
              </h3>
            </center>
          </div>

          <div class="panel-body">
            <form action="" method="post">
              <input type="text" name="nombreForm" id="nombreForm" class="form-control" placeholder="Nombre de alumno"
                readonly><br>
              <input type="text" name="carreraForm" id="carreraForm" class="form-control"
                placeholder="Carrera de alumno" readonly><br>
              <input type="text" name="materiaForm" id="materiaForm" class="form-control"
                placeholder="Materia de alumno" readonly><br>
              <input type="submit" class="form-control" value="Registrar" onclick="mensaje()">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script src="../JS/operaciones.js"></script>
  <script src="../JS/jquery.min.js"></script>
  <script src="../JS/bootstrap.min.js"></script>
</body>

</html>