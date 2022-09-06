<?

class Auto{
    #Atributos de la clase
    public $modelo;
    public $color;
    public $velocidad;

    #Constructor de Clase
    public function __construct($modelo, $color, $velocidad)
    {
        $this->modelo=$modelo;
        $this->color=$color;
        $this->velocidad=$velocidad;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;

    }

    public function accelerar()
    {
        echo "<p>Accelerando...</p>";
        $this->velocidad++;
    }

    public function frenar()
    {
        echo "<p>Frenando...</p>";
        $this->velocidad--;
    }

    public function getVelocidad()
    {
        return $this->velocidad;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

    }

    public function mostrarAuto()
    {
        $infoAuto="<h3> Informacion del Automovil</h3>";
        $infoAuto.="<p>Modelo: ". $this->getModelo() . "</p>";
        $infoAuto.="<p>Color: " . $this->getColor() . "</p>";
        $infoAuto.="<p>Velocidad Actual: " . $this->getVelocidad() . " kms/h</p>";

        return $infoAuto;
    }

}
?>

<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title>El constructor</title>
</head>
<body>
    <?
    #Para crear un objeto hay que instanciar la clase
        $miAuto=new Auto("Megane", "Azul", 250);
        echo $miAuto->mostrarAuto();
        echo "<br/>";
        $miAuto->accelerar();
        $miAuto->accelerar();
        $miAuto->accelerar();
        $miAuto->accelerar();
        $miAuto->accelerar();
        echo "<br/>";
        echo $miAuto->mostrarAuto();
        echo "<br/>";
        $miAuto->frenar();
        $miAuto->frenar();
        $miAuto->frenar();
        $miAuto->frenar();
        $miAuto->frenar();
        echo "<br/>";
        echo $miAuto->mostrarAuto();
    ?>
</body>
</html>
