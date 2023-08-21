<?php 
session_start();
// error_reporting(0);
$varsession = $_SESSION['usuario'];
$sessionID = $_SESSION['id'];
if ($varsession == null || $varsession == '') {
    header("Location:index.php");
    die();
}; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

  </head>
  <body>
  <div class="mb-3 text-center"><h1>Historial de cambios</h1></div> 
    </div>
  <div style="position:fixed; left:1.5%; top:2%; font-size:100%"> <a class="nav-link dropdown-toggle" href="#"
            role="button" data-bs-toggle="dropdown" aria-expanded="false"><i href="#"
                class="glyphicon glyphicon-user"></i>
            <?php echo $_SESSION['usuario']; ?>
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="RegistroClientes.php">Registrar Clientes</a></li>
            <li><a class="dropdown-item" href="RegistroLibro.php">Registrar Libros</a></li>
            <li><a class="dropdown-item" href="mostrar.php">Ver Clientes y hacer prestamos</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item text-danger" href="cerrar_session.php">Cerrar sesión</a></li>
        </ul>
    </div>
  <table style="margin-top:2.5%;" class=" table table-sm table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID</th>
      <th scope="col">Nombres del Cliente</th>
      <th scope="col">Fecha de prestamo</th>
      <th scope="col">Fecha de devolucion</th>
      <th scope="col">ID Usuario</th>
      <th scope="col">Usuario</th>
      <th scope="col">Libro Prestado</th>
      <th scope="col">Estado</th>
      <th scope="col">Acciones</th>

      
    </tr>
  </thead>
  <tbody>

  <?php
//CONEXION
include("conexiondb.php");
if(!$conn){
    die("La conexión fallo: " . mysqli_connect_error());
}else{
    $sql = "SELECT * FROM prestamo";
    $resultado = mysqli_query($conn, $sql);
    if($resultado){
        while($row = $resultado->fetch_array()){
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['id_clientes'] . "</td>";
            echo "<td>" . $row['nombre_clientes'] . "</td>";
            echo "<td>" . $row['fechaPrestamo'] . "</td>";
            echo "<td>" . $row['fechaDevolucion'] . "</td>";
            echo "<td>" . $row['id_usuarios'] . "</td>";
            echo "<td>" . $row['usuario'] . "</td>";
            echo "<td>" . $row['nombre_libro'] . "</td>";
            echo "<td>" . $row['estado'] . "</td>";
            ?>
            <td><a href="estado.php?clave=<?php echo $row['id'];?>"> <button type="button" class="btn btn-warning"><i class="bi bi-pen"> </i></button> </a>
            <?php 
            echo "</tr>";
        }
    }
}

?>
  </tbody>
</table>  



  <!-- NO BORRAR ----------------------------------------- -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  </body>
</html>