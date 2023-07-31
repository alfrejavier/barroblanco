<?php
// capturo los valores que vienen del formulario
if(isset($_POST['btnact'])){ 
    //Agrego la conexión a la base de datos y verifico el nombre de la variable de conx
    include "conexion.php";
    //capturo los datos que vienen del formulario
    echo $_POST['doc'];
    $Documento = $_POST['doc'];
    $Nombre    = $_POST['nom'];
    $Apellidos = $_POST['ape'];
    $Fecha     = $_POST['dat'];
    $Matricula = $_POST['mat'];
    //creo la consulta para actualizar registro a la base de datos
$query="UPDATE alumnos SET Matricula='$Matricula',Nombre='$Nombre',
               Apellidos='$Apellidos',Fec_Nac='$Fecha'
                WHERE Documento = $Documento";
    //utilizo la función para enviar el registro a la base de datos
    $cons =mysqli_query($conn,$query);
    //verifico que los datos se hayan enviado y le notifico al usuario
    if($cons){
      echo "Registro actualizado correctamente";
    }else{
        echo "Tienes un error en la consulta";
    }
}else{
    echo "Porfavor llene los datos del formulario";
    ?><a href='frmalumnos.html'>Volver al formulario</a>";
<?php
}
?>