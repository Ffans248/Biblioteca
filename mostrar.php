<?php include('sesion.php'); ?>
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
  <div style="position:fixed; left:1.5%; top:2%; font-size:100%"> <a class="nav-link dropdown-toggle" href="#"
            role="button" data-bs-toggle="dropdown" aria-expanded="false"><i href="#"
                class="glyphicon glyphicon-user"></i>
            <?php echo $_SESSION['usuario']; ?>
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="RegistroClientes.php">Crear clientes</a></li>
            <li><a class="dropdown-item" href="RegistroLibro.php">Crear libros</a></li>
            <li><a class="dropdown-item" href="historial.php">Ver historial de prestamos</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item text-danger" href="cerrar_session.php">Cerrar sesión</a></li>
        </ul>
    </div>
  <table class="table table-sm table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Correo</th>
      <th scope="col">Telefono</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>

  <?php
//CONEXION

include("conexiondb.php");
$conn = mysqli_connect($server,$user,$pass,$db);
if(!$conn){
    die("La conexion fallo: ". mysqli_connect_error());
}else{
    $sql = "SELECT * FROM clientes";
    $resultado = mysqli_query($conn, $sql);
    if($resultado){
        while($row = $resultado->fetch_array()){
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nombres'] ."</td>";
            echo "<td>" . $row['apellidos'] ."</td>";
            echo "<td>" . $row['correo'] ."</td>";
            echo "<td>" . $row['tel'] ."</td>";
            ?>
            <td> <a href="Prestamo.php?id=<?php echo $row['id']; ?>&nombres=<?php echo urlencode($row['nombres']); ?>&apellidoss=<?php echo urlencode($row['apellidos']); ?>&correo=<?php echo urlencode($row['correo']); ?>&tel=<?php echo urlencode($row['tel']);?>"><i class="bi bi-plus"></i></button></a>
            <a href="prestamosCliente.php?clave=<?php echo $row['id'];?>"> <button type="button" class=""><i class="bi bi-eye"> </i></button> </a></td>
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