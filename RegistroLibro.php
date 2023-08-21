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
    <form action="nuevoLibro.php" method="POST" >
        <div class="text-center">
        <h1>Registro de Libros</h1>

        </div>
    <div style="margin: 15px;">
    <div class="mb-3" >
        <label for="Nombres" class="form-label">Nombre del Libro</label>
        <input type="text" class="form-control" name="nombre" placeholder="Nombre del Libro" required>
    </div>
    <div class="mb-3" >
        <label for="Apellidos" class="form-label">Editorial</label>
        <input type="text" class="form-control" name="editorial" placeholder="Editorial" required>
    </div>
    <div class="mb-3" >
        <label for="Correo" class="form-label">Fecha de Lanzamiento</label>
        <input type="Date" class="form-control" name="Flanz" placeholder="Correo" required>
    </div>
    <div class="mb-3" >
        <label for="telefono" class="form-label">Descripción</label>
        <input type="Text" class="form-control" name="Desc" placeholder="Descripción" required>
    </div>
    <div class="mb-3" >
        <label for="telefono" class="form-label">Autor</label>
        <input type="Text" class="form-control" name="autor" placeholder="Autor" required>
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