<?php
class clase
{
    private $contadorHombre=0;
    private $contadorMujer=0;
    private $genero; 
    private $nombre;
    public $hombre = 0;
    public $mujer = 0;
    
    public function setGenero($genero)
    {
        $this->genero = $genero;
    }
    public function getGenero()
    {
        return $this->genero;
    }
    public function setHombre($hombre)
    {
        $this->hombre = $hombre;
    }
    public function getHombre()
    {
        return $this->hombre;
    }
    public function setMujer($mujer)
    {
        $this->mujer = $mujer;
    }
    public function getMujer()
    {
        return $this->mujer;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setContadorHombre($contadorHombre){
        return $this->contadorHombre = $contadorHombre;
    }
    public function getContadorHombre(){
        return $this->contadorHombre;
    }
    public function validarGenero()
    {
        if (!empty($this->genero)) {
            switch ($this->genero) {
                case 'hombre':
                    echo $this->genero;
                    break;
                case 'mujer':
                    echo $this->genero;
                    break;
            }
        }
    }
    
    public function guardar()
    {
        if (!isset($_SESSION['hombre'])) {
            $_SESSION["hombre"] = array();
            $_SESSION["mujer"] = array();
        }
        
        if (!empty($this->nombre) && !empty($this->genero)) {
            switch ($this->genero) {
                case 'hombre':
                    $this->hombre++;
                    $_SESSION['hombre'][] = [
                        "nombre" => $this->nombre,
                        "genero" => $this->genero,
                        
                    ];
                    break;
                case 'mujer':
                    $this->mujer++;
                    $_SESSION['mujer'][] = [
                        "nombre" => $this->nombre,
                        "genero" => $this->genero,                        
                    ];
                    break;
            }
        }
        
        echo "<pre>";
        echo "<pre>";
        // echo "hola ".$value['nombre']." es la persona ".$this->contadorMujer . "<br>";
        // if($this->genero=='hombre'){
            //     $_SESSION['hombre']['contador']++;
            // }
            // foreach ($_SESSION['hombre'] as $hombre) {
                //     echo "Hombre: " . $hombre['contador']++ . "<br>";
                // }
                
                // foreach ($_SESSION['mujer'] as $mujer) {
                    //     echo "Mujer: " . $mujer['contador'] . "<br>";
                    // }
                    
                    print_r($_SESSION['hombre']);
                    print_r($_SESSION['mujer']);
                }
                // public function mostrar(){
                //     foreach ($_SESSION['hombre'] as $value) {            
                //         $this->contadorHombre++; 
                //     }
                //     // echo "hola ".$value['nombre']." es la persona ".$this->contadorHombre . "<br>";
                //     // print_r($this->getContadorHombre());
                //     return $this->contadorHombre;                    
                    
                // }
                // public function mostrar1(){
                //     foreach ($_SESSION['mujer'] as $value) {            
                //         $this->contadorMujer++; 
                //     }
                //     return $this->contadorMujer;
                // }
                public function mostrar()
{
    $totalHombres = count($_SESSION['hombre']);
    $totalMujeres = count($_SESSION['mujer']);
    return $totalHombres + $totalMujeres;
}
}
