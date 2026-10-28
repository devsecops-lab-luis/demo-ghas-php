<?php
// Nueva funcionalidad: convertir un documento subido a PDF

$archivo = $_POST['archivo'];
$formato = $_GET['formato'];

// Llama a LibreOffice para convertir el documento
exec("libreoffice --headless --convert-to " . $formato . " /var/www/uploads/" . $archivo, $salida);

echo "Conversión terminada";