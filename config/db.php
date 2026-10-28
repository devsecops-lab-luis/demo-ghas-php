<?php
// DEMO — Credenciales "hardcodeadas" (CWE-798)
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'SuperSecreto123!');
define('DB_NAME', 'demo_ghas');

// PASO DE SECRET SCANNING (ver README): aquí vas a pegar un token real
// de prueba para que GitHub lo detecte / bloquee con push protection.
// $GITHUB_TOKEN = 'PEGA_AQUI_EL_TOKEN_DE_PRUEBA';
