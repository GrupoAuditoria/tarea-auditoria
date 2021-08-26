<?php
	include 'conexion.php';

	ModificarCliente($_POST['Cedula'], $_POST['Nombres'], $_POST['DireccionFiscal'], $_POST['DireccionDespacho'], $_POST['Limitedecredito'], $_POST['Codigo']);


	function ModificarCliente($Cedula, $Nombres, $DireccionFiscal, $DireccionDespacho, $Limitedecredito, $Codigo)
	{
		include("conexion.php");
		$sentencia="UPDATE  maestrodeclientes SET Cedula='".$Cedula."', Nombres= '".$Nombres."', DireccionFiscal='".$DireccionFiscal."', DireccionDespacho='".$DireccionDespacho."', Limitedecredito='".$Limitedecredito."' WHERE Codigo='".$Codigo."' ";
		$resultado = $conexion->query($sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert("Cliente Modificado exitosamente");
	window.location.href='index.php';
</script>