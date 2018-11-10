<?php 
	
	require 'conexion.php';
	$conexion = conectarDB();

	$cargo = $_REQUEST['idc'];

	$query = "DELETE FROM cargo WHERE id_cargo = '$cargo' ";
	$resultado = pg_query($conexion,$query);

	if($resultado){	?>
	<script>
		alert('eliminacion correcta');
		location.href='cargo.php';
	</script>
	<?php }else{ ?>
	<script>
		alert('no se pudo hacer la eliminacion');
		location.href='cargo.php';
	</script>
	<?php }
?>