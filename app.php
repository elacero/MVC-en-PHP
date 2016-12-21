<?php
require_once ("./helpers/Autoload.php");
Autoload::add("./helpers");
Autoload::add("./configuracion");
Autoload::add("./controladores");
Autoload::add("./vistas");
Autoload::add("./modelos");
Autoload::add("./core");
Autoload::Load();

$configuracion=Config::getInstancia();
$configuracion->host="127.0.0.1";
$configuracion->database="northwind";
$configuracion->usuario="root";
$configuracion->contrasena="";
$configuracion->driver="mysql";
$configuracion->DB=new AccesoBaseDatos();

frontController::main();
