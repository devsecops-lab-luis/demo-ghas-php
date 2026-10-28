<?php
// DEMO INTENCIONALMENTE VULNERABLE — NO USAR EN PRODUCCIÓN
// Vulnerabilidad: Deserialización insegura (CWE-502) + eval (CWE-95)

$datos = unserialize($_COOKIE['perfil']);
echo "Hola " . $datos['nombre'];

// Ejecución de código dinámico
$formula = $_POST['formula'];
eval('$resultado = ' . $formula . ';');
echo $resultado;
