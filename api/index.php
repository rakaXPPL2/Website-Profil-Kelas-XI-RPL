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

// No database is used by this app (all data is hardcoded in AnggotaController).
// Force an in-memory SQLite connection so nothing crashes if anything ever
// touches the DB layer, since the filesystem here is read-only.
putenv('DB_CONNECTION=sqlite');
putenv('DB_DATABASE=:memory:');

register_shutdown_function(function (): void {
	$error = error_get_last();
	if ($error !== null && in_array($error['type'], [E_ERROR, E_CORE_ERROR, E_COMPILE_ERROR, E_PARSE], true)) {
		error_log(sprintf('Laravel fatal error: %s in %s:%d', $error['message'], $error['file'], $error['line']));
	}
});

require __DIR__ . '/../vendor/autoload.php';

$storagePath = '/tmp/laravel-storage';

if (!is_dir($storagePath)) {
	mkdir($storagePath . '/framework/cache/data', 0755, true);
	mkdir($storagePath . '/framework/sessions', 0755, true);
	mkdir($storagePath . '/framework/views', 0755, true);
	mkdir($storagePath . '/logs', 0755, true);
}

$app = require_once __DIR__ . '/../bootstrap/app.php';
$app->useStoragePath($storagePath);
$app->register(\Illuminate\View\ViewServiceProvider::class);
try {
	$response = $app->handleRequest(Illuminate\Http\Request::capture());
	if ($response instanceof \Symfony\Component\HttpFoundation\Response) {
		$response->send();
	}
} catch (\Throwable $exception) {
	error_log(sprintf('Laravel request error: %s in %s:%d', $exception->getMessage(), $exception->getFile(), $exception->getLine()));
	http_response_code(500);
	echo 'Application error';
}
