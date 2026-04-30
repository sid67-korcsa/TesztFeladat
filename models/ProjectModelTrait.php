<?php

require_once ('configs/JSON.php');

/**
 * Trait ProjectModelTrait
 */
trait ProjectModelTrait {

    use JsonTrait;

    /**
     * @return array
     */
    protected function export(): string
    {

        $products = $this->getJSON();

        if(is_object($products)) {
            $xmlContent = $this->xmlConvert($products->Product);
        }

        file_put_contents("includes/media/products.xml", $xmlContent);

        return "includes/media/products.xml";
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