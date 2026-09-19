<?php

$errores = [];

$nombre = trim($_POST["nombre"] ?? "");
$plazasRecibidas = $_POST["plazas"] ?? "";

if ($nombre === "") {
    $errores[] = "El nombre no puede estar vacío.";
}

$opcionesPlazas = [
    "options" => [
        "min_range" => 1,
        "max_range" => 4
    ]
];

$plazas = filter_var(
    $plazasRecibidas,
    FILTER_VALIDATE_INT,
    $opcionesPlazas
);

if ($plazas === false) {
    $errores[] = "El número de plazas debe ser un entero entre 1 y 4.";
}

$nombreSeguro = htmlspecialchars($nombre, ENT_QUOTES, "UTF-8");
$plazasSeguras = htmlspecialchars((string) $plazas, ENT_QUOTES, "UTF-8");

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la inscripción</title>
</head>

<body>
    <main>
        <?php if (count($errores) > 0): ?>
            <h1>No se pudo completar la reserva</h1>

            <ul>
                <?php foreach ($errores as $error): ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>

            <a href="cata.html">Volver al formulario</a>
        <?php else: ?>
            <h1>Reserva confirmada</h1>

            <p>
                ¡Hecho, <?php echo $nombreSeguro; ?>!
                Te hemos reservado <?php echo $plazasSeguras; ?>
                plazas para la próxima cata.
            </p>

            <a href="cata.html">Hacer otra reserva</a>
        <?php endif; ?>
    </main>
</body>

</html>