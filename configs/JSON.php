<?php

/**
 * Trait Json
 *
 * @property $jsonReturn
 * @property $jsonFile
 */
trait JsonTrait {

    public $jsonReturn;
    public $jsonFile = "includes/media/products.json";

    /**
     * @return array
     */
    public function getJSON(): stdClass
    {
        if(is_file($this->jsonFile) && is_readable($this->jsonFile)) {
            $this->jsonReturn = file_get_contents($this->jsonFile);
        } else {
            return [];
        }
        if($this->jsonReturn) {
            return json_decode($this->jsonReturn);
        } else {
            return [];
        }
    }

}