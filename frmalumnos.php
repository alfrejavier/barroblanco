<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script> -->
    <link rel="stylesheet" href="https://unpkg.com/@jarstone/dselect/dist/css/dselect.css">
    <script src="https://unpkg.com/@jarstone/dselect/dist/js/dselect.js"></script>
</head>     
<body style="background-color:antiquewhite;text-align: center;">
    <!-- Barra de navegacion -->
    <?php include 'navbar.php'; ?>

    <fieldset style="background-color: aquamarine;margin: 7rem; ">
        <h1>Registrar Alumno</h1>
    <form action="regalumno.php" method="post">
        <select name="Acudiente" required class="form-select" id="select_box">
        <option>Selecciones un profe</option>
        <?php 
            include 'conexion.php';
            $consulta2=mysqli_query($conn,"SELECT * FROM profesores Order by Nombre");
            while ($m=mysqli_fetch_array($consulta2)){
                echo "<option value=".$m[0].">".$m[1]."</option>";
            }
        ?>                  
        </select>
        <p>Documento</p>
        <input class="form-control" type="number" name="doc" id="">
        <p>Número de Matrícula</p>
        <input class="form-control" type="number" name="mat" id="">
        <p>Nombre</p>
        <input class="form-control" type="text" name="nom" id="">
        <p>Apellido</p>
        <input class="form-control" type="text" name="ape" id="">
        <p>Fecha de Nacimiento</p>
        <input class="form-control" type="date" name="dat" id="">
        <div style="margin: 1em;">
            <input class="form-control" type="submit" name="btn" value="Enviar" style="margin: 1em;padding: 1em; background-color: aqua;">
            <input class="form-control" type="reset" value="Cancelar" style="margin: 1em;padding: 1em;background-color: burlywood;">
        </div>
    </form>
    </fieldset>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script>
       var select_box_element = document.querySelector('#select_box');
       dselect(select_box_element, {
       search: true
       });
    </script>
</body>
</html>