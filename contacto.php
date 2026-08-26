<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.html#contacto");
    exit;
}

$nombre = trim($_POST["nombre"] ?? "");
$email = trim($_POST["email"] ?? "");
$mensaje = trim($_POST["mensaje"] ?? "");

if (
    $nombre === "" ||
    !filter_var($email, FILTER_VALIDATE_EMAIL) ||
    mb_strlen($mensaje) < 10
) {
    http_response_code(400);
    exit("Los datos enviados no son válidos.");
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
    <title>Mensaje recibido — Tueste Norte</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <main>
        <h1>Mensaje recibido</h1>

        <p>Gracias, <?= $nombreSeguro ?>.</p>

        <p>
            <strong>Email:</strong>
            <?= $emailSeguro ?>
        </p>

        <p><strong>Tu mensaje:</strong></p>
        <p><?= nl2br($mensajeSeguro) ?></p>

        <a href="index.html">Volver a Tueste Norte</a>
    </main>
</body>
</html>