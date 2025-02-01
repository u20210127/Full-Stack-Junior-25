<?php
class Conexion {
    private $filePath;

    public function __construct($filePath) {
        $this->filePath = $filePath;
        if (!file_exists($this->filePath)) {
            file_put_contents($this->filePath, json_encode([]));
        }
    }

    public function leerDatos() {
        $contenido = file_get_contents($this->filePath);
        return json_decode($contenido, true);
    }

    public function guardarDatos($datos) {
        file_put_contents($this->filePath, json_encode($datos, JSON_PRETTY_PRINT));
    }
}
?>