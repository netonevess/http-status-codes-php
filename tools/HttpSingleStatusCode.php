<?php

namespace Netonevess\ToolsHttpStatusCodesPhp;

final class HttpSingleStatusCode
{
    private int $code;
    private string $description;
    private ?string $reference = null;

    public function getCode(): int
    {
        return $this->code;
    }

    public function setCode(int $code): void
    {
        $this->code = $code;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): void
    {
        $this->reference = $reference === '' ? null : $this->reference;
    }

    public static function fromCodeDescriptionReference(int $code, string $description,string $reference = null): self
    {
        $statusCode = new self();
        $statusCode->setCode($code);
        $statusCode->setDescription($description);
        $statusCode->setReference($reference);
        return $statusCode;
    }
    public function __toInt(): int
    {
        return $this->getCode();
    }
    public function __toString(): string
    {
        return $this->getDescription();
    }
}
