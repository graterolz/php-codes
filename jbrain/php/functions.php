<?php
	function CantidadPalabras($pCadena){
		$vCantidadCaracteres = 0;
		$vCantidadPalabras = 1;
		for ($i = 0;$i < strlen($pCadena);$i++){
			$Caracter = substr($pCadena,$i,1);
			if ($Caracter == " "){
				$vCantidadPalabras++;
			}
			$vCantidadCaracteres++;
		}
		
		if ($vCantidadCaracteres == 0){
			$vCantidadPalabras = 0;
		}
		return $vCantidadPalabras;
	}
?>