<?php
class HomeController
{
    //Declaración del modelo
    private $productosContext;
    
    public function __construct()
    {
        $this->productosContext=new Repositorio("products");
    }

    public function Index()
    {
        $vista=new Vista(array("datos"=>["Antonio","Juan","Miguel"]));
        $vista->titulo="Esta es la página inicial";
        //echo $vista->render("/cabecera.php");
        echo $vista->render("/Home/Index.php");
        //echo $vista->render("/pie.php");
    }

    public function ListaProductos()
    {
        $vista=new Vista(array("productos"=>$this->productosContext->getTodos()));
        $vista->titulo="Listado de productos";
        echo $vista->render("/Home/ListaProductos.php");
    }
}