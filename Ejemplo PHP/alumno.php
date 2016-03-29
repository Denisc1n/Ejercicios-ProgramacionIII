<?php

class Alumnos
{
	public $nombre;
	public $apellido;

	public function Mostrar()
	{
		$this->RetornarDatos();
	}

	private function RetornarDatos()
	{
		echo("<br><br>");
		echo("Su nombre es ".$this->nombre);
		echo("<br>");
		echo("Su apellido es ".$this->apellido); 
	}

	public static function MostrarEstatico($alumno)
	{
		$alumno->Mostrar();	
	} 

}

?>