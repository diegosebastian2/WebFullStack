<?php 

class Motor{
	
	public $estado;

	public function __construct(){

		$this->estado = 0;
	}
	public function getEstado(){

		return $this->estado;

	}

	public function encender(){
		$this->estado = 1;

	}

	public function apagar(){
		$this->estado = 0;

	}

}

class Rueda{
	
	public $presion;

	public function __construct(){

		$this->presion = 40;
	}

	public function getPresion(){

		return $this->presion;

	}
	public function inflar(){
		$this->presion += 1;

	}

	public function desinflar(){
		$this->presion -= 1;
		if ($this->presion < 0) {
			$this->presion = 0;
		}

	}

}


class Ventana{
	
	public $abierta;

	public function __construct(){

		$this->abierta = 0;
	}

	public function abrir(){
		$this->abierta = 1;

	}

	public function cerrar(){
		$this->abierta = 0;

	}

	public function getAbierta(){

		return $this->abierta;

	}

}

class Puerta{
	
	public $abierta;
	public $ventana;

	public function __construct(){

		$this->abierta = 0;
		$this->ventana = new Ventana();
	}

	public function getAbierta(){

		return $this->abierta;

	}

	public function abrir(){
		$this->abierta = 1;

	}

	public function cerrar(){
		$this->abierta = 0;

	}

}

class Coche{
	public $motor;
	public $rueda1;
	public $rueda2;
	public $rueda3;
	public $rueda4;
	public $puerta1;
	public $puerta2;

	public function __construct($energia, $nombre, $diasVida=0){

		$this->motor = new Motor();
		$this->rueda1 = new Rueda();
		$this->rueda2 = new Rueda();
		$this->rueda3 = new Rueda();
		$this->rueda4 = new Rueda();
		$this->puerta1 = new Puerta();
		$this->puerta2 = new Puerta();

	public function estadoAuto(){

		if ($this->motor->getEstado()==1) {
			$estado = 'Motor: Encendido<br>';
		} else {
			$estado = 'Motor: Apagado<br>';
		}

		$estado .= 'Presion Rueda 1: '.$this->rueda1->getPresion().'<br>';
		$estado .= 'Presion Rueda 2: '.$this->rueda2->getPresion().'<br>';
		$estado .= 'Presion Rueda 3: '.$this->rueda3->getPresion().'<br>';
		$estado .= 'Presion Rueda 4: '.$this->rueda4->getPresion().'<br>';

		if ($this->puerta1->getAbierta()==1) {
			$estado .= 'Puerta 1: Abierta -';
		} else {
			$estado .= 'Puerta 1: Cerrada -';
		}

		if ($this->puerta1->ventana->getAbierta()==1) {
			$estado .= 'Ventana: Abierta<br>';
		} else {
			$estado .= 'Ventana: Cerrada<br>';
		}

		if ($this->puerta2->getAbierta()==1) {
			$estado .= 'Puerta 2: Abierta -';
		} else {
			$estado .= 'Puerta 2: Cerrada -';
		}

		if ($this->puerta2->ventana->getAbierta()==1) {
			$estado .= 'Ventana: Abierta<br>';
		} else {
			$estado .= 'Ventana: Cerrada<br>';
		}


	}

}

 ?>