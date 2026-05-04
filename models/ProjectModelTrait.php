<?php

require_once ('configs/JSON.php');

/**
 * Trait ProjectModelTrait
 */
trait ProjectModelTrait {

    use JsonTrait;

    protected $returnData = [];
    protected $outXmlFile = "includes/media/products.xml";

    /**
     * @return array
     */
    protected function export()
    {

        header('Content-Type: application/json');

        $products = $this->getJSON();

        if(is_object($products)) {
            $xmlContent = $this->xmlConvert($products->Product);
        }

        file_put_contents($this->outXmlFile, $xmlContent);

        $this->returnData = [
            "success" => true,
            "data" => $this->outXmlFile,
            "messages" => "Success"
        ];


        echo json_encode($this->outXmlFile);
    }

    /**
     * @param object $products
     * @return string
     */
    protected function xmlConvert($products): string {

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<Product>';
        foreach ($products as $prods)
            if($prods->Keszlet == 1) {
                $xml .= '
                    <product>
                      <nev>' . $prods->Nev . '</nev>
                      <ar>' . $prods->Ar . '</ar>
                      <keszlet>' . $prods->Keszlet . '</keszlet>
                    </product>
                ';
            }
        $xml .= '</Product>';

        if (is_string($xml)) {
            return $xml;
        }
    }

}