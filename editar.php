<?php
// Archivo de vista de editar o actualizar
include("db.php");
$id = $_GET["id"];
$resultado = $conexion->query("SELECT * FROM actor WHERE actor_id=$id");
$actor = $resultado->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $conexion->query("UPDATE actor SET first_name='$nombre', last_name='$apellido', last_update=NOW() WHERE actor_id=$id");
    header("Location: crud.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Editar Actor</title>
</head>
<body style="background:#111; color:#fff; text-align:center;">
    <h2 style="color:#FFD700;">Editar Actor 🎬</h2>
    <form method="POST">
        <input type="text" name="nombre" value="<?php echo $actor['first_name']; ?>" required><br><br>
        <input type="text" name="apellido" value="<?php echo $actor['last_name']; ?>" required><br><br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>









