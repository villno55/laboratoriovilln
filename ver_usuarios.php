<?php
include("conexion.php");

$resultado = $conn->query("SELECT * FROM usuarios");
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Usuarios registrados</title>
  <link rel="stylesheet" href="style.css">
  <style>
    table {
      width: 80%;
      margin: 40px auto;
      border-collapse: collapse;
      background: #2a2b2f;
      color: #e8eaed;
      border-radius: 8px;
      overflow: hidden;
    }
    th, td {
      padding: 12px;
      border-bottom: 1px solid #5f6368;
    }
    th {
      background: #3c4043;
    }
  </style>
</head>
<body>
  <h1 style="text-align:center;">Usuarios Registrados</h1>
  <table>
    <tr>
      <th>ID</th>
      <th>Correo</th>
      <th>Contraseña</th>
    </tr>
    <?php while($fila = $resultado->fetch_assoc()): ?>
    <tr>
      <td><?= $fila['id'] ?></td>
      <td><?= htmlspecialchars($fila['correo']) ?></td>
      <td><?= htmlspecialchars($fila['password']) ?></td>
    </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>

<?php $conn->close(); ?>
