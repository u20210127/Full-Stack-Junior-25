<?php
/**
 * Calcula la frecuencia de cada carácter en una cadena.
 * @param string $cadena - Cadena de texto.
 * @return array - Array asociativo con la frecuencia de cada carácter.
 */
function frecuenciaCaracteres($cadena) {
    $frecuencia = []; // Array para almacenar la frecuencia de cada carácter
    for ($i = 0; $i < strlen($cadena); $i++) {
        $caracter = $cadena[$i];
        if (isset($frecuencia[$caracter])) {
            $frecuencia[$caracter]++; // Incrementamos la frecuencia si el carácter ya existe
        } else {
            $frecuencia[$caracter] = 1; // Inicializamos la frecuencia si el carácter no existe
        }
    }
    return $frecuencia;
}

// Ejemplo de uso
$texto = "hola mundo";
$resultado = frecuenciaCaracteres($texto);
echo "Frecuencia de caracteres:\n";
print_r($resultado);
?>