<?php
// Función para contar la cantidad de veces que aparece la letra "o" en una frase.
function contar_letra_o($frase) {
    return substr_count(strtolower($frase), 'o');
}

// Función para encontrar y contar las vocales en una frase.
function encontrar_vocales($frase) {
    preg_match_all('/[aeiou]/i', $frase, $matches);
    return $matches[0];
}

// Función para contar la cantidad de veces que aparece cada vocal en una frase.
function contar_vocales($frase) {
    return array_count_values(encontrar_vocales($frase));
}

// Inicializar la variable de la frase
$frase = '';

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener la frase enviada por el formulario
    $frase = $_POST["frase"];

    // Contar la cantidad de veces que aparece la letra "o" en la frase
    $ocurrencias_o = contar_letra_o($frase);
    echo "La letra 'o' aparece $ocurrencias_o veces en la frase.<br>";

    // Contar la cantidad de veces que aparece cada vocal en la frase
    $vocales_contadas = contar_vocales($frase);
    echo "Cantidad de veces que aparecen cada vocal en la frase:<br>";
    foreach ($vocales_contadas as $vocal => $cantidad) {
        echo "$vocal: $cantidad<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Contador de letras y vocales</h1>
    <!-- Formulario para ingresar una frase -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="frase">Introduce una frase:</label><br>
        <!-- Textarea para ingresar la frase, el valor se establece con la variable $frase -->
        <textarea id="frase" name="frase" rows="4" cols="50" required><?php echo htmlspecialchars($frase); ?></textarea><br>
        <button type="submit">Procesar</button>
    </form>
</body>
</html>
