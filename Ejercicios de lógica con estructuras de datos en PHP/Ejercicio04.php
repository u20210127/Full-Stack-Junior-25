<?php
/**
 * Imprime un patrón de asteriscos en forma de pirámide.
 * @param int $niveles - Número de niveles de la pirámide.
 */
function imprimirPiramide($niveles) {
    for ($i = 1; $i <= $niveles; $i++) {
        // Imprimimos espacios para centrar los asteriscos
        for ($j = 1; $j <= $niveles - $i; $j++) {
            echo " ";
        }
        // Imprimimos los asteriscos
        for ($k = 1; $k <= 2 * $i - 1; $k++) {
            echo "*";
        }
        echo "\n"; // Salto de línea después de cada nivel
    }
}

// Ejemplo de uso
$niveles = 5; // Número de niveles de la pirámide
imprimirPiramide($niveles);
?>