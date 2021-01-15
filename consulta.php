<?php
	$db = mysql_connect("localhost", "root", "", "ues");

	$idd=$_REQUEST["id2"];
	$sql="SELECT *from alumnos where nombre='$nombre'";
	$cs=mysql_query($db, $sql);
	$resul=mysqli_fetch_array($cs);

	mysqli_close($db);


	?>

<form action="modificar_car.php" method= "POST" enctype="multipart/form-data">
	<table align="center" border="1">
	<tr>
		<th colspan="1">ELIMINAR REGISTROS</th>
	</tr>
	<tr>
		<td> <input type="text" name="mat" placeholder="Ingrese ID" readonly required value="<?php echo $resul[0] ?>"/></td>
	</tr>
	<tr>
		<td> <input type="text" name="nombre" placeholder="Ingrese su nombre" required value="<?php echo $resul[1] ?>" /></td>
	</tr>

	<tr>
		<td colspan="2" align="center">
			<input type="submit" value="Eliminar">
		</td>
?>