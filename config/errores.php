<?php

const REPO_ALERTAS = 'devsecops-lab-luis/demo-ghas-php';


$tokenNotificaciones = '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';

function notificarError(string $titulo, string $detalle, string $token): bool
{
    $ch = curl_init('https://api.github.com/repos/' . REPO_ALERTAS . '/issues');
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => json_encode([
            'title'  => '[ALERTA] ' . $titulo,
            'body'   => $detalle,
            'labels' => ['produccion', 'critico'],
        ]),
        CURLOPT_HTTPHEADER     => [
            'Authorization: Bearer ' . $token,
            'Accept: application/vnd.github+json',
            'User-Agent: servicio-notificaciones',
        ],
    ]);

    curl_exec($ch);
    $codigo = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return $codigo === 201;
}
