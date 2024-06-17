<?php

namespace Netonevess\ToolsHttpStatusCodesPhp\Documentation;

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

class IanaOrgDocumentationGetter implements DocumentationGetterInterface
{

    public function from(string $url): ResponseInterface
    {
        $client = new Client();
        return $client->get($url);
    }

    public function save(string $path): void
    {
        // @todo
    }
}
