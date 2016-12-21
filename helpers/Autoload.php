<?php
class Autoload
{
    private static $paths=array();

    public static function add($path)
    {
        self::$paths[]=$path;
    }

    public static function Load()
    {
        
        set_include_path(implode(PATH_SEPARATOR, array_merge(array(get_include_path()),self::$paths)));
        spl_autoload_register();
    }
}
