<?php
session_start();
include("db.php");

if (isset($_GET["id"])) {
    $id = intval($_GET["id"]); // convierte a número entero

    $stmt = $conexion->prepare("DELETE FROM actor WHERE actor_id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: crud.php");
        exit();
    } else {
        echo "Error al eliminar: " . $conexion->error;
    }
} else {
    echo "ID no especificado.";
}
?>
