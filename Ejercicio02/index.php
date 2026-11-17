<?php
require_once 'Personaje.php';
require_once 'editorial.php';

$user = "DC Comics";

$editorial = new editorial($user);

$personajes = $editorial->getPersonajes();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= $editorial->__toString(); ?>
</body>
</html>