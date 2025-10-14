<?php
include("conexion.php");

$correo = $_POST['correo'] ?? '';
$password = $_POST['password'] ?? '';

if (!empty($correo) && !empty($password)) {
    $sql = "INSERT INTO usuarios (correo, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $correo, $password);
    if ($stmt->execute()) {
        echo "<script>alert('✅ Usuario guardado correctamente'); window.location='ver_usuarios.php';</script>";
    } else {
        echo "<script>alert('❌ Error al guardar'); window.history.back();</script>";
    }
    $stmt->close();
} else {
    echo "<script>alert('Por favor completa todos los campos'); window.history.back();</script>";
}

$conn->close();
?>
