<?php

    // Herencia 
    // clase hereda de una clase abstracta 
    class Persona extends AccionesPersona {

        // Encapsulamiento
        // Modificadores de acceso
        private $nombre;
        private $edad;
	    private $trabaja;
	    private $estudia;
        
        public function __construct($nombre, $edad, $trabaja, $estudia) {
            $this -> nombre = $nombre;
            $this -> edad = $edad;
	        $this -> trabaja = $trabaja;
            $this -> estudia = $estudia;
        }

        public function presentarse() {
            echo 'Hola, soy '.$this->nombre.', tengo '.$this->edad.' años';
        }

        // Polimorfismo
        // Definición de las funciones de la clase abstracta

        // Igual para todos los objetos
        public function dormir() {
           echo 'Yo duermo mis horas completas';
    	}

        // las funciones trabajar y estudiar actuan diferente dependiendo
        // los atributos del objeto definidos en el constructor 

        public function trabajar() {	   
	        if ($this->trabaja) {
	   	        echo 'Yo si trabajo';
	        } else {
	    	    echo 'Yo no trabajo';
	        }
	    }

        public function estudiar() {
            if ($this->estudia) {
                echo 'Yo si estudio';
            } else {
                echo 'Yo no estudio';
            }
        }

        // Encapsulamiento 
        // Getters y Setters

        public function get_nombre() {
            return $this->nombre;
        }

        public function set_nombre($nombre) {
            $this->nombre = $nombre;
        }

        public function get_edad() {
            return $this->edad;
        }

        public function set_edad($edad) {
            $this->edad = $edad;
        }

        public function get_trabaja() {
            return $this->trabaja;
        }

        public function set_trabaja($trabaja) {
            $this->trabaja = $trabaja;
        }

        public function get_estudia() {
            return $this->estudia;
        }

        public function set_estudia($estudia) {
            $this->estudia = $estudia;
        }
    }

    // Abstracción
    abstract class AccionesPersona {

        abstract protected function dormir();
        abstract protected function trabajar();
        abstract protected function estudiar();

    }

?>
