<?

class Persona{
    /**
     * Public:: Cualquier variable o método público puede ser accedido directamente por 
     * cualquier usuario de la clase.
     * 
     * Protected:: Los usuarios de la clase no pueden acceder a una variable o 
     * método protegido desde fuera, solo se puede acceder dentro de la misma clase y 
     * por clases heredadas y heredadas.
     * 
     * Private:: A una variable o método privado solo se puede acceder 
     * internamente desde la clase en la que está definida. Esto significa 
     * que no se puede llamar a una variable o método privado desde un elemento 
     * secundario que extiende la clase.
     * 
     */


    public $nombre = "Daniel";
    private $dni= "37930187";#Atributos Privados o Protegidos
    protected $apellido= "Gonzalez";


    #Constructor de la clase
    public function __construct(){}

    #Getters y Setters
    public function getNombre(){
        return $this->nombre;
    }

    public function getDNI(){
        return $this->dni;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }

    public function setDNI($dni){
        $this->dni=$dni;
    }

    public function setApellido($apellido){
        $this->apellido=$apellido;
    }
    #Metodos Publicos
    public function mostrarInfo(){
        $infoPersona= "<h3> Informacion Personal </h3>";
        $infoPersona.="<p>Nombre: " . $this->getNombre() . "</p>";
        $infoPersona.="<p>Apellido: " . $this->getApellido() . "</p>";
        $infoPersona.="<p>DNI: " . $this->getDNI() . "</p>";
        return $infoPersona;
    }

}

$nuevaPersona= new Persona();

echo $nuevaPersona->mostrarInfo();

?>