<?php
class Vista {
	
	public $propiedades;
	
	public function __construct($initprop=NULL)
	{
		
		if($initprop==NULL)
		{
			$this->propiedades = array();
		}
		else
		{
			$this->propiedades=$initprop;	
		}
		$this->titulo="Título por defecto";
	}
	
	public function render($filename)
	{	
		ob_start();

		include ("cabecera.php");
		include($filename);
        include("pie.php");
		
		return ob_get_clean();
	}
	
	public function __set($k, $v)
	{	
		$this->propiedades[$k] = $v;	
	}
	
	public function __get($k)
	{	
		return $this->propiedades[$k];	
	}
	
}
?>