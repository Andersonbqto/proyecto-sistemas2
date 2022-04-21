<?php

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Reporte_Personal_usuarios.xls");


		$conexion=mysql_connect("localhost","root","");
		mysql_select_db("prototipo",$conexion);		


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lista Del Inventario</title>
<body bgcolor="#E6E6E6">
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="6" bgcolor="#2E9AFE"><CENTER><strong>Reporte del Inventario</strong></CENTER></td>
  </tr>
  <tr bgcolor="#01DF3A">
    <td><strong>Codigo</strong></td>
    <td><strong>descripcion</strong></td>
    <td><strong>pedidos</strong></td>
    <td><strong>stock</strong></td>
  </tr>
  
<?PHP
		
$sql=mysql_query("select id,descripcion,pedidos,stock from tabla1");
while($res=mysql_fetch_array($sql)){		

	$id=$res["id"];
	$descripcion=$res["descripcion"];
	$pedidos=$res["pedidos"];
	$stock=$res["stock"];					
?>  
 <tr>
	<td><?php echo $id; ?></td>
	<td><?php echo $descripcion; ?></td>
	<td><?php echo $pedidos; ?></td>
	<td><?php echo $stock; ?></td>                 
 </tr> 
  <?php
}
  ?>
</table>
</body>
</html>