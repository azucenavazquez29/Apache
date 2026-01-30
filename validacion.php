<?php
session_start();
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Consulta segura con prepared statement
    $stmt = $conexion->prepare("SELECT id, password FROM usuarios WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        if ($password === $fila["password"]) {
            $_SESSION["usuario_id"] = $fila["id"];
            header("Location: crud.php"); // Ajusta la ruta si crud.php está en otra carpeta
            exit();
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
    }
}
?>

