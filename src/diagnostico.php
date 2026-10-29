<?php
// Herramienta de diagnóstico de red

$host = $_GET['host'];
$salida = shell_exec("ping -c 4 " . $host);

echo "<h2>Resultado para " . $host . "</h2>";
echo "<pre>" . $salida . "</pre>";