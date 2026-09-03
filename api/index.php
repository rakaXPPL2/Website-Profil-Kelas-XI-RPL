<?php

if (!isset($_ENV['APP_KEY']) && !getenv('APP_KEY')) {
	putenv('APP_KEY=base64:8fZ8v3qK1mN5pR7sT9wX2yA4cE6gH0jL');
	$_ENV['APP_KEY'] = 'base64:8fZ8v3qK1mN5pR7sT9wX2yA4cE6gH0jL';
}

putenv('APP_ENV=production');
putenv('APP_DEBUG=false');
putenv('SESSION_DRIVER=array');
putenv('CACHE_STORE=array');
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
