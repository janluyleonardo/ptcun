<?php
//Mostramos la conexion para realizar la actualizacion
//Usaremos PDO para conectar PHP con MySQL

/*$connect = new PDO("mysql:host=localhost;dbname=php_consultapdo", "root", "");*/

// DB CREDENCIALES DE USUARIO.
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'Moreno880501');
define('DB_NAME', 'mdsr');

// Ahora, establecemos la conexión.
try {
    // Ejecutamos las variables y aplicamos UTF8
    $connect = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
        DB_USER,
        DB_PASS,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'")
    );
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
// class conexion
// {

//     private static $conexion;

//     public static function abrir_conexion()
//     {
//         if (!isset(self::$conexion)) {
//             try {
//                 include_once 'config.inc.php';
//                 self::$conexion = new PDO("mysql:host=$nombre_servidor; dbname=$nombre_database", $nombre_usuario, $password);
//                 self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//                 self::$conexion->exec("SET CHARACTER SET utf8");
//                 print 'Conexion Abierta!!!';
//             } catch (PDOException $ex) {
//                 print "ERROR en conexion: " . $ex->getMessage() . "termino<br>";
//                 die();
//             }
//         }
//     }

//     public static function cerrar_conexion()
//     {
//         if (isset(self::$conexion)) {
//             self::$conexion = null;
//             print 'conexion Cerrada!!!';
//         }
//     }

//     public static function obtener_conexion()
//     {
//         return self::$conexion;
//     }
// }