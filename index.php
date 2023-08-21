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
    <form action="nuevo.php" method="POST">
    <div style="margin: 15px;">
    <div class="mb-3" >
        <label for="Nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
    </div>
    <div class="mb-3" >
        <label for="Apellido" class="form-label">Apellido</label>
        <input type="text" class="form-control" name="apellido" placeholder="Apellido" required>
    </div>
    <div class="mb-3" >
        <label for="Correo" class="form-label">Correo</label>
        <input type="email" class="form-control" name="correo" placeholder="Correo" required>
    </div>
    <div class="mb-3" >
        <label for="Contraseña" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="pass" placeholder="Contraseña" required>
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