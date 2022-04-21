<?php 

     if(isset($_GET['editar'])){
     	$editar_id = $_GET['editar'];
        
        $consulta = "SELECT * FROM users WHERE id = $editar_id";
        $ejecutar = mysqli_query($con, $consulta);

        $fila = mysqli_fetch_array($ejecutar);

               $nombre = $fila['nombre'];
               $apellido = $fila['apellido'];
               $edad = $fila['edad'];
               $usuario = $fila['usuario'];
               $clave = $fila['clave'];
    }
?>

<br/>
<center><form method = "POST" action = "" style = "background-color: #F2F2F2;">
   
    <font color='black'><input type = "text" name = "nombre" value = "<?php echo $nombre; ?> "><br/></font>
    <font color='black'><input type = "text" name = "apellido" value = "<?php echo $apellido; ?> "><br/></font>
    <font color='black'><input type = "text" name = "edad" value = "<?php echo $edad; ?> "><br/></font>
    <font color='black'><input type = "text" name = "usuario" value = "<?php echo $usuario; ?> "><br/></font>
    <font color='black'><input type = "password" name = "clave" value = "<?php echo $clave; ?> "><br/></font>
    <font color='black'><input type = "submit" name = "actualizar" value = "ACTUALIZAR DATOS"></font>
    <font color='black'><input id="saveForm" class="button_text" type="reset" name="reset" value="Borrar"/></font>
</form></center>

<?php 

    if(isset($_POST['actualizar'])){

     $actualizar_nombre = $_POST['nombre'];
     $actualizar_apellido = $_POST['apellido'];
     $actualizar_edad = $_POST['edad'];
     $actualizar_usuario = $_POST['usuario'];
     $actualizar_password = $_POST['clave'];


     $actualizar = "UPDATE users SET nombre = '$actualizar_nombre', apellido = '$actualizar_apellido', edad = '$actualizar_edad', usuario = '$actualizar_usuario', clave = '$actualizar_password' WHERE id = '$editar_id' ";

$verificar_usuario=mysqli_query($con, "SELECT * FROM users Where nombre= '$actualizar_nombre'");
if(mysqli_num_rows($verificar_usuario)>0){
echo 'El Usuario ya esta Registrado';
exit;
}
     $ejecutar = mysqli_query($con, $actualizar);

     if($ejecutar){

     	echo "<script>alert('Datos Actualizados')</script>";
     	echo "<script>window.open('registrar.php')</script>";
     


     }
         }
?>