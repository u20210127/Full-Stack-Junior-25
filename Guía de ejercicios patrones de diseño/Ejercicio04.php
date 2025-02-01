<?php
// Interfaz Estrategia
interface EstrategiaSalida {
    public function mostrar($mensaje);
}

// Estrategia concreta: Salida por consola
class ConsolaSalida implements EstrategiaSalida {
    public function mostrar($mensaje) {
        echo "Consola: " . $mensaje . PHP_EOL;
    }
}

// Estrategia concreta: Salida en formato JSON
class JsonSalida implements EstrategiaSalida {
    public function mostrar($mensaje) {
        echo json_encode(["mensaje" => $mensaje]) . PHP_EOL;
    }
}

// Estrategia concreta: Salida en archivo TXT
class TxtSalida implements EstrategiaSalida {
    public function mostrar($mensaje) {
        file_put_contents("salida.txt", $mensaje);
        echo "Mensaje guardado en archivo TXT." . PHP_EOL;
    }
}

// Contexto
class Mensaje {
    private $estrategia;

    public function __construct(EstrategiaSalida $estrategia) {
        $this->estrategia = $estrategia;
    }

    public function setEstrategia(EstrategiaSalida $estrategia) {
        $this->estrategia = $estrategia;
    }

    public function mostrarMensaje($mensaje) {
        $this->estrategia->mostrar($mensaje);
    }
}

// Ejemplo de uso
$mensaje = new Mensaje(new ConsolaSalida());
$mensaje->mostrarMensaje("Hola mundo!"); // Consola: Hola mundo!

$mensaje->setEstrategia(new JsonSalida());
$mensaje->mostrarMensaje("Hola mundo!"); // {"mensaje":"Hola mundo!"}

$mensaje->setEstrategia(new TxtSalida());
$mensaje->mostrarMensaje("Hola mundo!"); // Mensaje guardado en archivo TXT.
