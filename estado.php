<?php 
include('conexiondb.php');
$id=$_GET['clave'];


        
        // Consulta para obtener el estado actual del préstamo
    $consultaEstado = "SELECT estado FROM prestamo WHERE id = '$id'";
    $resultadoEstado = $conn->query($consultaEstado);
    
    if ($resultadoEstado->num_rows > 0) {
        $row = $resultadoEstado->fetch_assoc();
        $estadoActual = $row['estado'];
        
        if ($estadoActual == "Pendiente") {
            // Actualizar el estado a "Actualizado"
            $consultaActualizar = "UPDATE prestamo SET estado = 'Devuelto' WHERE id = '$id'";
            if ($conn->query($consultaActualizar)) {
                header("Location: historial.php");
            } else {
                
            }
        } else {
            // Redirigir a la página estado.php
            header("Location: historial.php");
            exit();
        }
    }   else{
        
    }

?>