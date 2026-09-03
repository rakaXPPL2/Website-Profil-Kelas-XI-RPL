<?php

if (!isset($_ENV['APP_KEY']) && !getenv('APP_KEY')) {
    putenv('APP_KEY=base64:j0JsJx97dN30OJmXhAGGU561GCNa4GXwYZw6Dr/dt68=');
    $_ENV['APP_KEY'] = 'base64:j0JsJx97dN30OJmXhAGGU561GCNa4GXwYZw6Dr/dt68=';
}

putenv('APP_ENV=production');
putenv('APP_DEBUG=false');
putenv('SESSION_DRIVER=array');
putenv('SESSION_CONNECTION=');
putenv('CACHE_STORE=array');
putenv('CACHE_PREFIX=');
putenv('QUEUE_CONNECTION=sync');
putenv('LOG_CHANNEL=errorlog');

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';
$storagePath = '/tmp/laravel-storage';

if (!is_dir($storagePath)) {
    mkdir($storagePath . '/framework/cache/data', 0755, true);
    mkdir($storagePath . '/framework/sessions', 0755, true);
    mkdir($storagePath . '/framework/views', 0755, true);
    mkdir($storagePath . '/logs', 0755, true);
}

$app->useStoragePath($storagePath);
$app->handleRequest(Illuminate\Http\Request::capture());
