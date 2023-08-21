<?php
//CONEXION
$server = "localhost";
$user = "id20936459_ffans";
$pass = "GtXfFHBRN$&pW3Peyin";
$db = "id20936459_programacion";
$conn = mysqli_connect($server,$user,$pass,$db);
if(!$conn){
    die("La conexion fallo: ". mysqli_connect_error());
}else{
    $nombre = $_POST['nombres'];
    $apellido = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $tel = $_POST['tel'];

    $sql = "INSERT INTO usuarios (nombre, apellido,correo,pass)
    VALUE ('". $nombre ."','". $apellido ."', '". $correo ."',
    '". $tel ."')";

    if(mysqli_query($conn, $sql)){
        header("Location: mostrar.php");
    }else{
        echo "Error: " . mysqli_error($conn);
    }
}
?>