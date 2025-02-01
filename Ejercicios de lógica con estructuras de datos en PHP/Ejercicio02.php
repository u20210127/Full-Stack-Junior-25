<?php
/**
 * Suma todos los números pares en un array.
 * @param array $numeros - Array de números enteros.
 * @return int - Suma de los números pares.
 */
function sumarPares($numeros) {
    $suma = 0;
    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) { // Verificamos si el número es par
            $suma += $numero;
        }
    }
    return $suma;
}

// Ejemplo de uso
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$resultado = sumarPares($numeros);
echo "La suma de los números pares es: $resultado";
?>