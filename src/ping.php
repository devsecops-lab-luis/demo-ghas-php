<?php
// DEMO INTENCIONALMENTE VULNERABLE — NO USAR EN PRODUCCIÓN
// Vulnerabilidad: Inyección de comandos del sistema operativo (CWE-78)

$host = $_GET['host'];
$salida = shell_exec("ping -c 4 " . $host);
echo "<pre>" . $salida . "</pre>";

// Otra variante
system("nslookup " . $_REQUEST['dominio']);
