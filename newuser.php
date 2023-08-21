<?php
// error_reporting(0);
include('conexiondb.php');
if (!$conn) {
    die("La conexión fallo: " . mysqli_connect_error());
} else {

        if (empty($_POST["usuario"])and empty($_POST["pass"])  ) {
            echo '<div class="text-danger">LOS CAMPOS ESTAN VACIOS</div>';
        }else {
    $usuario = $_POST['usuario'];
    $pas = $_POST['pass'];
    
    $sql = mysqli_query($conn,"SELECT * FROM usuarios WHERE usuario = '$usuario'");
    $r = mysqli_num_rows($sql);
    if ($r > 0) {
        
        
        echo "<div>El usuario ya está registrado</div>";
        
        
    } else {
        
        $sql = "INSERT INTO usuarios (usuario,pass) VALUE ('$usuario', '$pas')";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    }
    

}

        }
?>