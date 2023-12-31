
<?php 
include("sesion.php");
$idCliente= $_GET['id'];
$NombresCliente= $_GET['nombres'];
$ApellidosCliente= $_GET['apellidoss'];
$CorreoCliente= $_GET['correo'];
$Tel= $_GET['tel'];
; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <form action="nuevoPrestamo.php" method="POST" >
        <div class="text-center">
        <h1>Registrar un prestamo</h1>
        <div style="position:fixed; left:1.5%; top:2%; font-size:100%"> <a class="nav-link dropdown-toggle" href="#"
            role="button" data-bs-toggle="dropdown" aria-expanded="false"><i href="#"
                class="glyphicon glyphicon-user"></i>
            <?php echo $_SESSION['usuario']; ?>
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="RegistroClientes.php">Crear clientes</a></li>
            <li><a class="dropdown-item" href="historial.php">Ver historial de prestamos</a></li>
            <li><a class="dropdown-item" href="RegistroLibro.php">Registrar libros</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item text-danger" href="cerrar_session.php">Cerrar sesión</a></li>
        </ul>
    </div>

        </div>
    <div style="margin: 15px;">
    <div class="mb-3" >
        <label for="Nombres" class="form-label">ID del cliente</label>
        <input type="text" class="form-control" name="idCliente" placeholder="Nombre del Libro" value=" <?php echo $idCliente ?>" readonly  required>
    </div>
    <div class="mb-3" >
        <label for="Nombres" class="form-label">Nombres del cliente</label>
        <input type="text" class="form-control" name="nombresCliente" placeholder="Nombre del Libro" value=" <?php echo $NombresCliente ?>" readonly required>
    </div>
    <div class="mb-3" >
        <label for="Apellidos" class="form-label">Apellidos del cliente</label>
        <input type="text" class="form-control" name="apellidosCliente" placeholder="Editorial" value=" <?php echo $ApellidosCliente ?>" readonly required>
    </div>
    <div class="mb-3" >
        <label for="Correo" class="form-label">Correo del Cliente</label>
        <input type="text" class="form-control" name="correoCliente" placeholder="Correo" value=" <?php echo $CorreoCliente  ?>" readonly required>
    </div>
    <div class="mb-3" >
        <label for="telefono" class="form-label">Telefono del Cliente</label>
        <input type="text" class="form-control" name="telCliente" placeholder="Descripción" value=" <?php echo$Tel ?>" readonly required>
    </div>
    <div class="mb-3" >
    <label for="telefono" class="form-label">Libro prestado:</label>
    <select name="libroPrestado" class="form-control mt-2"
                        style="border: #bababa 1px solid; color:#000000;">
                        <option value="libroPrestado">Elige un Libro</option>
                        <?php
                       include("conexiondb.php");

                        if ($conn) {
                            $sql = "SELECT DISTINCT nombre FROM libros";
                            $resultado = mysqli_query($conn, $sql);

                            while ($row = $resultado->fetch_assoc()) {
                                $tituloLibro = $row['nombre'];
                                echo "<option value='$tituloLibro'>$tituloLibro</option>";
                            }
                            mysqli_close($conn);
                        }
                        ?>
                    </select> </div>
                    <div class="mb-3" >
        <label for="telefono" class="form-label">Fecha en la cual se prestó</label>
        <input type="Date" class="form-control" name="Fprestamo" placeholder="Descripción"   required>
    </div>
    <div class="mb-3" >
        <label for="telefono" class="form-label"> Fecha de devolución</label>
        <input type="Date" class="form-control" name="Fdevolucion" placeholder="Descripción"  required>
    </div>

 
    <div class="d-grid mb-3">
        <button class="btn btn-success" type="submit">Registrar</button>
    </div>
</div>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
</body>

</html>