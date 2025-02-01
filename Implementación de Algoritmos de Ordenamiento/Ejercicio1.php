<?php
/**
 * Ordena una lista de números de forma descendente usando Bubble Sort.
 * @param array $lista - Lista de números.
 * @return array - Lista ordenada de forma descendente.
 */
function bubbleSortDescendente($lista) {
    $n = count($lista);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($lista[$j] < $lista[$j + 1]) { // Comparación para orden descendente
                // Intercambiamos los elementos
                $temp = $lista[$j];
                $lista[$j] = $lista[$j + 1];
                $lista[$j + 1] = $temp;
            }
        }
    }
    return $lista;
}

// Ejemplo de uso
$lista = [64, 34, 25, 12, 22, 11, 90, -5, 34];
echo "Lista original: " . implode(", ", $lista) . "\n";
$listaOrdenada = bubbleSortDescendente($lista);
echo "Lista ordenada (descendente): " . implode(", ", $listaOrdenada);
?>