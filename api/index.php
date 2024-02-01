<?php
//phpinfo();
require __DIR__ . "/../Index.html";

// Ruta del directorio actual
$directorio_actual = dirname(__FILE__);
echo "Ruta del directorio actual: $directorio_actual <br>";

// Listar archivos en el directorio actual
$archivos = scandir($directorio_actual);
echo "Archivos en el directorio actual: <br>";
foreach ($archivos as $archivo) {
    if ($archivo != "." && $archivo != "..") {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;$archivo <br>";
    }
}

// Función para mostrar los archivos en un directorio anterior
function mostrarDirectorioAnterior($nivel) {
    global $directorio_actual;
    for ($i = 0; $i < $nivel; $i++) {
        $directorio_actual = dirname($directorio_actual);
    }
    $archivos_anteriores = scandir($directorio_actual);
    echo "Archivos en el directorio anterior ($nivel niveles atrás): <br>";
    foreach ($archivos_anteriores as $archivo) {
        if ($archivo != "." && $archivo != "..") {
            echo "&nbsp;&nbsp;&nbsp;&nbsp;$archivo <br>";
        }
    }
}

// Llamar a la función con el argumento "1" para mostrar el directorio anterior
mostrarDirectorioAnterior(1);