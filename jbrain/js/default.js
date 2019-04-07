var vPerfil = new Array("You","Bot");
var vFecha = new Date().getDate() + "/" + (new Date().getMonth() +1) + "/" + new Date().getFullYear();
var vAbc = new Array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
//
function trim (myString){
	return myString.replace(/^\s+/g,"").replace(/\s+$/g,"");
}
//
function CuentaLetras(pCadena){
	var x = 0;
	for (var i = 0;i < pCadena.length;i++){
		x++;
	};
	return x;
}
//
function CuentaPalabras(pCadena){	
	pCadena.trim();
	var vcCaracteres = 0;
	var vCantidadPalabras = 1;	
	for (var i = 0;i < pCadena.length;i++){
		var pCaracter = pCadena.charAt(i);
		if (pCaracter == ' '){
			vCantidadPalabras++;
		}
		vcCaracteres++;
	}
	if (vcCaracteres == 0){
		vCantidadPalabras = 0;
	}
	return vCantidadPalabras;
}