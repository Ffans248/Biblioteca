<?php include('sesion.php'); ?>
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
    <form action="nuevoCliente.php" method="POST" >
        <div class="text-center">
        <h1>Registro de Clientes</h1>
        <div style="position:fixed; left:1.5%; top:2%; font-size:100%"> <a class="nav-link dropdown-toggle" href="#"
            role="button" data-bs-toggle="dropdown" aria-expanded="false"><i href="#"
                class="glyphicon glyphicon-user"></i>
            <?php echo $_SESSION['usuario']; ?>
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="historial.php">Ver Clientes y hacer prestamos</a></li>
            <li><a class="dropdown-item" href="RegistroLibro.php">Crear libros</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item text-danger" href="cerrar_session.php">Cerrar sesión</a></li>
        </ul>
    </div>

        </div>
    <div style="margin: 15px;">
    <div class="mb-3" >
        <label for="Nombres" class="form-label">Nombres</label>
        <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
    </div>
    <div class="mb-3" >
        <label for="Apellidos" class="form-label">Apellidos</label>
        <input type="text" class="form-control" name="apellidos" placeholder="Apellido" required>
    </div>
    <div class="mb-3" >
        <label for="Correo" class="form-label">Correo</label>
        <input type="email" class="form-control" name="correo" placeholder="Correo" required>
    </div>
    <div class="mb-3" >
        <label for="telefono" class="form-label">Telefono</label>
        <input type="number" class="form-control" name="tel" placeholder="Telefono" required>
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