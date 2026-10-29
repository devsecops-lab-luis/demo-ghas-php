<?php
// Nueva funcionalidad: descargar un reporte por nombre

$reporte = $_GET['reporte'];

header('Content-Type: text/plain');
echo file_get_contents("/var/www/reportes/" . $reporte);