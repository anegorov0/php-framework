<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use Sadas\Framework\http\Request;

$request = Request::createFromGlobals();

dd($request);
