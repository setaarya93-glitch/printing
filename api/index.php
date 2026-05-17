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

require __DIR__ . '/../public/index.php';
