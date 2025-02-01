<?php
// Interfaz Personaje
interface Personaje {
    public function obtenerHabilidades();
}

// Clase concreta Guerrero
class Guerrero implements Personaje {
    public function obtenerHabilidades() {
        return "Habilidades básicas de Guerrero.";
    }
}

// Clase concreta Mago
class Mago implements Personaje {
    public function obtenerHabilidades() {
        return "Habilidades básicas de Mago.";
    }
}

// Decorador abstracto
abstract class PersonajeDecorator implements Personaje {
    protected $personaje;

    public function __construct(Personaje $personaje) {
        $this->personaje = $personaje;
    }

    public function obtenerHabilidades() {
        return $this->personaje->obtenerHabilidades();
    }
}

// Decorador concreto: Espada
class EspadaDecorator extends PersonajeDecorator {
    public function obtenerHabilidades() {
        return $this->personaje->obtenerHabilidades() . " Añadida habilidad de Espada.";
    }
}

// Decorador concreto: Escudo
class EscudoDecorator extends PersonajeDecorator {
    public function obtenerHabilidades() {
        return $this->personaje->obtenerHabilidades() . " Añadida habilidad de Escudo.";
    }
}

// Ejemplo de uso
$guerrero = new Guerrero();
$guerreroConEspada = new EspadaDecorator($guerrero);
$guerreroConEspadaYEscudo = new EscudoDecorator($guerreroConEspada);

echo $guerreroConEspadaYEscudo->obtenerHabilidades(); 
// "Habilidades básicas de Guerrero. Añadida habilidad de Espada. Añadida habilidad de Escudo."
