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
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $tel = $_POST['tel'];

    $sql = "INSERT INTO clientes (nombres, apellidos,correo,tel)
    VALUE ('". $nombre ."','". $apellido ."', '". $correo ."',
    '". $tel ."')";

    if(mysqli_query($conn, $sql)){
        header("Location: mostrar.php");
    }else{
        echo "Error: " . mysqli_error($conn);
    }
}
?>