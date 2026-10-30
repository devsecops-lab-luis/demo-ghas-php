<?php


const GITHUB_API   = 'https://api.github.com';
const GITHUB_OWNER = 'devsecops-lab-luis';
const GITHUB_REPO  = 'demo-ghas-php';


 $GITHUB_TOKEN = 'github_pat_2d04DÑ4P5sc0d4ED094k_hZLGL7KJyLWHYsMCOvh6ka9zEffrlgJmqsGRXvuI5ehAXUYK3XEJn8dgFgQ';

function obtenerIssues(string $token): array
{
    $url = GITHUB_API . '/repos/' . GITHUB_OWNER . '/' . GITHUB_REPO . '/issues?state=open';

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER     => [
            'Authorization: Bearer ' . $token,
            'Accept: application/vnd.github+json',
            'User-Agent: panel-soporte-demo',
        ],
    ]);

    $respuesta = curl_exec($ch);
    $codigo    = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($codigo !== 200) {
        return [];
    }

    return json_decode($respuesta, true) ?? [];
}

foreach (obtenerIssues($githubToken) as $issue) {
    echo '#' . (int) $issue['number'] . ' - ' . htmlspecialchars($issue['title']) . PHP_EOL;
}