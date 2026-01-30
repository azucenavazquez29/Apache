<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];

    // Usar prepared statement para evitar errores y SQL injection
    $stmt = $conexion->prepare("INSERT INTO actor (first_name, last_name) VALUES (?, ?)");
    $stmt->bind_param("ss", $nombre, $apellido);

    if ($stmt->execute()) {
        header("Location: crud.php");
        exit();
    } else {
        echo "Error al insertar: " . $conexion->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Agregar Actor</title>
</head>
<body style="background:#111; color:#fff; text-align:center;">
    <h2 style="color:#FFD700;">Agregar Actor 🎬</h2>
    <form method="POST">
        <input type="text" name="nombre" placeholder="Nombre" required><br><br>
        <input type="text" name="apellido" placeholder="Apellido" required><br><br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>