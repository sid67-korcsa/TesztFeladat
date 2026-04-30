<?php
/**
 * Index Class
 */

require_once ('dispatcher.php');
require_once ('traits/HeaderTrait.php');
require_once ('traits/FooterTrait.php');
require_once ('traits/ContentTrait.php');


class index {

    use HeaderTrait, FooterTrait, ContentTrait;

    protected $index = "index.php";
    protected $dispatcher = "dispatcher.php";

    public function __construct() {
        //
    }

    /**
     * Index method
     */
    public function index() {
        echo $this->header();
        echo $this->content();
        echo $this->footer();
    }
}

$indexObj = new Index();

if(is_object($indexObj)) {
    $indexObj->index();
}