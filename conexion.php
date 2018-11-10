<?php 

	function conectarDB()
	{
		$host = "host=ec2-54-243-46-32.compute-1.amazonaws.com";
		$port = "port=5432";
		$dbname = "dbname=d9m9mghvfsb9nr";
		$user = "user=wrqtoyohxvthri";
		$password = "password=67b693606c2166a674b6491bc7cdf1f4601e3b26ab71ecfb8cf87f6f76b1e2df";

		$bd = pg_connect("$host $port $dbname $user $password");

		if (!$bd) {
			echo "Error: ".pg_last_error();
		}else{
			//echo "Conexion Exitosa con postgres";
			return $bd;

		}
	}

?>
