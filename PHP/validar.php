<?php
include('../APP/conexion.inc.php');
$usuario = $_POST["usuario"];
$passwd = $_POST["passwd"];

echo " =>" . $usuario . "<br> =>" . $passwd;

$sql = "SELECT * FROM usuarios WHERE Correo = '" . $usuario . "' AND password = '" . $passwd . "'";
$query = $connect->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);

if ($query->rowCount() > 0) {
  foreach ($results as $result) {
    $perfil = $result->Perfil;
    $nombre = $result->Nombres;
  }
}
if ($perfil == "Docente") {
  echo "entro en docente";
  $host  = $_SERVER['HTTP_HOST'];
  $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
  $extra = 'docente.php';
  header("Location: http://$host$uri/$extra?name=$nombre");
  exit;
} else if ($perfil == "Estudiante") {
  echo "entro en Estudiante";
  $host  = $_SERVER['HTTP_HOST'];
  $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
  $extra = 'estudiante.php';
  header("Location: http://$host$uri/$extra?name=$nombre");
  exit;
} else if ($perfil == "Administrador") {
  echo "entro en Administrador";
  $host  = $_SERVER['HTTP_HOST'];
  $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
  $extra = 'admin.php';
  header("Location: http://$host$uri/$extra?name=$nombre");
  exit;
} else {
  echo "entro en ninguno<br>";
  header("Location: ../index.php?usr=no");
  // $host  = $_SERVER['HTTP_HOST'];
  // $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
  // $extra = 'index.php';
  // echo "HOST=>" . $host . "<br>";
  // echo "URI=>" . $uri . "<br>";
  // header("Location: http://$host$uri/$extra?user=no");
  exit;
}