<?php
// Interfaz Personaje
interface Personaje {
    public function atacar();
    public function velocidad();
}

// Clase concreta Esqueleto
class Esqueleto implements Personaje {
    public function atacar() {
        return "El Esqueleto ataca con flechas.";
    }

    public function velocidad() {
        return "El Esqueleto tiene velocidad media.";
    }
}

// Clase concreta Zombi
class Zombi implements Personaje {
    public function atacar() {
        return "El Zombi ataca con mordiscos.";
    }

    public function velocidad() {
        return "El Zombi tiene velocidad lenta.";
    }
}

// Clase Factory
class PersonajeFactory {
    public static function crearPersonaje($nivel) {
        if ($nivel === "fácil") {
            return new Esqueleto();
        } elseif ($nivel === "difícil") {
            return new Zombi();
        } else {
            throw new Exception("Nivel desconocido.");
        }
    }
}

// Ejemplo de uso
$personaje = PersonajeFactory::crearPersonaje("fácil");
echo $personaje->atacar(); // "El Esqueleto ataca con flechas."
