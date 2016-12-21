<?php
class frontController
{
    
    public static function main()
    {
        
        //Formamos el nombre del Controlador o en su defecto, tomamos que es el HomeController
        if(! empty($_GET['controlador']))
        {
            $controllerName = $_GET['controlador'] . "Controller";
        }
        else
        {
            $controllerName = "HomeController";
        }

        //Formamos el nombre de la acción o en su defecto Index
        if(!empty($_GET["accion"]))
        {
            $actionName=$_GET["accion"];
        }
        else
        {
            $actionName="Index";
        }
        //require ("/Controladores/".$controllerName."php");
        if(is_callable(array($controllerName,$actionName))==false)
        {
            trigger_error("El controlador ".$controllerName." o la acción ".$actionName." no existen");
            return false;
        }

        //Crea el controlador
        $controlador=new $controllerName();
        //Llama al método (acción)
        $controlador->$actionName();
    }
}