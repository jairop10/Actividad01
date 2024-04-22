<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida y Navegador</title>
</head>
<body>

<?php
// Función para mostrar la bienvenida y el navegador utilizado
function mostrarBienvenida() {
    echo "<h1>Bienvenido!</h1>";
    echo "<p>Estás utilizando el navegador: " . obtenerNavegador() . "</p>";
}

// Función para obtener el nombre del navegador
function obtenerNavegador() {
    // Obtener el agente de usuario del navegador
    $user_agent = $_SERVER['HTTP_USER_AGENT'];

    // Definir los patrones para detectar diferentes navegadores
    $navegadores = array(
        'Firefox' => 'Firefox',
        'Chrome' => 'Chrome',
        'Edge' => 'Edge',
        'Safari' => 'Safari',
        'Opera' => 'Opera',
        'MSIE' => 'Internet Explorer'
    );

    // Buscar el nombre del navegador en el agente de usuario
    foreach ($navegadores as $navegador => $patron) {
        if (strpos($user_agent, $patron) !== false) {
            return $navegador;
        }
    }

    // Si no se encuentra ningún navegador conocido, devolver "Desconocido"
    return "Desconocido";
}

// Mostrar la bienvenida y el navegador utilizado
mostrarBienvenida();
?>

</body>
</html>