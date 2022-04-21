<?php
      $con = mysqli_connect("localhost","root","","prototipo") or die ("Error de Conexion");
?>

<html>
<head>
  <title>Lista</title>
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
<div data-role="page" id="pagina1" class="se-gris-oscuro">
<center><img src="img/Eurilift_logo.png"></center>
<center><p>Proyecto - Fabricación - Venta - Instalación - Reparación y Mantenimiento de Ascensores - Elevadores</p></center>
</div>
<a class="efectoenlace" href="registrar1.php"><strong>Atras</strong></a> 
<a class="efectoenlace" href="index.html"><strong>Salir</strong></a> 
<div class="row center-block quitar-float text-center espacio-arriba">
        <h1 class="animated slideInDown rubik fuentegrande gris-oscuro  ">
    <span class="">Lista de Productos</span>
    </h1>
        <div class="animated fadeIn se-gris-claro quitar-float ">
            <nav class="paddin-largo gris ">
            </nav>
        </div>
</div>

 <?php
              ?>

<div class="row center-block quitar-float text-center espacio-arriba">
<form action="lista1.php" method="POST">
        <div class="animated fadeIn se-gris-oscuro quitar-float ">
            <nav class="paddin-largo gris ">
                <ul class="no-lista text-center">
                    <li class="col-md-2 col-xs-3  inline-block"><a class="efectoenlace" href="registrar1.php"><strong>registrar</strong></a></li>
                    <li class="col-md-2 col-xs-3  inline-block"><a class="efectoenlace" href="imprimir.html"><strong>Imprimir Lista</strong></a
                    ></li>

       <font color='black'> <input type="text" size="30" name="palabra" placeholder="Buscar por Codigo o por Descripcion"/></font>
       <font color='black'> <input type="submit" name"buscar" value="Buscar" ></font>

</form>
<?php
                    ?>
                </ul>
            </nav>
        </div>

</div>

</body>
</html>
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

   <br/>
  <center><table width = "500" border = "2" style = "background-color: #F2F2F2;">
    
    <tr>
         <th><font color='black'>CODIGO</font></th>
         <th><font color='black'>DESCRIPCION</font></th>
         <th><font color='black'>PEDIDOS</font></th>
         <th><font color='black'>STOCK</font></th>    
    </tr>  
  
    <?php
     

if(isset($_POST['palabra'])){
  $consulta = "SELECT * FROM tabla1 WHERE id LIKE '%".$_POST['palabra']."%' OR descripcion LIKE '%".$_POST['palabra']."%'";

}else{
           $consulta = "SELECT * FROM tabla1";
}

    

         $ejecutar = mysqli_query($con, $consulta);

         $i = 0;

         while($fila = mysqli_fetch_array($ejecutar)){
               $id = $fila['id'];
               $descripcion = $fila['descripcion'];
               $pedidos = $fila['pedidos'];
               $stock = $fila['stock'];

               $i++;

     ?>
  
        <tr align = "center">
          <td><font color='black'><?php echo $id; ?></td></font>
          <td><font color='black'><?php echo $descripcion; ?></td></font>
          <td><font color='black'><?php echo $pedidos; ?></td></font>
          <td><font color='black'><?php echo $stock; ?></td></font>

          <td><a href = "registrar1.php?editar=<?php echo $id; ?>"><font color='blue'>EDITAR</font></a></td>
          <td><a href = "registrar1.php?borrar=<?php echo $id; ?>"><font color='red'>BORRAR</font></a></td>


        </tr>
        
        <?php }  ?>

  </table></center>

<?php 

     if(isset($_GET['editar'])){
     include("editar1.php");

   }
?>