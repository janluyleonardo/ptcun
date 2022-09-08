<?php
include('../APP/conexion.inc.php');
if (isset($_POST["nombreForm"])) {
  $nombrAlumno = $_POST["nombreForm"];
  $carreraAlumno = $_POST["carreraForm"];
  $materiaAlumno = $_POST["materiaForm"];
}