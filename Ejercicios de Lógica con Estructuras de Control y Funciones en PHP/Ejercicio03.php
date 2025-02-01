<?php
/**
 * Determina si un número dado es primo.
 * @param int $numero - Número a verificar.
 * @return bool - True si es primo, False si no lo es.
 */
function esPrimo($numero) {
    if ($numero <= 1) {
        return false; // Los números menores o iguales a 1 no son primos
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false; // Si es divisible por algún número, no es primo
        }
    }
    return true; // Si no es divisible por ningún número, es primo
}

// Ejemplo de uso
$numero = 29; // Número a verificar
if (esPrimo($numero)) {
    echo "$numero es un número primo.";
} else {
    echo "$numero no es un número primo.";
}
?>