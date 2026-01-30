<?php
session_start();
if (!isset($_SESSION["usuario_id"])) {
    header("Location: index.php");
    exit();
}
include("db.php");

// Leer actores
$resultado = $conexion->query("SELECT * FROM actor");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cartelera de Actores - Sakila</title>
    <style>
        body { font-family: Arial; background: #111; color: #fff; }
        h2 { text-align: center; color: #FFD700; }
        table { width: 80%; margin: 20px auto; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #FFD700; text-align: center; }
        th { background: #FFD700; color: #000; }
        a, button { padding: 5px 10px; margin: 2px; cursor: pointer; text-decoration: none; }
        .btn { background: #FFD700; color: #000; border-radius: 5px; }
        .btn:hover { background: #FFA500; }
    </style>
</head>
<body>
    <h2>🎬 Lista de Actores (Sakila)</h2>
    <a href="crear.php" class="btn">Agregar Actor</a>
    <table>
        <tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Acciones</th></tr>
        <?php while($fila = $resultado->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $fila["actor_id"]; ?></td>
            <td><?php echo $fila["first_name"]; ?></td>
            <td><?php echo $fila["last_name"]; ?></td>
            <td>
                <a href="editar.php?id=<?php echo $fila["actor_id"]; ?>" class="btn">Editar</a>
               <a href="eliminar.php?id=<?php echo $fila["actor_id"]; ?>" class="btn">Eliminar</a>

            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
