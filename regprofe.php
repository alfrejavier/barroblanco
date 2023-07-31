<?php
// capturo los valore que vienen del formulario
if(isset($_POST['btn'])){ 
    //capturo los datos que vienen del formulario
    $Cedula = $_POST['ced'];
    $Nombre    = $_POST['nom'];
    $Direccion = $_POST['dir'];
    $Celular     = $_POST['cel'];
    //Agrego la conexión a la base de datos y verifico el 
    //nombre de la variable de conexión
    include "conexion.php";
    //creo la consulta para insertar registro a la base de datos

$query="INSERT INTO profesores
(Cedula,Nombre,Direccion,Celular)
VALUES
($Cedula,'$Nombre','$Direccion','$Celular')";

    //utilizo la función para enviar el registro a la base de datos
    $cons =mysqli_query($conn,$query);
    //verifico que los datos se hayan enviado y le notifico al usuario
    if($cons){
        echo "Se registró profesor(a) ". $Nombre." correctamente";
    }else{
        echo "Tienes un error en la consulta";
    }
}else{
    echo "Porfavor llene los datos del formulario";
    ?>
    <a href='frmalumnos.html'>Volver al formulario</a>";
    <?php
}

?>
<!-- ?><a href='frmalumnos.html'>Volver al formulario</a>";<?php
       // <!--// $query2 ="INSERT INTO stocks(cantidad,Productos_Codigo)
         //       VALUES(0,$Documento)";
        //utilizo la función para enviar el registro a la base de datos
      //  $cons2  = mysqli_query($conn,$query); -->