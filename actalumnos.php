<?php
include 'conexion.php';
$doc=$_GET['doc'];

$cons = "SELECT * FROM alumnos WHERE Documento=$doc";
$query= mysqli_query($conn,$cons);
$fila=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body style="background-color:antiquewhite;text-align: center;">
    <?php include 'navbar.php'; ?>
    
    <fieldset style="background-color: aquamarine;margin: 7rem; wi">
        <h1>Registrar Alumno</h1>
    <form action="controladoractalumno.php" method="post">
        <p>Documento</p>
        <input type="number" value="<?php echo $fila[0] ?>"  id="" disabled>
        <input type="hidden" value="<?php echo $fila[0] ?>" name="doc">
        <p>Número de Matrícula</p>
        <input type="number" value="<?php echo $fila[1] ?>" name="mat" id="">
        <p>Nombre</p>
        <input type="text" value="<?php echo $fila[2] ?>" name="nom" id="">
        <p>Apellido</p>
        <input type="text" value="<?php echo $fila[3] ?>" name="ape" id="">
        <p>Fecha de Nacimiento</p>
        <input type="date" value="<?php echo $fila[4] ?>" name="dat" id="">
        <div style="">
            <input type="submit" name="btnact" value="Enviar" style="margin: 1em;padding: 1em; background-color: aqua;">
            <input type="reset" value="Cancelar" style="margin: 1em;padding: 1em;background-color: burlywood;">
        </div>
    </form>
    </fieldset>
</body>
</html>