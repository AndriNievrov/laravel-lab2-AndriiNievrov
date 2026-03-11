<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Перевіряємо режим обслуговування
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Реєструємо автозавантажувач
require __DIR__.'/../vendor/autoload.php';

// Створюємо додаток
$app = require_once __DIR__.'/../bootstrap/app.php';

// Обробляємо запит
$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);

