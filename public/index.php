<?php
/*
 * Página principal del Lab 8, hecha con PHP y HTML.
 * Muestra mi nombre y apellido, la versión de PHP
 * y la fecha y hora actuales de Panamá.
 */

// Incluyo estudiante.php, que trae la función cargar_estudiante() para leer mis datos del JSON
require_once __DIR__ . '/../lib/estudiante.php';

# Leo estudiante.json y guardo mis datos en $est como un arreglo asociativo (nombre, apellido, cédula y usuario de GitHub)
$est = cargar_estudiante();

// Pongo la zona horaria de Panamá para que las funciones de fecha y hora den la hora correcta
date_default_timezone_set('America/Panama');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lab 8 - <?php /* Con echo pongo mi apellido en el título de la pestaña */ echo $est['apellido']; ?></title>
</head>
<body>
    <?php // Uso <?= que es un atajo de echo, y uno nombre y apellido con el punto ?>
    <h1><?= $est['nombre'] . ' ' . $est['apellido'] ?></h1>

    <?php # Muestro la versión de PHP usando print en vez de echo ?>
    <p>Versión de PHP: <?php print PHP_VERSION; ?></p>

    <?php // date() con d/m/Y H:i muestra día/mes/año y hora:minutos ?>
    <p>Fecha y hora: <?= date('d/m/Y H:i') ?></p>
</body>
</html>