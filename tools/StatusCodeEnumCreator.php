<?php
namespace Netonevess\ToolsHttpStatusCodesPhp;

use Netonevess\HttpStatusCodesPhp\HTTPStatusCode;

class StatusCodeEnumCreator {
    private array $sections;
    public function __construct()
    {
        $this->sections = [];
    }

    public function createKey(HttpSingleStatusCode $httpSingleStatusCode): string
    {
        $desc = $httpSingleStatusCode->getDescription();
        $desc = ucfirst($desc);
        if(!preg_match('/^\(/m', $desc)){
            $desc = preg_replace('/\(.*\)/m', '', $desc);
        }else{
            $desc = preg_replace('/\(|\)/m', '', $desc);
        }

        return str_replace(['-', ' '], '', $desc);
    }

    public function addSection(HttpSingleStatusCode $httpSingleStatusCode):void
    {
        $httpStatusCodeClassSection = <<<php


    /**
     * %s
     * %s 
     */
    case %s = %s;
php;
        $key = $this->createKey($httpSingleStatusCode);
        if(!array_key_exists($key, $this->sections)) {
            $desc = $httpSingleStatusCode->getDescription();
            $ref = $httpSingleStatusCode->getReference() ?? 'no reference';
            $code = $httpSingleStatusCode->getCode();
            $this->sections[$key] = sprintf(
                $httpStatusCodeClassSection,
                $desc,
                $ref,
                $key,
                $code
            );
        }
    }

    public function saveClass()
    {
        $httpStatusCodeClass = <<<php
<?php
namespace Netonevess\HttpStatusCodesPhp;

enum HTTPStatusCode:int{
    %s
}

php;
        $data = sprintf($httpStatusCodeClass, implode('', $this->sections));
        // SETUP
        $adapter = new \League\Flysystem\Local\LocalFilesystemAdapter('./');
        $filesystem = new \League\Flysystem\Filesystem($adapter);

        // USAGE
        $filesystem->write('src/HTTPStatusCode.php', $data);
    }
}
