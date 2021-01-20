<?php
	echo "<html><head><title>Formularios para Insertar</title></head><body>";
	// verifica que se seleccionó
	if($_GET['id']==1) {
		// inserta cajeros
		// muestra el formulario para cajero
		echo "<h2>Captura los datos del nuevo cajero</h2>
			<form name='inserta' method='post' action='$PHP_SELF'>
			<strong>Nombre:</strong><input type='text' name='nombre'><br />
			<strong>Pass:</strong>(no mayor a 5 caracteres)<input type='text' name='pass' maxlength='5'><br />
			<strong>Permisos:</strong>
			<select name='permisos'>
				<option value='1'>Solo ventas</option>
				<option value='2'>Reportes y ventas</option>
			</select><br />
			<input type='submit' name='boton' value='Alta_Cajero'></form>";
	}
	else {
		// inserta productos
		// muestra el formulario para prducto
		echo "<h2>Captura los datos del nuevo producto</h2>
			<form name='inserta' method='post' action='$PHP_SELF'>
			<strong>Nombre:</strong><input type='text' name='nombre'><br />
			<strong>Codigo:</strong><input type='text' name='codigo' maxlength='10'><br />
			<strong>Tipo:</strong>(Musica,pelicula)<input type='text' name='tipo'><br />
			<strong>Genero:</strong><input type='text' name='genero'><br />
			<strong>Precio por unidad ($):</strong><input type='text' name='precio'><br />
			<strong>Existencia:</strong><input type='text' name='existencia'><br />
			<input type='submit' name='boton' value='Alta_Producto'></form>";
	}
	//
	if(isset($_POST['boton'])) {
		// cargamos las funciones mysql
		include("funciones/funciones_mysql.php");
		conectar();
		// depende cual se selecciono es la
		// sentencia sql a usar
		if($_POST['boton']=='Alta_Producto') {
			$sql="INSERT INTO productos(id,nombre,codigo,tipo,genero,precio,existencia) 
			VALUES(null,'$_POST[nombre]','$_POST[codigo]','$_POST[tipo]','$_POST[genero]',
			$_POST[precio],$_POST[exsitencia])";
			$result=mysql_query($sql) or die("Error al ejecutar consulta Productos:".mysql_error());
			echo "<strong><center>Datos insertados correctamente <a href='inserta_panel.html'>Volver al menu, da click aqui</a></center></strong>";	 
		}
		// si no fue alta producto entonces es
		// alta cajero
		else {
			$sql="INSERT INTO cajeros(id,nombre,pass,permisos) VALUES(null,'$_POST[nombre]',
			'$_POST[pass]',$_POST[permisos])";
			$result=mysql_query($sql) or die("Error al ejecutar consulta Cajeros: ".mysql_error());
			echo "<strong><center><a href='inserta_panel.html'>Volver al menu, da click aqui</a></center></strong>";
		}
	}
	echo "</html>";
