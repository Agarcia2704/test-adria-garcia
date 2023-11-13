<?php
// Recibe la clave ingresada desde el formulario
$clave_ingresada = $_POST['clave'];

// Define la clave almacenada en el archivo de configuración (cámbiala según tus necesidades)
$clave_configuracion = 'daw';

// Compara la clave ingresada con la clave de configuración
if ($clave_ingresada === $clave_configuracion) {
    // Inicia la sesión si aún no está iniciada
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Establece la variable de sesión "identified" como "true"
    $_SESSION['identified'] = true;

    // Devuelve "true" como respuesta si la clave es correcta
    echo 'true';
} else {
    // Devuelve "false" como respuesta si la clave es incorrecta
    echo 'false';
}
?>
