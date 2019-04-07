<?php
	// define clase
	class Automovil {
		// propiedades
		public $color;
		public $modelo;
		// metodos
		public function acelerador() {
			echo 'Aumenta la velocidad...';
		}
		//
		public function freno() {
			echo 'Disminuye la velocidad...';
		}
		//
		public function direccion() {
			echo 'Da una vuelta...';
		}
	}
	// crea objeto
	$carro = new Automovil;
	// establece las propiedades del objeto
	$carro->color = 'rojo';
	$carro->modelo = 'Ford Taurus';
	// invoca los metodos del objeto
	$carro->acelerador();
	$carro->direccion();
?>