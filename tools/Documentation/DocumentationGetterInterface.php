<?php

namespace Netonevess\ToolsHttpStatusCodesPhp\Documentation;

use Psr\Http\Message\ResponseInterface;

interface DocumentationGetterInterface{
    public function from(string $url): ResponseInterface;
    public function save(string $path): void;
}
