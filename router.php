<?php
$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// If it's a directory, check for index.php inside it
if (is_dir(__DIR__ . $uri)) {
    $indexFile = rtrim(__DIR__ . $uri, '/') . '/index.php';
    if (file_exists($indexFile)) {
        include $indexFile;
        return;
    }
}

// If the file exists with .php extension, serve it
if (file_exists(__DIR__ . $uri . '.php')) {
    include __DIR__ . $uri . '.php';
    return;
}

// Special redirects from .htaccess
if ($uri === '/orthopedic-hospital/haryana' || $uri === '/orthopedic-hospital/haryana/') {
    include 'orthopedics.php';
    return;
}
if ($uri === '/haddi-ka-doctor/haryana' || $uri === '/haddi-ka-doctor/haryana/') {
    include 'haddi-ka-doctor.php';
    return;
}

// Fallback to index.php
if ($uri === '/' || $uri === '/index.php') {
    include 'index.php';
    return;
}

return false;
