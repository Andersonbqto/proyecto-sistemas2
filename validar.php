<?php
//variables 
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

//variable de conexion a la BD
$conexion=mysqli_connect("localhost","root","","user");

//variable de consulta para validar
$consulta="SELECT * FROM tab WHERE usuario = '".$usuario."' AND clave = '".$clave."'";

//variable para ejecutar la consulta almacenada en la conexion y consulta
$resultado=mysqli_query($conexion, $consulta);

//variable para obtener el numero de filas en la BD 
$filas=mysqli_stmt_num_rows ($resultado);

//si hay un dato valida y valla a la siguiente pagina
if ($filas>0) {
	header("location:menu.html");
}
else {
	echo "Error en la Autentificacion";
}

//libera espacio de memoria de resultado
mysqli_free_result($resultado);

//cerrar la conexion
mysqli_close($conexion);