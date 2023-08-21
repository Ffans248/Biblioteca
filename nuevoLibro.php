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
    $editorial = $_POST['editorial'];
    $Flanz = $_POST['Flanz'];
    $Desc = $_POST['Desc'];
    $autor = $_POST['autor'];

    $sql = "INSERT INTO libros (nombre, editorial, fechaLan, descripcion, autor)
    VALUE ('$nombre', '$editorial', '$Flanz', '$Desc', '$autor')";

    if(mysqli_query($conn, $sql)){
        header("Location: mostrar.php");
    }else{
        echo "Error: " . mysqli_error($conn);
    }
}
?>