<?php
/**
 * Dispatcher Class
 */

require_once ('models/ProjectModelTrait.php');

class dispatcher {

    use ProjectModelTrait;

    public function __construct() {

        switch ($_POST['process']) {
            case "export":
                $result = $this->export($_POST);
                if($result) {
                    return $result;
                }
                break;
        }

    }

}

$dispatch = new dispatcher();

