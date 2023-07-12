<?php

class clase
{
    private $idHombre;
    private $idMujer;
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
        $this->nombre;
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
            $_SESSION["contador"]= 0;
        }
        $clavesHombre = count($_SESSION['hombre']);
        $clavesMujer = count($_SESSION['mujer']);
        if (!empty($this->nombre) && !empty($this->genero)) {
            switch ($this->genero) {
                case 'hombre':
                    $_SESSION['hombre'][] = [
                        "nombre" => $this->nombre,
                        "genero" => $this->genero,
                        
                    ];
                    break;
                case 'mujer':
                    $_SESSION['mujer'][] = [
                        "nombre" => $this->nombre,
                        "genero" => $this->genero
                    ];
            }
        }
        echo "<pre>";
        echo "<pre>";

        // for ($i = 0; $i < $clavesHombre; $i++) {
        //     $this->idHombre = substr($i, -1);
        // }
        // if ($this->idHombre <= 2) {
        //     echo $this->idHombre + 1 . "<br>";
        //     $this->idHombre +=2; 
        // }else {
        //     echo $this->idHombre + 2 . "<br>";            
        // }
        

        // for ($i = 0; $i < $clavesMujer; $i++) {
        //     $this->idMujer = substr($i + 1, -1);
        // }

        // if (!empty($_SESSION["mujer"])) {
        //     echo $this->idMujer + 2 . "<br>";
        // }






        print_r($_SESSION['hombre']);
        print_r($_SESSION['mujer']);
    }

    // public function guardar()
    // {   
    //         if (!isset($_SESSION['hombre'])) {
    //             $_SESSION["hombre"] = array();
    //             $_SESSION["mujer"] = array();           
    //         }
    //         $clavesHombre = count($_SESSION['hombre']);
    //         $clavesMujer = count($_SESSION['mujer']);
    //         if (!empty($this->nombre) &&  !empty($this->genero)) {

    //             switch ($this->genero) {
    //                 case 'hombre':
    //                     $_SESSION['hombre'][] = [
    //                         "nombre" => $this->nombre,
    //                         "genero"=> $this->genero,
    //                         "contador" => 0
    //                     ];
    //                     // print_r($this->genero);
    //                     // echo 'holasolholaestrellitas';                        
    //                     break;
    //                     case 'mujer':
    //                         $_SESSION['mujer'][] = [
    //                             "nombre" => $this->nombre,
    //                             "genero"=> $this->genero
    //                         ];
    //             }                
    //         }
    //         echo "<pre>";
    //         echo "<pre>";

    //         for ($i=0; $i <= $clavesHombre ; $i++) { 
    //             echo $i+1 ."<br>";
    //         }

    //         for ($i=0; $i <= $clavesMujer ; $i++) { 
    //             echo $i+1 ."<br>";
    //         }
    //         print_r($_SESSION['hombre']);            
    //         print_r($_SESSION['mujer']);
    //     }
}