<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * Vercel Serverless Entry Point
 * 
 * Vercel routes all API and dynamic requests here.
 * This forwards the request to the standard Laravel public/index.php
 */

/*
|--------------------------------------------------------------------------
| Create Writable Directories in /tmp
|--------------------------------------------------------------------------
|
| Since Vercel has a read-only filesystem, we redirect storage to /tmp/storage.
| However, Laravel expects certain subdirectories to exist. We create them here
| if they don't already exist.
|
*/
if (isset($_ENV['VERCEL']) || getenv('VERCEL')) {
    $requiredDirectories = [
        '/tmp/storage/framework/cache/data',
        '/tmp/storage/framework/sessions',
        '/tmp/storage/framework/views',
        '/tmp/storage/app/public',
    ];
    
    foreach ($requiredDirectories as $directory) {
        if (!is_dir($directory)) {
            mkdir($directory, 0755, true);
        }
    }
}

try {
    require __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    header("HTTP/1.1 500 Internal Server Error");
    header("Content-Type: text/html; charset=utf-8");
    echo "<html><head><title>Laravel Serverless Crash Report</title>";
    echo "<style>body{font-family:sans-serif;background:#0f172a;color:#cbd5e1;padding:20px;line-height:1.6}h1{color:#f43f5e}h3{color:#38bdf8;border-bottom:1px solid #334155;padding-bottom:5px;margin-top:20px}pre{background:#1e293b;padding:15px;border-radius:8px;overflow-x:auto;color:#e2e8f0;border:1px solid #334155}hr{border:0;border-top:1px dashed #334155;margin:30px 0}</style></head><body>";
    echo "<h1>Laravel Serverless Crash Report</h1>";
    echo "<p>PHP Version: " . PHP_VERSION . "</p>";
    
    $current = $e;
    $index = 1;
    while ($current) {
        echo "<h3>Exception #{$index}: " . get_class($current) . "</h3>";
        echo "<p><strong>Message:</strong> " . htmlspecialchars($current->getMessage()) . "</p>";
        echo "<p><strong>File:</strong> " . htmlspecialchars($current->getFile()) . " on line " . $current->getLine() . "</p>";
        echo "<pre>" . htmlspecialchars($current->getTraceAsString()) . "</pre>";
        echo "<hr>";
        $current = $current->getPrevious();
        $index++;
    }
    echo "</body></html>";
    exit;
}
