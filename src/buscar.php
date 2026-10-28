<?php
// DEMO INTENCIONALMENTE VULNERABLE — NO USAR EN PRODUCCIÓN
// Vulnerabilidad: Cross-Site Scripting reflejado (CWE-79)

$termino = $_GET['q'];
?>
<html>
<body>
  <h1>Resultados de búsqueda</h1>
  <p>Buscaste: <?php echo $termino; ?></p>
</body>
</html>
