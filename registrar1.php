<?php
      $con = mysqli_connect("localhost","root","","prototipo") or die ("Error de Conexion");
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
<a class="efectoenlace" href="menu.html"><strong>Atras</strong></a> 
<a class="efectoenlace" href="index.html"><strong>Salir</strong></a> 
<div class="row center-block quitar-float text-center espacio-arriba">
        <h1 class="animated slideInDown rubik fuentegrande gris-oscuro  ">
    <span class="">Registrar Producto</span>
    </h1>
        <div class="animated fadeIn se-gris-claro quitar-float ">
            <nav class="paddin-largo gris ">
                <ul class="no-lista text-center">
            </nav>
        </div>
</div>

<div class="row center-block quitar-float text-center espacio-arriba">
        <div class="animated fadeIn se-gris-oscuro quitar-float ">
            <nav class="paddin-largo gris ">
                <ul class="no-lista text-center">
                    <li class="col-md-2 col-xs-3  inline-block"><a class="efectoenlace" href="lista1.php"><strong>Ver Lista</strong></a></li>
                    <li class="col-md-2 col-xs-3  inline-block"><a class="efectoenlace" href="imprimir.html"><strong>Imprimir Lista</strong></a></li>
                </ul>
            </nav>
        </div>
</div>
<center><form method = "POST" action = "registrar1.php" style = "background-color: #F2F2F2;">      
        <font color='black'><label>Descripcion:</label></font>
        <font color='black'><input type = "text" name = "descripcion" placeholder = "Escriba la descripcion" required><br/></font>
        
        <font color='black'><label>Pedidos:</label></font>
        <font color='black'><input type = "text" name = "pedidos" placeholder = "Escriba los pedidos" required><br/></font>  
        
        <font color='black'><label>Stock:</label></font>
        <font color='black'><input type = "text" name = "stock" placeholder = "Escriba el stock" required><br/></font>
    
        <font color='black'><input type="submit" name = "insert" value = "Insertar Datos"></font>
        <font color='black'><input id="saveForm" class="button_text" type="reset" name="reset" value="Borrar"/></font>
 
      </form></center>


<?php 
    if(isset($_POST['insert'])){

       $descripcion = $_POST['descripcion'];
       $pedidos = $_POST['pedidos'];
       $stock = $_POST['stock'];

       $insertar = "INSERT INTO tabla1 (descripcion, pedidos, stock) VALUES ('$descripcion', '$pedidos', '$stock')";

       $ejecutar = mysqli_query($con, $insertar);
       
       if($ejecutar){
          echo "<h3>Datos Insertados Correctamente</h3>";

       }    
    }
?>

  

<?php 

     if(isset($_GET['editar'])){
     include("editar1.php");

   }
?>

<?php 

     if(isset($_GET['borrar'])){
     $borrar_id = $_GET['borrar'];

     $borrar = "DELETE FROM tabla1 WHERE id = '$borrar_id'";

     $ejecutar = mysqli_query($con, $borrar);

     if($ejecutar){

      echo "<script>alert('El Usuario ha sido BORRADO')</script>";
      echo "<script>window.open('registrar1.php')</script>";
     }
}

?>
      </body>
</html>