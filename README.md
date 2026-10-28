# demo-ghas-php

⚠️ **Repositorio intencionalmente vulnerable** para demostrar GitHub Advanced Security (GHAS) y su integración con Microsoft Defender for Cloud. No desplegar.

| Archivo | Vulnerabilidad | Lo detecta |
|---|---|---|
| `src/login.php` | Inyección SQL, MD5 para contraseñas | Code scanning (Semgrep) |
| `src/buscar.php` | XSS reflejado | Code scanning (Semgrep) |
| `src/ping.php` | Inyección de comandos | Code scanning (Semgrep) |
| `src/descargar.php` | Path traversal, inclusión de archivos | Code scanning (Semgrep) |
| `src/perfil.php` | Deserialización insegura, `eval` | Code scanning (Semgrep) |
| `config/db.php` | Credenciales hardcodeadas / token | Secret scanning + Semgrep |
| `composer.json` | Librerías con CVE conocidos | Dependabot |
| `.semgrep/reglas-php.yml` | Reglas propias (garantizan los hallazgos) | — |
| `.github/workflows/*.yml` | Configuración de Actions | CodeQL (lenguaje *actions*) |

> CodeQL no analiza PHP, por eso el análisis de código PHP lo hace Semgrep y sube sus resultados (SARIF) a la pestaña **Security → Code scanning** de GitHub.
