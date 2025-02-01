<?php
/**
 * Ordena una lista de palabras alfabéticamente usando Merge Sort.
 * @param array $lista - Lista de palabras.
 * @return array - Lista ordenada alfabéticamente.
 */
function mergeSort($lista) {
    if (count($lista) <= 1) {
        return $lista; // Caso base: lista ya está ordenada
    }

    // Dividimos la lista en dos mitades
    $medio = intval(count($lista) / 2);
    $izquierda = array_slice($lista, 0, $medio);
    $derecha = array_slice($lista, $medio);

    // Aplicamos Merge Sort recursivamente
    $izquierda = mergeSort($izquierda);
    $derecha = mergeSort($derecha);

    // Combinamos las dos mitades ordenadas
    return merge($izquierda, $derecha);
}

/**
 * Combina dos listas ordenadas en una sola lista ordenada.
 * @param array $izquierda - Lista izquierda ordenada.
 * @param array $derecha - Lista derecha ordenada.
 * @return array - Lista combinada y ordenada.
 */
function merge($izquierda, $derecha) {
    $resultado = [];
    while (!empty($izquierda) && !empty($derecha)) {
        if ($izquierda[0] <= $derecha[0]) {
            $resultado[] = array_shift($izquierda);
        } else {
            $resultado[] = array_shift($derecha);
        }
    }
    // Añadimos los elementos restantes
    while (!empty($izquierda)) {
        $resultado[] = array_shift($izquierda);
    }
    while (!empty($derecha)) {
        $resultado[] = array_shift($derecha);
    }
    return $resultado;
}

// Ejemplo de uso
$lista = ["manzana", "banana", "cereza", "dátil", "arándano"];
echo "Lista original: " . implode(", ", $lista) . "\n";
$listaOrdenada = mergeSort($lista);
echo "Lista ordenada (alfabéticamente): " . implode(", ", $listaOrdenada);
?>