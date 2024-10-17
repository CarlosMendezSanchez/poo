<?php
class ProductoController{
    //private $servicio;

public function __construct(){
    //Aqui creamos la construccion del objeto del Servicio
}

public function ListaProducto(){
    //Usar el atributo servicio y traerse los datos de BBDD para mostrarlo
}

public function ejecuta(){
    $producto = $this->ListaProducto();
    //Cargar la lista y guarda los productos
    require_once("Vista/Main.php");
}

}
?>
