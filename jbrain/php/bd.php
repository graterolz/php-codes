<html>
	<head>
		<title>Jb</title>
		<link rel="stylesheet" type="text/css" href="../css/default.css" media="screen">
		<script type="text/javascript" src="../js/default.js"></script>
		<script type="text/javascript" src="../js/profile.js"></script>
	</head>
	<body onload="ValidaForma()">
		<!--
		<div class="CajaGeneral">
			<div id="CajaChat">
				<form name="FormaChat" action="../php/bd.php" onsubmit="return FormatoEntrada();" method="post">
					<fieldset>
						<legend>Jb</legend>
						<textarea 
							id="TxtSalidaChat"
							name="TxtSalidaChat">
						</textarea>
						<br>
						<input 
							type="text"
							id="TxtEntradaChat"
							name="TxtEntradaChat"
							placeholder="Escribe algo..">
						<input 
							type="submit"
							value="Enviar">
					</fieldset>
				</form>
			</div>
			<div id="CajaInfo">
				<input type="button" onclick="LimpiaTextArea();" value ="Limpia Formulario">
			</div>
		</div>
		-->
	</body>
</html>
<?php
	require_once("functions.php");
	$EntradaCadena = $_POST["TxtEntradaChat"];
	$CantidadPalabras = CantidadPalabras($EntradaCadena);
	$EmpiezaPalabra = array($CantidadPalabras);	//Arreglo de Incio de Palabra	
	$TerminaPalabra = array($CantidadPalabras);	//Arreglo de Fin de Palabra
	$Indicator = 0;	//Variable de Utilidad
	$Bandera = 0;	//Variable de Utilidad
	//Asignacion de Palabras a puntos Indicadores
	for($i = 0;$i < strlen($EntradaCadena);$i++){
		$Caracter = substr($EntradaCadena,$i,1);
		if ($Caracter != " "){
			if (($i+1) == strlen($EntradaCadena)){
				$TerminaPalabra[$Indicator] = $i;
				$Bandera = 2;
			}
			if ($Bandera == 0){
				$EmpiezaPalabra[$Indicator] = $i;
				$Bandera = 1;
			}
		}
		else{
			if ($Bandera == 1){
				$TerminaPalabra[$Indicator] = $i-1;
				$Indicator = $Indicator+1;
				$Bandera = 0;
			}
		}
	}
	for($i = 0;$i < $CantidadPalabras;$i++){
		echo $EmpiezaPalabra[$i]." - ";
		echo $TerminaPalabra[$i]."<br>";
	}
	$GuardaPalabras[] = array($CantidadPalabras);	//Arreglo para guardar Palabras
	//Uso de Indicadores para guardar Palabras
	for(int i = 0;i < CantidadPalabras;i++){
		GuardaPalabras[i] = "";
		while(EmpiezaPalabra[i] <= TerminaPalabra[i]){
			GuardaPalabras[i] = GuardaPalabras[i] + pEntrada.charAt(EmpiezaPalabra[i]);
			EmpiezaPalabra[i] = EmpiezaPalabra[i] + 1;
		}
	}
?>