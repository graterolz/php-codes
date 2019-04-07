<?php
	// define una funci�n recursiva
	// funci�n para imprimir todos los valores en una matriz anidada
	function presentaValores($arr) {
		global $cuenta;
		global $salida;
		// verifica que los datos de entrada sean una matriz
		if(!is_array($arr))
			die('ERROR: Los datos de entrada no son una matriz');
		// reitera en matriz
		// incrementa el contador 1 unidad por cada valor encontrado
		// si el valor encontrado es en s� una matriz:
		// invoca recursivamente la funci�n para contar
		// el n�mero de elementos en hijota matriz secundaria
		// en caso contrario:
		// a�ade el valor encontrado la matriz de salida
		foreach($arr as $a) {
			if (is_array($a))
				presentaValores($a);
			else {
				$salida[] = $a;
				$cuenta++;
			} 
		}
		// env�a retorno al invocador del total contado y los valores encontrados
		// como una matriz
		return array('total' => $cuenta, 'valores' => $salida);
	}
	// define una matriz anidada
	$data = array(
		'o' => array('otro','oso','ocio'), 
		't' => array('te','tomate','tina','treintaycinco' => array(
			array('treinta','cinco'),
			array('vingt','trois',
				array('rojo' => 'bar�n','azul' => 'sangre')
			)
		))
	);
	// cuenta y presenta los valores de la matriz anidada
	$ret = presentaValores($data);
	echo $ret['total'] . ' valores encontrados: ';
	echo "<br>";
	echo implode(', ', $ret['valores']);
?>