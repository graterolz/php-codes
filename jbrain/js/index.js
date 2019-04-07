function ValidaForma(){
	document.getElementById("TxtUsuario").autocomplete = "off";	
	document.getElementById("TxtUsuario").maxLength = 10;
	document.getElementById("TxtUsuario").focus();
	document.getElementById("TxtContrasena").autocomplete = "off";	
	document.getElementById("TxtContrasena").maxLength = 10;	
}
//
function LimpiaForma(){
	document.getElementById("TxtUsuario").value = null;	
	document.getElementById("TxtContrasena").value = null;	
	document.getElementById("TxtUsuario").focus();
}
//
function ValidaLogin(){	
	var pUser = trim(document.getElementById("TxtUsuario").value);
	var pPass = trim(document.getElementById("TxtContrasena").value);
	var iValida = true;
	
	if( pUser == null || pUser.length == 0 || /^\s+$/.test(pUser) ) {
		alert("Ingrese Usuario");
		document.getElementById("TxtUsuario").focus();
		iValida = false;
	}
	if (iValida == true){
		if( pPass == null || pPass.length == 0 || /^\s+$/.test(pPass) ) {
			alert("Ingrese Contrasena");
			document.getElementById("TxtContrasena").focus();
			iValida = false;
		}
	}
	if (iValida == true){
		if (pUser == "eg" && pPass == "eg") {
			return true;
		}
		else{
			alert("Usuario/Contrasena invalido");
			LimpiaForma();
		}
		return false;
	}
	else{
		return false;
	}
}