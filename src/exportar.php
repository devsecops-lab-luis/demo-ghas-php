<?php
// Descargar un reporte por nombre (versión segura: lista permitida)

$clave = $_GET['reporte'] ?? '';

switch ($clave) {
    case 'ventas':
        $archivo = '/var/www/reportes/ventas.txt';
        break;
    case 'inventario':
        $archivo = '/var/www/reportes/inventario.txt';
        break;
    default:
        http_response_code(404);
        exit('Reporte no encontrado');
}

header('Content-Type: text/plain');
echo htmlspecialchars(file_get_contents($archivo));