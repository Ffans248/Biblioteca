<?php
//CONEXION
session_start();
$server = "localhost";
$user = "root";
$pass = "";
$db = "Biblioteca";
$conn = mysqli_connect($server,$user,$pass,$db);
if(!$conn){
    die("La conexion fallo: ". mysqli_connect_error());
}else{
    $idCliente = $_POST['idCliente'];
    $nombresCliente = $_POST['nombresCliente'];
    $apellidosCliente = $_POST['apellidosCliente'];
    $correoCliente = $_POST['correoCliente'];
    $telCliente = $_POST['telCliente'];
    $libroPrestado = $_POST['libroPrestado'];
    $Fprestado = $_POST ['Fprestamo'];
    $Fdevolucion = $_POST ['Fdevolucion'];
    $idSesion = $_SESSION['id'];
    $usuarioSesion = $_SESSION['usuario'];

    $sql = "INSERT INTO prestamo (nombre_libro, id_clientes, nombre_clientes, id_usuarios, usuario, fechaPrestamo, fechaDevolucion, estado)
    VALUE ('$libroPrestado', '$idCliente', '$nombresCliente', '$idSesion', '$usuarioSesion', '$Fprestado', '$Fdevolucion', 'Pendiente' )";

    if(mysqli_query($conn, $sql)){
        header("Location: historial.php");
    }else{
        echo "Error: " . mysqli_error($conn);
    }
}
?>