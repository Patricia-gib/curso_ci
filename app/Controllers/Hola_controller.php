<?php namespace App\Controllers;

class Hola_controller extends BaseController
{
	public function index()
	{
		echo 'Hola desde Hola_controller.php';
	}

public function parametrosAction($nombre, $edad)
	{
		$mensaje = 'Nombre:','$nombre.'<br/>;
		$mensaje = 'Edad:','$edad.'<br/>;
		echo $mensaje;
	}
	public function parametrosAction($nombre, $apellido)
	{
		$mensaje = 'Nombre:','$nombre.'<br/>;
		$mensaje = 'apellido:','$apellido.'<br/>;
		echo $mensaje;
	}
	public function vistaAction()
	{
		return view ('Hola view');
	}

	public function datosAction($nombre, $sueldo, $liquidop)
	{
		$mensaje = 'Nombre:','$nombre.'<br/>;
		$mensaje = 'sueldo:','$sueldo.'<br/>;
		$mensaje = 'liquido pagable:','$liquidop.'<br/>;
		echo $mensaje;
	}
}
