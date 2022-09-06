<?
class Verdura{

    public $color;
    public $comestible;

    public function __construct($color="verde", $comestible)
    {
        $this->color=$color;
        $this->comestible=$comestible;
    }

    public function esComestible()
    {
        return $this->comestible;
    }

    public function queColor()
    {
        return $this->color;
    }

}