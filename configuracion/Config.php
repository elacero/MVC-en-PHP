<?php
class Config
{
    private $vars;
    private static $instancia;

    public function __construct()
    {
        $this->vars=array();
    }

    public function __set($clave,$valor)
    {
        $this->vars[$clave]=$valor;
    }

    public function __get($clave)
    {
        return $this->vars[$clave];
    }
    /**
     * Aplicación del patrón Singleton.
     * 
     * @return única instancia de la clase
     */
    public static function getInstancia()
    {
        if(self::$instancia==NULL)
        {
            self::$instancia=new Config();
        }
        return self::$instancia;
    }
}