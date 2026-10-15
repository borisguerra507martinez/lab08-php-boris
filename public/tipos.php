<?php
declare(strict_types=1);

// Constante definida con define()
define('SEMILLA_LAB8', 'WEB2026-L8');

// Constante definida con const
const LAB_NUMERO = 8;

// Cargo mis datos del estudiante
require_once __DIR__ . '/../lib/estudiante.php';
$est = cargar_estudiante();

// Huella SHA-256 de mi cédula con la semilla
$huella = hash('sha256', $est['cedula'] . '|' . SEMILLA_LAB8);

$codigo = substr($huella, 0, 8);
$n1     = hexdec(substr($huella, 8, 2)) % 90 + 10;
$n2     = hexdec(substr($huella, 10, 2)) % 90 + 10;
$precio = round(hexdec(substr($huella, 12, 4)) / 100, 2);
$activo = ($n1 % 2 === 0);

// Operaciones aritméticas
$suma     = $n1 + $n2;
$division = round($n1 / $n2, 2);
$resto    = $n1 % $n2;
$cociente = intdiv($n1, $n2);

$nulo  = null;
$lista = [1, 2, 3];

// Prueba temporal: muestro los valores
var_dump($codigo, $n1, $n2, $precio, $activo);