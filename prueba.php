<?php
require_once 'cliente.php';
require_once 'productoFisico.php';
$c1 = new Cliente("Pablo Mayo");
$c2 = new Cliente("Rocio Gonzalez");

$productofisico = new Productofisico("Telefono", 1000, 0.5);
echo "Nombre: " . $productofisico->getNombre() . ", Precio: " . $productofisico->getprecio() . ", Peso: " . $productofisico->calularPrecioFinal();

?>

<ol>
    <li><?= $c1->getNombre()?> </li>
    <li><?= $c2->getNombre()?> </li>
</ol>
