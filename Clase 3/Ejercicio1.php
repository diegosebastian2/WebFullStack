<?php 

class Cuenta{
	
	public $nroCuenta;
	public $dni;
	//protected $dni;
	public $saldoActual;
	public $interes;


	public function __construct($dni, $nroCuenta, $saldoActual, $interes){

		$this->dni = $dni;
		$this->nroCuenta = $nroCuenta;
		$this->saldoActual = $saldoActual;
		$this->interes = $interes;

	}

	public function actualizarSaldo($interes)
	{
		$this->saldoActual += $this->saldoActual*($this->interes+$interes);

		$this->interes += $interes;

	}

	public function ingresar($saldo)
	{
		$this->saldoActual += $saldo;

	}	

	public function retirar($saldo)
	{
		$this->saldoActual -= $saldo;

	}

	public function getDatosCuenta(){
		

		$cuenta = '<p>Cuenta: '.$this->nroCuenta.'</p>';
		$cuenta .= '<p>Saldo: $'.$this->saldoActual.'</p>';
		$cuenta .= '<p>DNI: '.$this->dni.'</p>';
		$cuenta .= '<p>Interes: %'.$this->interes.'</p>';

		return($cuenta);

	}	
}

$cuenta = new Cuenta(32387444, 111, 100, 0.0);

echo 'EJERCICIO 1:' 
echo $cuenta->getDatosCuenta();
echo '<hr>'; 
echo 'ingreso $200 <br>'; 
$cuenta->ingresar(200);
echo $cuenta->getDatosCuenta();
echo '<hr>'; 
echo 'aplico %10 de interes'; 
$cuenta->actualizarSaldo(0.1);
echo $cuenta->getDatosCuenta();
echo '<hr>'; 
echo 'retiro $100'; 
$cuenta->retirar(100);
echo $cuenta->getDatosCuenta();




 ?>