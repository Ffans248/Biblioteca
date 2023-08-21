<?php
session_start();
error_reporting(0);
$varsession= $_SESSION['usuario'];
if ($varsession==null||$varsession='') {

    session_destroy();
    // die();
}else{
   header("location:Feed2.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="d-flex justify-content-center align-items-center h-100 vh-99" style="background:#ABC5D1">

    <div class="col-sm-8 col-md-6 mx-auto mb-3 mt-3  d-flex flex-column justify-content-center align-items-center  "
        style="padding:2%;background:#fff6;border-radius:10px;  ">
        
        <h1>Registrese</h1>
        
        <form action="newuser.php" method="post" style="width: 100%;height:100%" class="justify-content-center">
            
                <div class="mb-3">
                    <label for="Nombre" class="form-label">Usuario:</label>
                    <input type="text" class="form-control" name="usuario" placeholder="Nombre" style="width: 100%;"required>
                </div>
                <div class="mb-3">
                    <label for="Apellido" class="form-label">Password:</label>
                    <input type="password" class="form-control" name="pass" placeholder="Apellido" style="width: 100%;"required>
                </div>

                
                <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-success" type="submit" name="reg">Registrar</button>
            
            </div>
            
        </form>
    </div>
</body> 





<div class="mb-3"></div>
<div class="mb-3"></div>
<div class="mb-3"></div>

<!-- scrip de bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
</script>
</body>

</html>