<?php
	class Estudiante {
		public $cedula,$nombre;
		//
		function Init() {
			$this->cedula="10410202";
			$this->nombre="Bill Got";
		}
		//
		function Mostrar() {
			echo "Cedula: ".$this->cedula;
			echo "<br>";
			echo "Nombre: ".$this->nombre;
		}
	}
	//
	$est1 = new Estudiante();
	$est1->Init();
	$est1->Mostrar();
?>