function ValidaForma(){
	document.getElementById("TxtSalidaChat").rows = 15;
	document.getElementById("TxtSalidaChat").cols = 50;	
	document.getElementById("TxtSalidaChat").disabled = "false";	
	document.getElementById("TxtEntradaChat").autocomplete = "off";
	document.getElementById("TxtEntradaChat").maxLength = 20;	
	document.getElementById("TxtEntradaChat").size = 40;
	document.getElementById("TxtEntradaChat").focus();	
}
//
function LimpiaTextArea(){
	document.getElementById("TxtSalidaChat").value = null;
	document.getElementById("TxtEntradaChat").value = null;	
	document.getElementById("TxtEntradaChat").focus();	
}
//
function FormatoEntrada(){
	var vEntradaTxt = trim(document.getElementById("TxtEntradaChat").value).toLowerCase();
	document.getElementById("TxtEntradaChat").value = vEntradaTxt; 	
	var $cLetras = CuentaLetras(vEntradaTxt);
	if ($cLetras==0){
		document.getElementById("TxtEntradaChat").focus();
		return false;
	}
	else{
		SalidaForma(vEntradaTxt,0);
		return true;
	}
}
//
function SalidaForma(pSalida,pPerfil){
	var vSalidaTxt = trim(document.getElementById("TxtSalidaChat").value);
	var $cLetrasSalida = CuentaLetras(vSalidaTxt);
	var vAsignaTextAreaSalida = vSalidaTxt;
	if ($cLetrasSalida != 0){
		vAsignaTextAreaSalida = vAsignaTextAreaSalida + "\n";
	}
	vAsignaTextAreaSalida = vAsignaTextAreaSalida + vPerfil[pPerfil] + " > " + pSalida + "\n";
	document.getElementById("TxtSalidaChat").value = vAsignaTextAreaSalida;
}