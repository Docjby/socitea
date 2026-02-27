<?php

// Clear stale cache on cold starts
$cacheFiles = [
    '/tmp/config.php',
    '/tmp/events.php',
    '/tmp/packages.php',
    '/tmp/routes.php',
    '/tmp/services.php',
];
foreach ($cacheFiles as $file) {
    if (file_exists($file)) {
        unlink($file);
    }
}

require __DIR__ . '/../public/index.php';