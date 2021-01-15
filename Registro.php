<?php
$db = mysqli_connect("localhost","root","","index");

$id=$_POST["mat"];
$nombre=$_POST["nombre"]

$sql=mysql_query($db, "UPDATE plan_estudio SET Nombre = '$nombre', WHERE id= $id");
	if ($sql) {
		//requiere("consulta_carrera.php")
		echo "<script>alert('El registro se actualizo correctamente');</script>";
	} else {
		include("consulta_carrera.php");
	echo "<script>alert('El registro no se actualizo');</script>;"
	}
//mysqli_close($db)
?>