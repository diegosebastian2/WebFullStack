<?php 

class Cafetera{
	
	public $capacidadMaxima;
	public $cantidadActual;


	public function __construct($capacidadMaxima = 1000, $cantidadActual = 0){

		$this->capacidadMaxima = $capacidadMaxima;
		$this->cantidadActual = $cantidadActual;

	}

	public function llenarCafetera()
	{
		$this->cantidadActual = $this->capacidadMaxima;

	}

	public function servirTaza($taza)
	{
		if ($this->cantidadActual < $taza) {
		 	$tazaServida = $this->cantidadActual;
		 	$this->cantidadActual = 0;
		 } else {
		 	$tazaServida = $taza;
		 	$this->cantidadActual -= $taza;
		 }
		  
		 return($tazaServida);

	}	

	public function vaciarCafetera()
	{
		$this->cantidadActual = 0;

	}

	public function agregarCafe($cantidad)
	{
		$this->cantidadActual += $cantidad;

		if ($this->cantidadActual > $this->capacidadMaxima) {
		 	$this->cantidadActual = $this->capacidadMaxima;
		 } 
	
	}	
	public function getDatosCafetera(){
		

		$estado = '<p>Cantidad: '.$this->cantidadActual.'</p>';

		return($estado);

	}	
}

$cafetera = new Cafetera();

echo 'EJERCICIO 2:'; 
echo $cafetera->getDatosCafetera();
echo '<hr>'; 
echo 'lleno la cafetera <br>'; 
$cafetera->llenarCafetera();
echo $cafetera->getDatosCafetera();
echo '<hr>'; 
echo 'sirvo taza de 600 <br>';
echo 'taza servida: '.$cafetera->servirTaza(600);
echo $cafetera->getDatosCafetera();
echo 'sirvo taza de 450 <br>';
echo 'taza servida: '.$cafetera->servirTaza(450);
echo $cafetera->getDatosCafetera();
echo 'vacio la taza <br>';
echo $cafetera->vaciarCafetera();
echo $cafetera->getDatosCafetera();
echo 'agrego 1100 a la cafetera';
echo $cafetera->agregarCafe(1100);
echo $cafetera->getDatosCafetera();




 ?>