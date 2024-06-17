<?php
/**
 * this csv processor is based on the model in
 * https://www.iana.org/assignments/http-status-codes/http-status-codes.xhtml
 * that contains all the documentation
 */
namespace Netonevess\ToolsHttpStatusCodesPhp\Processor;

use Generator;
use Netonevess\ToolsHttpStatusCodesPhp\HttpSingleStatusCode;

interface CSVProcessorInterface{
    /**
     * @return Generator
     */
    public function csvProcess(): Generator;

    /**
     * @param array $row
     * @return void
     */
    public function format(array $row): void;

    /**
     * @return array[HttpSingleStatusCode]
     */
    public function getFormattedRows(): array;

    /**
     * this must make the action of $this->csvProcess and $this->getFormattedRows
     * @return array
     */
    public function getCsvProcessFormatted(): array;
}
