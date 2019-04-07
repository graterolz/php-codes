<?php
	include("funciones/funciones_mysql.php");
	conectar();
	extract($_POST);
	if(isset($_POST['prod_codigo'])||(isset($_POST['prod_nombre']))) {
		$fecha = date("d/m/y h:m:s");
		!empty($_POST['$prod_nombre']) ? $codigo=$_POST['prod_nombre']: $codigo=$_POST['prod_codigo'];
		$sql="INSERT INTO ventas(fecha,codigo_producto,cantidad,id_cajero) ".
			"VALUES ('$fecha','$codigo',$cantidad,$id_cajero)";
		mysql_query($sql) or die("Error al registrar venta ".mysql_error());
		$sql="SELECT productos.precio,productos.nombre,ventas.cantidad,".
			"precio*cantidad AS monto ".
			"FROM productos,ventas ".
			"WHERE (ventas.id_cajero=$id_cajero)AND(productos.codigo=ventas.codigo_producto)";
		$result=mysql_query($sql) or die("Error al imprimir venta actual ".mysql_error());
		echo "<table><tr><td>Producto</td><td>Cantidad</td><td>Precio</td>".
		 "<td>Total</td>";
		$gt=0;
		while($campo=mysql_fetch_array($result)) {
			echo "<tr><td>$campo[nombre]</td><td>$campo[cantidad]</td>".
				"<td>$campo[precio]</td><td>$campo[monto]</td></tr>";
				$gt=$gt+$campo['monto'];
		} 
		echo "</table><br /><strong>Total: <u>$gt</u></strong><br>".
			"<a href='ventas_panel.php?id=$id_cajero'>Realizar otra venta</a>";
	}
 ?>