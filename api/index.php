<?php

if (!isset($_ENV['APP_KEY']) && !getenv('APP_KEY')) {
	putenv('APP_KEY=base64:exWOZeauMvmVFWddAkyDbZY/Au9l3NDCFAHLa7ENRD0=');
	$_ENV['APP_KEY'] = 'base64:exWOZeauMvmVFWddAkyDbZY/Au9l3NDCFAHLa7ENRD0=';
}

putenv('APP_ENV=production');
putenv('APP_DEBUG=false');
putenv('SESSION_DRIVER=array');
putenv('CACHE_STORE=array');
putenv('LOG_CHANNEL=errorlog');

require __DIR__ . '/../vendor/autoload.php';

require __DIR__ . '/../public/index.php';

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
