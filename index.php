<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login Cine Sakila</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: url('cine-fondo.jpg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
        }

        .login-container {
            width: 350px;
            margin: 100px auto;
            background: rgba(0,0,0,0.7);
            padding: 30px;
            border-radius: 10px;
            color: #fff;
            text-align: center;
            box-shadow: 0 0 15px #000;
        }

        .login-container h1 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #FFD700; /* dorado estilo cine */
        }

        .login-container label {
            display: block;
            margin: 10px 0 5px;
         display: block;
            margin: 10px 0 5px;
            text-align: left;
        }

        .login-container input {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
        }

        .login-container button {
            margin-top: 15px;
            width: 100%;
            padding: 10px;
            background: #FFD700;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }

        .login-container button:hover {
            background: #FFA500;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>SAKILA APP</h1>
        <form method="POST" action="validacion.php">
            <label>Email:</label>
            <input type="text" name="email" required>
            
            <label>Password:</label>
            <input type="password" name="password" required>
            
            <button type="submit">Ingresar</button>
        </form>
    </div>
</body>
</html>

