<?php
    $tipoUsuario = "hgyuf"; //string
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>
    <h1>Condicionales</h1>

    <?php if ($tipoUsuario == "comprador"): ?>
        <h2>Comprador</h2>
        <p>Puedes realizar tus compras</p>
    <?php elseif ($tipoUsuario == "vendedor"): ?>
        <h2>Vendedor</h2>
        <p>Puedes vender tus productos</p>
    <?php elseif ($tipoUsuario == "administrador"): ?>
        <h2>Administrador</h2>
        <p>Puedes gestionar el sistema</p>
    <?php else: ?>
        <h2>Usuario Desconocido</h2>
        <p>Por favor inicie sesión</p>
    <?php endif;?>

    <p>Gracias por elegir nuestra plataforma</p>

</body>
</html>