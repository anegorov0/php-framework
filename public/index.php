<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use Sadas\Framework\http\Kernel;
use Sadas\Framework\http\Request;
use Sadas\Framework\http\Response;

$request = Request::createFromGlobals();

$kernel = new Kernel();
$response = $kernel->handle($request);
$response->send();