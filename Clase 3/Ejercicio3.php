<?php 

class Cancion{
	
	public $titulo;
	public $autor;


	public function __construct($titulo, $autor){

		$this->autor = $autor;
		$this->titulo = $titulo;

	}

	public function getAutor(){
		return $this->autor;

	}


	public function setAutor($autor){
		$this->$autor = $autor;

	}

	public function getTitulo(){
		return $this->titulo;

	}


	public function setTitulo($titulo){
		$this->$titulo = $titulo;

	}
}

$cancion = new Cancion('Zafar','La Vela Puerca');

echo 'EJERCICIO 3: <br>'; 
echo 'Autor: '.$cancion->getAutor().'<br>';
echo ' Titulo: '.$cancion->getTitulo();

 ?>