<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use Sadas\Framework\http\Request;
use Sadas\Framework\http\Response;

$request = Request::createFromGlobals();

$content = '<h1>Hello, World! </h1>';
$response = new Response($content, 200, []);
$response->send();