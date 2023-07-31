<?php
include 'conexion.php';
$query="SELECT Cedula,Nombre FROM profesores";
$consulta=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://unpkg.com/@jarstone/dselect/dist/css/dselect.css">
    <script src="https://unpkg.com/@jarstone/dselect/dist/js/dselect.js"></script>
</head>
<body>
<?php
include 'navbar.php';
?>
  <div class="container" style="background-color: aquamarine;padding: 1em;border-radius: 5px;">  
    <h1>Crear Módulos</h1>
    <form action="" method="post">
        <div class="form-control input-lg mb-3">
<select class="form-select" required class="form-select" id="select_box" aria-label="Floating label select example">
    <option selected>Seleccione el profesor(a)</option>
    <?php
    while ($v=mysqli_fetch_array($consulta)){
    echo "<option value=".$v[0].">".$v[1]."</option>";
    }
    ?>
    </select>
            <!-- <label for="floatingSelect">Selecciona el profesor</label> -->
        </div>  
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Digite el código del módulo">
            <label for="floatingInput">Digite el código del módulo</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Digite el nombre del módulo">
            <label for="floatingInput">Digite el nombre del módulo</label>
        </div>
    </form>
    </div> 
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