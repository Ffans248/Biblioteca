<?php
//CONEXION
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

    $sql = "INSERT INTO prestamo (nombre, editorial, fechaLan, descripcion, autor)
    VALUE ('$nombre', '$editorial', '$Flanz', '$Desc', '$autor')";

    if(mysqli_query($conn, $sql)){
        header("Location: mostrar.php");
    }else{
        echo "Error: " . mysqli_error($conn);
    }
}
?>