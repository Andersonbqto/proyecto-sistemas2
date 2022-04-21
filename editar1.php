<?php 

     if(isset($_GET['editar'])){
     	$editar_id = $_GET['editar'];
        
        $consulta = "SELECT * FROM tabla1 WHERE id = $editar_id";
        $ejecutar = mysqli_query($con, $consulta);

        $fila = mysqli_fetch_array($ejecutar);

               $descripcion = $fila['descripcion'];
               $pedidos = $fila['pedidos'];
               $stock = $fila['stock'];
    }
?>

<br/>
<center><form method = "POST" action = "" style = "background-color: #F2F2F2;">
   
    <font color='black'><input type = "text" name = "descripcion" value = "<?php echo $descripcion; ?> "><br/></font>
    <font color='black'><input type = "text" name = "pedidos" value = "<?php echo $pedidos; ?> "><br/></font>
    <font color='black'><input type = "text" name = "stock" value = "<?php echo $stock; ?> "><br/></font>
    <font color='black'><input type = "submit" name = "actualizar" value = "ACTUALIZAR DATOS"></font>
    <font color='black'><input id="saveForm" class="button_text" type="reset" name="reset" value="Borrar"/></font>
</form></center>

<?php 

    if(isset($_POST['actualizar'])){

     $actualizar_descripcion = $_POST['descripcion'];
     $actualizar_pedidos = $_POST['pedidos'];
     $actualizar_stock = $_POST['stock'];


     $actualizar = "UPDATE tabla1 SET descripcion = '$actualizar_descripcion', pedidos = '$actualizar_pedidos', stock = '$actualizar_stock' WHERE id = '$editar_id' ";

     $ejecutar = mysqli_query($con, $actualizar);

     if($ejecutar){

     	echo "<script>alert('Datos Actualizados')</script>";
     	echo "<script>window.open('registrar1.php')</script>";
     


     }
         }
?>