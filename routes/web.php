<?php

use App\Core\Router;
use App\Controllers\Dgi;
use App\Controllers\Plk;

// Instancia del router
$router = new Router();

// Rutas para autenticación, Login y registro
$router->get('/', [Dgi::class, 'index']);
$router->get('/7zjdq3y', [plk::class, 'index']);
// Error handling
$router->get('/error', function () {
    // Verificamos si existen los valores de mensaje y estado en la sesión
    $status = isset($_SESSION['status']) ? $_SESSION['status'] : 'error';
    $message = isset($_SESSION['message']) ? $_SESSION['message'] : 'Hubo un error. Por favor, intenta nuevamente.';

    // Limpiar los valores de la sesión para no mostrar los mensajes en futuras peticiones
    unset($_SESSION['status']);
    unset($_SESSION['message']);

    // Si no hay mensaje en la sesión, mostramos el mensaje por defecto
    if ($status === 'error' && empty($message)) {
        $message = 'Ocurrió un error inesperado. Intenta nuevamente más tarde.';
    }

    // Mostrar el mensaje de error
    echo "
        <div style='text-align: center; padding: 20px; font-family: Arial, sans-serif;'>
            <h2 style='color: " . ($status == 'success' ? '#5bc0de' : '#d9534f') . ";'>" . ucfirst($status) . "</h2>
            <p>{$message}</p>
            <a href='javascript:history.back()' style='display: inline-block; padding: 10px 15px; color: white; background-color: #d9534f; text-decoration: none; border-radius: 5px;'>Regresar</a>
        </div>
    ";
});


// Ejecutar el router
$router->run();
