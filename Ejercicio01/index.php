<?php
include 'Inventario.php';
include 'Productos.php';


    $datosDeEntrada = [ ["id" => 1, "nombre" => "Portátil Gaming", "precio" => 1199.99, "stock" => 10, "categoria" => "Electrónica"], ["id" => 2, "nombre" => "Ratón Inalámbrico", "precio" => 45.50, "stock" => 3, "categoria" => "Electrónica"], ["id" => 3, "nombre" => "Teclado Mecánico", "precio" => 89.90, "stock" => 0, "categoria" => "Electrónica"], ["id" => 4, "nombre" => "Silla de Oficina", "precio" => 150.00, "stock" => 7, "categoria" => "Muebles"], ["id" => 5, "nombre" => "Cafetera Express", "precio" => 79.95, "stock" => 12, "categoria" => "Electrodomésticos"] ];

    $inventario001 = new Inventario ($datosDeEntrada);





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <h1>Panel de Inventario</h1>
    <div class="card"><?= $inventario001->obtenerValorTotalStock(); ?></div>
    <div class="card"><?= $inventario001->obtenerCategorias(); ?></div>
    <div class="card"><?= $inventario001->renderizarProductos(); ?></div>
    

    

</body>
</html>
     <?= $inventario001->obtenerProductoId(4); ?> 
    <?= $inventario001->obtenerNomProd(); ?>