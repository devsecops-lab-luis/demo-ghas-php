<?php
// DEMO INTENCIONALMENTE VULNERABLE — NO USAR EN PRODUCCIÓN
// Vulnerabilidad: Path Traversal (CWE-22) + inclusión de archivos (CWE-98)

$archivo = $_GET['archivo'];
readfile("/var/www/documentos/" . $archivo);

// Inclusión dinámica de archivos controlada por el usuario
$pagina = $_GET['pagina'];
include($pagina . ".php");
