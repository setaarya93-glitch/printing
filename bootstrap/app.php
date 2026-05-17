<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Contracts\Debug\ExceptionHandler as ExceptionHandlerContract;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class VercelExceptionHandler extends ExceptionHandler {
    public function render($request, Throwable $e) {
        header("HTTP/1.1 500 Internal Server Error");
        header("Content-Type: text/html; charset=utf-8");
        echo "<html><head><title>Laravel Original Exception Report</title>";
        echo "<style>body{font-family:sans-serif;background:#0f172a;color:#cbd5e1;padding:20px;line-height:1.6}h1{color:#f43f5e}h3{color:#38bdf8;border-bottom:1px solid #334155;padding-bottom:5px}pre{background:#1e293b;padding:15px;border-radius:8px;overflow-x:auto;color:#e2e8f0;border:1px solid #334155}</style></head><body>";
        echo "<h1>Laravel Original Exception Report</h1>";
        echo "<h3>Class: " . get_class($e) . "</h3>";
        echo "<p><strong>Message:</strong> " . htmlspecialchars($e->getMessage()) . "</p>";
        echo "<p><strong>File:</strong> " . htmlspecialchars($e->getFile()) . " on line " . $e->getLine() . "</p>";
        echo "<pre>" . htmlspecialchars($e->getTraceAsString()) . "</pre>";
        echo "</body></html>";
        exit;
    }
}

$app = Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();

if (isset($_ENV['VERCEL']) || getenv('VERCEL')) {
    $app->useStoragePath('/tmp/storage');
    $app->singleton(ExceptionHandlerContract::class, VercelExceptionHandler::class);
}

return $app;
