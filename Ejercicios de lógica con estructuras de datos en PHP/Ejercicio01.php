<?php
/**
 * Invierte un array de números.
 * @param array $lista - Array de números.
 * @return array - Array invertido.
 */
function invertirLista($lista) {
    return array_reverse($lista); // Usamos array_reverse para invertir el array
}

// Ejemplo de uso
$numeros = [1, 2, 3, 4, 5];
$listaInvertida = invertirLista($numeros);
echo "Lista original: " . implode(", ", $numeros) . "\n";
echo "Lista invertida: " . implode(", ", $listaInvertida);
?>