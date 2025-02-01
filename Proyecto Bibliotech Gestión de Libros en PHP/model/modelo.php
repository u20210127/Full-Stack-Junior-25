<?php
class Modelo {
    private $conexion;

    public function __construct(Conexion $conexion) {
        $this->conexion = $conexion;
    }

    public function obtenerLibros() {
        return $this->conexion->leerDatos();
    }

    public function agregarLibro($libro) {
        $libros = $this->conexion->leerDatos();
        $libros[] = $libro;
        $this->conexion->guardarDatos($libros);
    }

    public function buscarLibros($campo, $valor) {
        $libros = $this->conexion->leerDatos();
        return array_filter($libros, function($libro) use ($campo, $valor) {
            return stripos($libro[$campo], $valor) !== false;
        });
    }

    public function prestarLibro($id) {
        $libros = $this->conexion->leerDatos();
        foreach ($libros as &$libro) {
            if ($libro['id'] == $id && $libro['estado'] === 'Disponible') {
                $libro['estado'] = 'Prestado';
                $this->conexion->guardarDatos($libros);
                return "El libro '{$libro['titulo']}' ha sido prestado.";
            }
        }
        return "El libro no está disponible o no existe.";
    }

    public function eliminarLibro($id) {
        $libros = $this->conexion->leerDatos();
        $libros = array_filter($libros, function($libro) use ($id) {
            return $libro['id'] != $id;
        });
        $this->conexion->guardarDatos($libros);
        return "El libro con ID $id ha sido eliminado.";
    }
}
?>
