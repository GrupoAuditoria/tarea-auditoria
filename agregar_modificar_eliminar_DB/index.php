<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>LISTADO DE PERSONAS</title>
<style type="text/css">
.Estilo10 {color: Black; font-size: 30px; font-family: Georgia, "Times New Roman", Times, serif; }
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
<center style="color:Black;">
  <p class="Estilo3">&nbsp;</p>
  <p class="Estilo10">Listado de Perosanas</p>
</center>  
<div class="todo">

  <a href="nuevo_prod1.php"> <button type="button" class="btn btn-info">Nuevo</button> </a>
  <div id="contenido">
  	<table class="table table-striped";>
  		<thead>
        <tr>
        <th>CODIGO</th>
        <th>CEDULAS</th>
  			<th>NOMBRES</th>
        <th>DIRECCION FISICA</th>
        <th>DIRECCION DESPACHO</th>
        <th>LIMITE DE CREDITO</th>
        <th>MODIFICAR</th>
        <th>ELIMINAR</th>
        </tr>
  		</thead>
  		
  		
  		<?php
      include "conexion.php";
      $sentencia="SELECT * FROM maestrodeclientes";
      $resultado = $conexion->query($sentencia);
      while($filas = $resultado->fetch_assoc())
      {
        echo "<tr>";
          echo "<td>"; echo $filas['Codigo']; echo "</td>";
          echo "<td>"; echo $filas['Cedula']; echo "</td>";
          echo "<td>"; echo $filas['Nombres']; echo "</td>";
          echo "<td>"; echo $filas['DireccionFiscal']; echo "</td>";
          echo "<td>"; echo $filas['DireccionDespacho']; echo "</td>";
          echo "<td>"; echo $filas['Limitedecredito']; echo "</td>";
          echo "<td>  <a href='modif_prod1.php?Codigo=".$filas['Codigo']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
          echo "<td> <a href='eliminar_prod.php?Codigo=".$filas['Codigo']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
        echo "</tr>";
      }

      ?>
  	</table>
  </div>
  
	<div id="footer">
  		<img src="images/swirl2.png" id="img2">
  	</div>

</div>


</body>
</html>