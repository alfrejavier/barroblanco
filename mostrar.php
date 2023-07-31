<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
    <!-- barra de navegacion -->
    <?php include 'navbar.php'; ?>
    
    <h1 style="text-align: center;color: aqua;text-shadow: green;">Mostrar Alumnos</h1>
    <div class="container">
      <div class="container-fluid" style="background-color: aqua;padding: 1em;">
          <form method="POST" class="d-flex" role="search">
            <input class="form-control me-2" name="Buscar" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success" name="btns" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg></button>
          </form>
      </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover	table-borderless table-primary align-middle">
                <thead class="table-light">
                    <caption>Table Name</caption>
                    <tr>
                        <th>Documento</th>
                        <th>Matrícula</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                <?php
            if (isset($_POST['btns']) && isset($_POST['Buscar'])){
                include "conexion.php";
                $Buscar=$_POST['Buscar'];
                $Buscar="%$Buscar%";
                $query = "SELECT * FROM alumnos
                WHERE Nombre LIKE '$Buscar' OR Apellidos Like '$Buscar'
                or Documento LIKE '$Buscar'";
                $cons = mysqli_query($conn, $query);
                while ($vec = mysqli_fetch_array($cons)) { ?>
                <tr class="table-primary">
                    <td scope="row"><?php echo $vec[0]; ?></td>
                    <td><?php echo $vec[1]; ?></td>
                    <td><?php echo $vec[2]; ?></td>
                    <td><?php echo $vec[3]; ?></td>
                    <td><?php echo $vec['Fec_Nac']; ?></td>
                    <td>Actualizar</td>
                </tr>
            <?php }
            }else{
                echo "Ingrese un indicio de búsqueda!";
            }
            ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>