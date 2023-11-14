<?php
    session_start();
    if(!isset($_SESSION['login'])){
        echo '<script>
        alert('favor iniciar seion');
        </script>'
    };
    header('Location: bienvenido.php');
    die();
    session_destroy();

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <h1>hola cara de veega</h1>
</body>
</html>