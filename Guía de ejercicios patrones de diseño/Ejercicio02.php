<?php
// Interfaz Archivo
interface Archivo {
    public function abrir();
}

// Clase concreta Windows7Archivo
class Windows7Archivo {
    public function abrirArchivo() {
        return "Archivo abierto en formato Windows 7.";
    }
}

// Clase Adaptador
class AdaptadorArchivoWindows10 implements Archivo {
    private $archivoWindows7;

    public function __construct(Windows7Archivo $archivoWindows7) {
        $this->archivoWindows7 = $archivoWindows7;
    }

    public function abrir() {
        return $this->archivoWindows7->abrirArchivo() . " Adaptado para Windows 10.";
    }
}

// Ejemplo de uso
$archivoWindows7 = new Windows7Archivo();
$archivoAdaptado = new AdaptadorArchivoWindows10($archivoWindows7);
echo $archivoAdaptado->abrir(); // "Archivo abierto en formato Windows 7. Adaptado para Windows 10."
