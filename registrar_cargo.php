<?php 
	
	require 'conexion.php';
	$conexion = conectarDB();

	$cargo = $_POST['cargo'];

	$query = "INSERT INTO cargo(cargo) VALUES('$cargo')";
	$resultado = pg_query($conexion,$query);

	if($resultado){	?>
	<script>
		alert('registro correcta');
		location.href='cargo.php';
	</script>
	<?php }else{ ?>
	<script>
		alert('no se pudo hacer la registro');
		location.href='cargo.php';
	</script>
	<?php }
?>