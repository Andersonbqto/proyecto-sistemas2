<?php

@ $usuario=$_POST['usuario'];
@ $clave=$_POST['clave'];


$conexion = mysqli_connect('localhost','root','','prototipo');
$consulta = "SELECT * FROM users WHERE usuario = '".$usuario."' AND clave = '".$clave."'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);
if($filas == 1) {
header ("location:menu.html");
}
//else {
//echo "ERROR EN LA AUTENTIFICACION";
//}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>

<html lang="es">
    <head>
     <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Diplomata+SC|Lato|Rubik+Mono+One" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="shortcut icon" href="img/Eurilift_ico.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    </head>
      <body>
        <div data-role="page" id="pagina2" class="se-gris-oscuro">
<center><img src="img/Eurilift_logo.png"></center>
<center><p>Proyecto - Fabricación - Venta - Instalación - Reparación y Mantenimiento de Ascensores - Elevadores</p></center>
</div>
<a class="efectoenlace" href="index.html"><strong>Salir</strong></a>
<div class="row center-block quitar-float text-center espacio-arriba">
        <h1 class="animated slideInDown rubik fuentegrande gris-oscuro  ">
    <span class="">Login</span>
    </h1>
        <div class="animated fadeIn se-gris-claro quitar-float ">
            <nav class="paddin-largo gris ">
            </nav>
        </div>
</div>


<div>
      <form action="login.php" method="POST" style = "background-color: #F2F2F2;">
      <center><table>
        <tr>
     <td><font color='black'>Usuario</font></td>
     <td><font color='black'><input type="text" name="usuario"/></font></td>
        </tr>
        <tr>
     <td><font color='black'>Clave</font></td>
     <td><font color='black'><input type="password" name="clave"/></font></td>
     <td><font color='black'><input type="submit"  value="Entrar"></font></td>
     <td><font color='black'><input id="saveForm" class="button_text" type="reset" name="reset" value="Borrar"/></font></td>
        </tr>
      </table></center>
</div>
      </form>

      </body>
</html>