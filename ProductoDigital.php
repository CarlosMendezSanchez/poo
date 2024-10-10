<?php

include 'producto.php';

class ProductoDigita extends Producto {
    public function calularPrecioFinal() {
        return $this->precio;
    }
}
?>