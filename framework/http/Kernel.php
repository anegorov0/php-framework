<?php

namespace Sadas\Framework\http;

class Kernel
{


    public function handle(Request $request): Response
    {
        $content = '<h1>Hello, World1! </h1>';

        return new Response($content);
    }
}