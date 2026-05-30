<?php
header('Content-Type: text/plain');
echo "Hello from deploy helper!\n";
echo "Working dir: " . __DIR__ . "\n";

// Try to find the perenzin nginx config
$paths = [
    '/etc/nginx/sites-enabled/default',
    '/etc/nginx/conf.d/default.conf',
    '/etc/nginx/nginx.conf',
];

foreach ($paths as $path) {
    if (file_exists($path)) {
        echo "\n--- $path ---\n";
        echo file_get_contents($path);
    } else {
        echo "NOT FOUND: $path\n";
    }
}
