<?php
/**
 * Genera los primeros n términos de la serie Fibonacci.
 * @param int $n - Número de términos a generar.
 * @return array - Array con los términos de la serie Fibonacci.
 */
function generarFibonacci($n) {
    $fibonacci = []; // Array para almacenar la serie
    if ($n >= 1) {
        $fibonacci[] = 0; // Primer término de la serie
    }
    if ($n >= 2) {
        $fibonacci[] = 1; // Segundo término de la serie
    }
    for ($i = 2; $i < $n; $i++) {
        // Cada término es la suma de los dos anteriores
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return $fibonacci;
}

// Ejemplo de uso
$n = 10; // Generar los primeros 10 términos
$resultado = generarFibonacci($n);
echo "Serie Fibonacci de $n términos: " . implode(", ", $resultado);
?>