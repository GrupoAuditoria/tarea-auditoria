<?php
	include "conexion.php";

	EliminarProducto($_GET['Codigo']);

	function EliminarProducto($Codigo)
	{
		include("conexion.php");
		$query ="DELETE FROM maestrodeclientes WHERE Codigo='".$Codigo."' ";
		$resultado = $conexion->query($query);
	}
?>

<script type="text/javascript">
	alert("Cliente Eliminado exitosamente");
	window.location.href='index.php';
</script>