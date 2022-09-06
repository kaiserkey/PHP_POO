<?
include_once "verdura.php";

class Espinaca extends Verdura {
    public $cocinada=false;

    public function __construct()
    {
        parent::__construct("verde", true);
        /**
         * El Operador de Resolución de Ámbito (también denominado Paamayim Nekudotayim) 
         * o en términos simples, el doble dos-puntos, es un token que permite acceder 
         * a elementos estáticos, constantes, y sobrescribir propiedades o métodos de una clase.
         * Cuando se hace referencia a estos items desde el exterior de la definición de la clase, 
         * se utiliza el nombre de la clase. Las tres palabras claves especiales self, parent y static 
         * son utilizadas para acceder a propiedades y métodos desde el interior de la definición de la clase
         */
    }

    public function cocinarla()
    {
        $this->cocinada=true;
    }

    public function estaCocinada()
    {
        return $this->cocinada;
    }
}