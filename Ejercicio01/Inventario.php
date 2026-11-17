<?php

    class Inventario {

        private $productos = [];

        public function __construct(array $productos = []){
            $this->productos = [];
            foreach ($productos as $item) {
                if (is_array($item)) {
                    $this->productos[] = new Producto(
                        $item["id"],
                        $item["nombre"],
                        $item["categoria"],
                        $item["precio"],
                        $item["stock"]
                    );
                } else {
                    $this->productos[] = $item;
                }
            }
        }

        public function renderizarProductoss (){
            $productos = $this->productos;
            $result = " ";
            for ($i = 0; $i < count($productos); $i++){
                $result = $result . $productos[$i]->__toString() . "<br>";
            }
            return $result;
        }

        public function renderizarProductos (){
            $productos = $this->productos;
            $result =   "<table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Categoria</th>
                                    <th>Precio</th>
                                    <th>Stock</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>";
            
            for ($i = 0; $i < count($productos); $i++){
                
                $result = $result . "<tr>";
                $result = $result . "<td>" . $productos[$i]->getId() . "</td>";
                $result = $result . "<td>" . $productos[$i]->getNombre() . "</td>";
                $result = $result . "<td>" . $productos[$i]->getCategoria() . "</td>";
                $result = $result . "<td>" . $productos[$i]->getPrecio() . "</td>";
                $result = $result . "<td>" . $productos[$i]->getStock() . "</td>";
                $result = $result . "<td>" . $productos[$i]->getEstado() . "</td>";
                $result = $result . "</tr>";

            }
            $result = $result . "</tbody>
                        </table>";

            return $result;
                        
        }

        public function obtenerCategorias(){
            $articulos = $this->productos;
            $categoriaUnica = [];
            for ($i = 0; $i < count($articulos); $i++){
                $categoriaIteracion = $articulos[$i]->getCategoria();
                if (!in_array($categoriaIteracion, $categoriaUnica)){
                    $categoriaUnica[] = $categoriaIteracion;
                }
            }
            $result = "";
            for($i = 0; $i < count($categoriaUnica); $i++){
                $result = $result . $categoriaUnica[$i] . " ";
            }
            return $result;
        }

        public function obtenerValorTotalStock(){
            $total = 0;
            $articulos = $this->productos;
            for ($i = 0; $i < count($articulos); $i++){
                $total = $total + $articulos[$i]->obtenerValorStockProducto();
            }
            return $total;
        }

        public function obtenerProductoId($id){
            $result = "";
            $articulos = $this->productos;
            for ($i = 0; $i < count($articulos); $i++){
                if ($id == $articulos[$i]->getId()){
                    $result = $articulos[$i]->__toString();
                }
            }
            return $result;

        }

        public function obtenerNomProd(){
            $articulos = $this->productos;
            $nomProd = [];
            for ($i = 0; $i < count($articulos); $i++){
                $nomIteracion = $articulos[$i]->getNombre();
                if (!in_array($nomIteracion, $nomProd)){
                    $nomProd[] = $nomIteracion;
                }
            }
            $result = "";
            for($i = 0; $i < count($nomProd); $i++){
                $result = $result . $nomProd[$i] . "<br> ";
            }
            return $result;
        }


    }       



    

?>