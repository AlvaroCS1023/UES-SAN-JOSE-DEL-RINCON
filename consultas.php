<?php
$mysqli = new mysqli("localhost", "my_user", "my_password", "world");

/* verificar conexión */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$city = "Amersfoort";

/* crear una sentencia preparada */
if ($stmt = $mysqli->prepare("SELECT District FROM City WHERE Name=?")) {

    /* ligar parámetros para marcadores */
    $stmt->bind_param("s", $city);

    /* ejecutar la consulta */
    $stmt->execute();

    /* ligar variables de resultado */
    $stmt->bind_result($district);

    /* obtener valor */
    $stmt->fetch();

    printf("%s is in district %s\n", $city, $district);

    /* cerrar sentencia */
    $stmt->close();
}

/* cerrar conexión */
$mysqli->close();
?>