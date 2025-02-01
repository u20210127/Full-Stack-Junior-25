<?php
/**
 * Ordena una lista de nombres en orden alfabético usando Insertion Sort.
 * @param array $lista - Lista de nombres.
 * @return array - Lista ordenada alfabéticamente.
 */
function insertionSort($lista) {
    $n = count($lista);
    for ($i = 1; $i < $n; $i++) {
        $clave = $lista[$i];
        $j = $i - 1;

        // Movemos los elementos mayores que la clave a una posición adelante
        while ($j >= 0 && $lista[$j] > $clave) {
            $lista[$j + 1] = $lista[$j];
            $j = $j - 1;
        }
        $lista[$j + 1] = $clave;
    }
    return $lista;
}

// Ejemplo de uso
$lista = ["Juan", "Ana", "Carlos", "Beatriz", "David"];
echo "Lista original: " . implode(", ", $lista) . "\n";
$listaOrdenada = insertionSort($lista);
echo "Lista ordenada (alfabéticamente): " . implode(", ", $listaOrdenada);
?>