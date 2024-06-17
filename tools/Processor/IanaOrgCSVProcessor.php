<?php
/**
 * this csv processor is based on the model indicated by the psr, and located at
 * https://www.iana.org/assignments/http-status-codes/http-status-codes.xhtml
 * that contains the list of all http status codes.
 */
namespace Netonevess\ToolsHttpStatusCodesPhp\Processor;

use Generator;
use League\Csv\Reader;
use League\Csv\Statement;
use Netonevess\ToolsHttpStatusCodesPhp\HttpSingleStatusCode;

class IanaOrgCSVProcessor implements CSVProcessorInterface
{
    /**
     * @var string $csvPath
     */
    private string $csvPath;
    /**
     * @var array[HttpSingleStatusCode]
     */
    private array $formattedRows;

    public function __construct(string $csvPath)
    {
        $this->csvPath = $csvPath;
    }

    public function csvProcess(): Generator
    {
        $csv = Reader::createFromPath($this->csvPath, 'r');
        $csv->setHeaderOffset(0); //set the CSV header offset

        //get 25 records starting from the 11th row
        $stmt = Statement::create();

        $records = $stmt->process($csv);
        foreach ($records as $record) {
            yield $record;
        }
    }

    /**
     * @return array[]
     */
    public function getCsvProcessFormatted(): array
    {
        foreach ($this->csvProcess() as $row){
            $this->format($row);
        }
        return $this->getFormattedRows();
    }

    /**
     * Use get getFormattedRows to see the list
     * @param array $row which is a csv line
     * @return void
     */
    public function format(array $row): void
    {
        $code = $row['Value'];
        $description = $row['Description'];
        $ref = $row['Reference'];

        if(!str_contains('-', $code)) {
            $this->formattedRows[] = $this->createSingleStatusCode( (int)$code, $description, $ref);
        }else{
            [$initial, $final] = explode('-', $code);
            for ($i = $initial; $i < $final; $i++) {
                $this->formattedRows[] = $this->createSingleStatusCode($i, $description, $ref);
            }
        }

    }
    private function createSingleStatusCode($code, $description, $ref): HttpSingleStatusCode
    {
        return HttpSingleStatusCode::fromCodeDescriptionReference($code, $description, $ref);
    }


    /**
     * @return array[HttpSingleStatusCode]
     */
    public function getFormattedRows(): array
    {
        return $this->formattedRows;
    }

}
