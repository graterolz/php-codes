<?php
	// define una Clase
	class Automovil {
		// propiedades
		public $color;
		public $modelo;
		public $velocidad = 55; 
		// metodos
		public function acelerador() {
			$this->velocidad += 10;
			echo 'Aumenta la velocidad a ' . $this->velocidad . '...';
		}
		//
		public function freno() {
			$this->velocidad -= 10;
			echo 'Disminuye la velocidad a ' . $this->velocidad . '...';
		}
		//
		public function direccion() {
			$this->freno();
			echo 'Da una vuelta...';
			$this->acelerador();
		}
	}
	// crea objeto
	$carro = new Automovil;
	// invoca metodos
	// datos de salida: 'Acelerador a 65....'
	//		'Freno a 55...'
	//		'Da una vuelta...'
	//		'Acelerador a 65...'
	$carro->acelerador();
	$carro->direccion();
?>