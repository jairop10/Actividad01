<?php
// Función para combinar nombres y apellidos de forma aleatoria
function generarNombresAleatorios($nombres, $apellidos) {
    $nombresCompletos = array();
    
    // Verificar que ambos arreglos tengan elementos
    if (empty($nombres) || empty($apellidos)) {
        return $nombresCompletos; // Devolver arreglo vacío si alguno de los arreglos está vacío
    }

    // Obtener el número de elementos en cada arreglo
    $numNombres = count($nombres);
    $numApellidos = count($apellidos);

    // Combinar nombres y apellidos de forma aleatoria
    for ($i = 0; $i < max($numNombres, $numApellidos); $i++) {
        $nombreAleatorio = ucfirst(strtolower($nombres[rand(0, $numNombres - 1)]));
        $apellidoAleatorio = ucfirst(strtolower($apellidos[rand(0, $numApellidos - 1)]));
        $nombresCompletos[] = $nombreAleatorio . ' ' . $apellidoAleatorio;
    }

    return $nombresCompletos;
}

// Arreglos de nombres y apellidos
$nombres = array("juan", "maria", "pedro", "ana", "luis", "laura", "carlos", "sofia", "miguel", "elena");
$apellidos = array("gomez", "rodriguez", "lopez", "fernandez", "martinez", "perez", "gonzalez", "sanchez");

// Generar nombres aleatorios
$nombresGenerados = generarNombresAleatorios($nombres, $apellidos);

// Mostrar los nombres generados
echo "<h2>Nombres Generados:</h2>";
foreach ($nombresGenerados as $nombre) {
    echo $nombre . "<br>";
}
?>
