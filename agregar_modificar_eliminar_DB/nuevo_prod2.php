<?php


	NuevoCliente($_POST['Cedula'], $_POST['Nombres'], $_POST['DireccionFiscal'], $_POST['DireccionDespacho'], $_POST['Limitedecredito']);

	function NuevoCliente($Cedula, $Nombres, $DireccionFiscal, $DireccionDespacho, $Limitedecredito)
	{
		include("conexion.php");
		echo $sentencia="INSERT INTO maestrodeclientes (Cedula, Nombres, DireccionFiscal, DireccionDespacho, Limitedecredito) VALUES ('".$Cedula."', '".$Nombres."', '".$DireccionFiscal."', '".$DireccionDespacho."', '".$Limitedecredito."')";
		$resultado = $conexion->query($sentencia) or die (mysql_error());
	}
?>

<script type="text/javascript">
	alert("Cliente Ingresado exitosamente");
	window.location.href='index.php';
</script>