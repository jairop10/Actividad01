<?php
// Genera un número primo aleatorio menor que 110.
function generarNumeroPrimoAleatorio() {
    do {
        $numero = rand(2, 109);
    } while (!esPrimo($numero));
    return $numero;
}

// Verifica si un número dado es primo.
function esPrimo($numero) {
    if ($numero <= 1) return false;
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) return false;
    }
    return true;
}

// Genera un array de N números primos aleatorios menores que 110.
function generarNumerosPrimos($cantidad) {
    $numerosPrimos = [];
    while (count($numerosPrimos) < $cantidad) {
        $numero = generarNumeroPrimoAleatorio();
        if (!in_array($numero, $numerosPrimos)) {
            $numerosPrimos[] = $numero;
        }
    }
    return $numerosPrimos;
}

// Generar y mostrar 10 números primos aleatorios.
$cantidadNumeros = 10;
$numerosPrimosGenerados = generarNumerosPrimos($cantidadNumeros);
echo "Números primos generados:";
foreach ($numerosPrimosGenerados as $numeroPrimo) {
    echo "<br>$numeroPrimo";
}
?>
