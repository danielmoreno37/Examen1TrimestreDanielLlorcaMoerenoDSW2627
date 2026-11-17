<?php

class editorial{
    private $nombre;
    private $personajes = [];

    public function __construct($nombre, $personajes = []){
        $this->nombre = $nombre;
        $this->personajes = $personajes;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getPersonajes(){
        $result = $this->procesarPersonajes();
        return $result;
    }

    public function procesarPersonajes(){
        $fichero = 'superheroes.csv';
        $arrayProcesado = [];

        if (file_exists($fichero)) {
            $lineas = file($fichero, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            array_shift($lineas);

            for ($i = 0; $i < count($lineas); $i++) {
                $datos = str_getcsv($lineas[$i], ';');

                
                if (isset($datos[1]) && trim($datos[1]) === $this->nombre) {
                    $nuevoPersonaje = new Personaje(
                        $datos[0], 
                        $datos[1], 
                        $datos[2], 
                        $datos[3], 
                        $datos[4], 
                        $datos[5]  
                    );
                    
                    $arrayProcesado[] = $nuevoPersonaje;
                }
            }
        }

        $this->personajes = $arrayProcesado;
        return $this->personajes;
    }

    public function __toString() {
        $lista = $this->getPersonajes();
        
        $result = "<div class='card'>";
        $result .= "<h3>Editorial: " . $this->nombre . "</h3>";
        $result .= "<table border='1'>";
        $result .= "<thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Alter Ego</th>
                            <th>Primera Aparición</th>
                            <th>Personajes</th>
                        </tr>
                      </thead>";
        $result .= "<tbody>";
        
        for ($i = 0; $i < count($lista); $i++) {
            $heroe = $lista[$i];
            $result .= "<tr>";
            $result .= "<td><img src='" . $heroe->getPicture() . "' width='40' height='40'></td>";
            $result .= "<td><strong>" . $heroe->getNombre() . "</strong></td>";
            $result .= "<td>" . $heroe->getAlterEgo() . "</td>";
            $result .= "<td>" . $heroe->getPrimeraAparicion() . "</td>";
            $result .= "<td>" . $heroe->getPersonajes() . "</td>";
            $result .= "</tr>";
        }
        
        $result .= "</tbody>";
        $result .= "</table>";
        $result .= "</div>";
        
        return $result;
    }
}