<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.html#contacto");
    exit;
}

$errores = [];

$nombre = trim($_POST["nombre"] ?? "");
$email = trim($_POST["email"] ?? "");
$mensaje = trim($_POST["mensaje"] ?? "");

if ($nombre === "") {
    $errores[] = "El nombre no puede estar vacío.";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errores[] = "El correo electrónico no es válido.";
}

if ($mensaje === "") {
    $errores[] = "El mensaje no puede estar vacío.";
}

$nombreSeguro = htmlspecialchars($nombre, ENT_QUOTES, "UTF-8");
$emailSeguro = htmlspecialchars($email, ENT_QUOTES, "UTF-8");
$mensajeSeguro = htmlspecialchars($mensaje, ENT_QUOTES, "UTF-8");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del formulario — Tueste Norte</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <main>
        <?php if (count($errores) > 0): ?>
            <h1>No se pudo enviar el mensaje</h1>

            <ul>
                <?php foreach ($errores as $error): ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>

            <a href="index.html#contacto">Volver al formulario</a>
        <?php else: ?>
            <h1>Mensaje recibido</h1>

            <p>Gracias, <?= $nombreSeguro ?>.</p>

            <p>
                <strong>Email:</strong>
                <?= $emailSeguro ?>
            </p>

            <p><strong>Tu mensaje:</strong></p>
            <p><?= nl2br($mensajeSeguro) ?></p>

            <a href="index.html">Volver a Tueste Norte</a>
        <?php endif; ?>
    </main>
</body>

</html>