<?php

namespace Sadas\Framework\http;

class Request
{

    public function __construct(
        private readonly array $getParams,
        private readonly array $postParams,
        private readonly array $cookieParams,
        private readonly array $fileParams,
        private readonly array $serverParams,
    )
    {

    }

    public static function createFromGlobals(): static
    {
        return new static($_GET, $_POST, $_COOKIE, $_FILES, $_SERVER);
    }

    public function getPath(): string
    {
        return strtok($this->serverParams['REQUEST_URI'], '?');
    }

    public function getMethod(): string
    {
         return $this->serverParams['REQUEST_METHOD'];
    }
}