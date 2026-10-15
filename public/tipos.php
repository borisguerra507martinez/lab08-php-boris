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

// Muestro tipo y valor de cada variable
var_dump($codigo, $n1, $precio, $activo, $nulo, $lista);

// Conversión de tipos
$suma_str = "5" + "10";         // + suma: PHP convierte los textos a números y da 15
$concat   = "5" . "10";         // el punto une textos, por eso da "510"
$cast_int = (int) "12abc";      // (int) toma los números del inicio y corta en la letra: 12
$float_eq = (0.1 + 0.2 == 0.3); // false: 0.1 + 0.2 da 0.30000000000000004 por cómo se guardan los decimales
$loose    = ("10" == "1e1");    // true: == compara valor y "1e1" es 1x10 = 10
$strict   = ("10" === "1e1");   // false: === exige mismo tipo y mismo texto, y son textos distintos

// Arreglo final para el autograde
$resultado = [
    'codigo'   => $codigo,
    'n1'       => $n1,
    'n2'       => $n2,
    'suma'     => $suma,
    'division' => $division,
    'resto'    => $resto,
    'cociente' => $cociente,
    'precio'   => $precio,
    'activo'   => $activo,
    'tipos' => [
        'codigo' => gettype($codigo),
        'n1'     => gettype($n1),
        'precio' => gettype($precio),
        'activo' => gettype($activo),
        'nulo'   => gettype($nulo),
        'lista'  => gettype($lista),
    ],
    'juggling' => [
        'suma_str' => $suma_str,
        'concat'   => $concat,
        'cast_int' => $cast_int,
        'float_eq' => $float_eq,
        'loose'    => $loose,
        'strict'   => $strict,
    ],
    'constantes' => [
        'SEMILLA_LAB8' => constant('SEMILLA_LAB8'),
        'LAB_NUMERO'   => LAB_NUMERO,
        // Intento redefinir la constante: devuelve false porque una constante no se puede cambiar
        'redefinir'    => @define('SEMILLA_LAB8', 'otra'),
    ],
];

echo "\n##JSON## " . json_encode($resultado) . "\n";