<?php

/**
 * Vercel Serverless Entry Point
 * 
 * Vercel routes all API and dynamic requests here.
 * This forwards the request to the standard Laravel public/index.php
 */

require __DIR__ . '/../public/index.php';
