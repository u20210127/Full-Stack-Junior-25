<?php
class Controlador {
    private $modelo;

    public function __construct(Modelo $modelo) {
        $this->modelo = $modelo;
    }

    public function mostrarLibros() {
        return $this->modelo->obtenerLibros();
    }

    public function agregarLibro($id, $titulo, $autor, $categoria) {
        $nuevoLibro = [
            'id' => $id,
            'titulo' => $titulo,
            'autor' => $autor,
            'categoria' => $categoria,
            'estado' => 'Disponible'
        ];
        $this->modelo->agregarLibro($nuevoLibro);
    }

    public function buscarLibros($campo, $valor) {
        return $this->modelo->buscarLibros($campo, $valor);
    }

    public function prestarLibro($id) {
        return $this->modelo->prestarLibro($id);
    }

    public function eliminarLibro($id) {
        return $this->modelo->eliminarLibro($id);
    }
}
?>