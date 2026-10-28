<?php
// DEMO INTENCIONALMENTE VULNERABLE — NO USAR EN PRODUCCIÓN
// Vulnerabilidad: Inyección SQL (CWE-89) + hash débil (CWE-328)
require_once __DIR__ . '/../config/db.php';

$usuario  = $_POST['usuario'];
$password = $_POST['password'];

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Concatenación directa de entrada del usuario en la consulta
$sql = "SELECT * FROM usuarios WHERE usuario = '" . $usuario . "' AND password = '" . md5($password) . "'";
$resultado = $conn->query($sql);

if ($resultado && $resultado->num_rows > 0) {
    echo "Bienvenido " . $usuario;
} else {
    echo "Credenciales incorrectas";
}
