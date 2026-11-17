<?php

class Producto
{
    private $id;
    private $nombre;
    private $categoria;
    private $precio;
    private $stock;
    private $estado;

    public function __construct($id, $nombre, $categoria, $precio, $stock){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->categoria = $categoria;
        $this->precio = $precio;
        $this->stock = $stock;

        $this->estado = $this->clasificarEstado($stock);

    }

    public function clasificarEstado($stock){
        if ($stock <= 3) return "Stock Bajo";
        if ($stock == 0) return "Sin Stock";
        if ($stock > 3) return "Disponible";
    }

    public function obtenerValorStockProducto (){
        $valorStockProducto = $this->stock * $this->precio;
        return $valorStockProducto;
    }

    public function __toString(){
        return $this->getId() . " - " . $this->getNombre() . " - " . $this->getCategoria() . " - " . $this->getPrecio() . " - " . $this->getStock() . " - " . $this->getEstado();
    }









    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
        return $this;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;
        return $this;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function setStock($stock)
    {
        $this->stock = $stock;
        return $this;
    }

    public function getEstado()
    {
        return $this->estado;
    }
}