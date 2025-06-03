
<?php
// Definición de una clase
class Persona {
    // Propiedades
    private $nombre;
    private $edad;

    // Constructor
    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    // Método para mostrar información
    public function saludar() {
        echo "Hola, mi nombre es " . $this->nombre . " y tengo " . $this->edad . " años.<br>";
    }
}

// Clase hija que hereda de Persona
class Estudiante extends Persona {
    private $carrera;

    public function __construct($nombre, $edad, $carrera) {
        parent::__construct($nombre, $edad);
        $this->carrera = $carrera;
    }

    public function mostrarCarrera() {
        echo "Estudio la carrera de " . $this->carrera . ".<br>";
    }
}

// Crear un objeto
$estudiante1 = new Estudiante("Ana", 20, "Ingeniería de Sistemas");
$estudiante1->saludar();           // Método heredado
$estudiante1->mostrarCarrera();    // Método propio
?>
