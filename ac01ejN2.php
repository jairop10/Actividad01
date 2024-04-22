<?php
// Función para validar el usuario y la contraseña
function validarUsuarioContraseña($usuario, $contraseña) {
    // Lista de usuarios válidos y su contraseña asociada
    $usuariosValidos = array(
        "juan" => "D153n0W3b2",
        "pedro" => "D153n0W3b2",
        "maria" => "D153n0W3b2",
        "raul" => "D153n0W3b2"
    );

    // Verificar si el usuario está en la lista y la contraseña es correcta
    if (array_key_exists($usuario, $usuariosValidos) && $contraseña === $usuariosValidos[$usuario]) {
        return true; // Usuario y contraseña válidos
    } else {
        return false; // Usuario y/o contraseña inválidos
    }
}

// Función para manejar el formulario
function manejarFormulario() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verificar si se han enviado los datos del formulario
        if(isset($_POST["usuario"]) && isset($_POST["contraseña"])){
            // Obtener los datos del formulario
            $usuario = $_POST["usuario"];
            $contraseña = $_POST["contraseña"];

            // Validar usuario y contraseña
            if (validarUsuarioContraseña($usuario, $contraseña)) {
                echo "Acceso concedido. Bienvenido, $usuario.";
            } else {
                echo "Acceso denegado. Usuario o contraseña incorrectos.";
            }
        }
        else{
            echo "Error: Debes ingresar tanto el usuario como la contraseña.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de Usuario y Contraseña</title>
</head>
<body>
    <h1>Validación de Usuario y Contraseña</h1>
    <?php manejarFormulario(); ?>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br>
        <label for="contraseña">Contraseña:</label>
        <input type="password" id="contraseña" name="contraseña" required><br>
        <button type="submit">Iniciar Sesión</button>
    </form>
</body>
</html>
