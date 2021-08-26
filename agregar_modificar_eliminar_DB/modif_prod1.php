<?php


  $consulta=ConsultarCliente($_GET['Codigo']);

  function ConsultarCliente($Codigo)
  {
    include("conexion.php");
    $query = "SELECT * FROM maestrodeclientes WHERE Codigo='".$Codigo."' ";
    $resultado = $conexion->query($query);
    $filas = $resultado->fetch_assoc();
      return [
        $filas['Cedula'],
        $filas['Nombres'],
        $filas['DireccionFiscal'],
        $filas['DireccionDespacho'],
        $filas['Limitedecredito']
      ];
  }
 
 ?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modificar Producto</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<center>
<div class="todo">

  <div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Modificar Producto</h1> </span>
  		<br>
      <center>
	  <form action="modif_prod2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
      <input type="hidden" name="Codigo" value="<?php echo $_GET['Codigo']?> ">
  		<label>Cedula:</label>
      &nbsp;
      &nbsp;
  		<input type="text" id="Cedula" name="Cedula"; value="<?php echo $consulta[0] ?>" ><br>
  		<label>Nombres: </label>
  		<input type="text" id="Nombres" name="Nombres" value="<?php echo $consulta[1] ?>"><br>
      &nbsp;
      &nbsp;
      &nbsp;
      &nbsp;
      &nbsp;
      &nbsp;
      <label>Direccion Fisica: </label>
      <input type="text" id="DireccionFiscal" name="DireccionFiscal" value="<?php echo $consulta[2] ?>"><br>
      &nbsp;
      &nbsp;
      &nbsp;
      &nbsp;
      &nbsp;
      &nbsp;
      &nbsp;
      &nbsp;
      &nbsp;
      &nbsp;
      <label>Direccion Despacho: </label>
      <input type="text" id="DireccionDespacho" name="DireccionDespacho" value="<?php echo $consulta[3] ?>"><br>
      <label>Liminte de Credito: </label>
      <input type="text" id="Limitedecredito" name="Limitedecredito" value="<?php echo $consulta[4] ?>"><br>
  		<br>
  		<button type="submit" class="btn btn-success">Guardar</button>
      
     </form>
     </center>
  	</div>
  	
  </div>
  
	<div id="footer">
  		<img src="images/swirl2.png" id="img2">
  	</div>

</div>

</center>
</body>
</html>