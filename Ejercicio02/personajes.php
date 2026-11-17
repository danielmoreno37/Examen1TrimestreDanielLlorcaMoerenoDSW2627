<?php

class Personaje
{
    private $nombre;
    private $publisher;
    private $alterEgo;
    private $primeraAparicion;
    private $personaje;
    private $picture;

    public function __construct($nombre, $publisher, $alterEgo, $primeraAparicion, $personajes, $picture = ""){
        $this->nombre = $nombre;
        $this->publisher = $publisher;
        $this->alterEgo = $alterEgo;
        $this->primeraAparicion = $primeraAparicion;
        $this->personaje = $personajes;
        $this->picture = $picture;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getPublisher(){
        return $this->publisher;
    }

    public function getAlterEgo(){
        return $this->alterEgo;
    }

    public function getPrimeraAparicion(){
        return $this->primeraAparicion;
    }
    public function getPicture(){
        return $this->picture;
    }

    public function getPersonaje(){
        return $this->personaje;
    }

    public function __toString(){
        return "<strong>{$this->nombre}</strong> - Alter Ego: {$this->alterEgo} - Aparición: {$this->primeraAparicion}";
    }
}
?>