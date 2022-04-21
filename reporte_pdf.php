<?php

		require_once("dompdf/dompdf_config.inc.php");
		$conexion=mysql_connect("localhost","root","");
		mysql_select_db("prototipo",$conexion);


$codigoHTML='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lista Del Inventario</title>
<center><img src="img/Eurilift_logo.png" width="333" height="136" /></center>
</head>
<body bgcolor="#E6E6E6">
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="6" bgcolor="#2E9AFE"><CENTER><strong>REPORTE DEL INVENTARIO</strong></CENTER></td>
  </tr>
  <tr bgcolor="#01DF3A">
    <td><strong>codigo</strong></td>
    <td><strong>descripcion</strong></td>
    <td><strong>pedidos</strong></td>
    <td><strong>stock</strong></td>
  </tr>';



$sql=mysql_query("select * from tabla1");
while($res=mysql_fetch_array($sql)){
$codigoHTML.='	
	<tr>
		<td>'.$res['id'].'</td>
		<td>'.$res['descripcion'].'</td>
		<td>'.$res['pedidos'].'</td>
		<td>'.$res['stock'].'</td>									
	</tr>';
	
}

$codigoHTML.='
</table>
</body>
</html>';
$codigoHTML=utf8_encode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->load_html($codigoHTML);
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream("Reporte_tabla_usuarios.pdf");
?>