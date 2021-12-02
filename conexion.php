<?php
	/*-------------------------
	Autor: Wilbert Ek
	Web: wilbertek62.com
	Mail: wilbertek62@gmail.com
	---------------------------*/

	define('DB_HOST','3.12.73.95');
	define('DB_USER','said_remoto');
	define('DB_PASS','clave1');
	define('DB_NAME','usuarios');
	# conectare la base de datos
    $con=@mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);


    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
?>

