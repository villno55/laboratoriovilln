<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$base_datos = "login_gmail";

$conn = new mysqli($servidor, $usuario, $clave, $base_datos);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
