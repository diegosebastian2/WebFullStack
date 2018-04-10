<?php 

class Ave{
	
	public $diasVida;
	protected $energia;
	public $kmRecorridos;
	public $nombre;


	public function getEnergia(){
		return $this->energia;

	}


	public function setEnergia($energia){
		$this->$energia = $energia;

	}

	public function __construct($energia, $nombre, $diasVida=0){

		$this->energia = $energia;
		$this->nombre = $nombre;
		$this->kmRecorridos = $diasVida;
		$this->diasVida = 0;

	}

	public function volar($kms)
	{
		$this->kmRecorridos += $kms;
		$this->energia -= $kms*2;
	}

	public function comer($maiz)
	{
		$this->energia += 5*$maiz;

	}	

	public function dormir()
	{
		$this->energia += 2;
		$this->diasVida ++;

	}	
}

class Paloma extends Ave{


}

class Gorrion extends Ave{

	public function volar($kms){
		$this->kmRecorridos += $kms;
		$this->energia -= $kms*3;
	}

}

class Canario extends Ave{

	public function cantar(){
		echo "la la la laralaaaaa";

	}

}

$maria = new Paloma(100, 'Maria');
$canario = new Canario(100, 'Canario');
$gorrion = new Gorrion(100, 'Gorrion');

echo 'Paloma Maria <hr>'; 
echo $maria->getEnergia().' energia <br>'; 
echo $maria->kmRecorridos.' kms recorrido <br>';
echo $maria->diasVida.' días de vida <br>'; 
echo '<hr>'; 

$maria->volar(10);
echo $maria->getEnergia().' energia <br>'; 
echo $maria->kmRecorridos.' kms recorrido <br>';
echo $maria->diasVida.' días de vida <br>'; 
echo '<hr>'; 

$maria->comer(1);
echo $maria->getEnergia().' energia <br>'; 
echo $maria->kmRecorridos.' kms recorrido <br>';
echo $maria->diasVida.' días de vida <br>';
echo '<hr>'; 

$maria->dormir();
echo $maria->getEnergia().' energia <br>'; 
echo $maria->kmRecorridos.' kms recorrido <br>';
echo $maria->diasVida.' días de vida <br>';
echo '<hr>';

echo 'canto del canario <hr>';
$canario->cantar(); 
echo '<hr>';

echo 'Gorrion <hr>';

$gorrion->volar(10); 
$gorrion->comer(1); 
$gorrion->dormir(); 
echo $maria->getEnergia().' energia <br>'; 
echo $maria->kmRecorridos.' kms recorrido <br>';
echo $maria->diasVida.' días de vida <br>'; 
echo '<hr>'; 



 ?>