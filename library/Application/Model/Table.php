<?php

abstract class Application_Model_Table extends Zend_Db_Table_Abstract
{
    public function __construct() {
        global $DB;
        parent::__construct(array('db' => $DB));
    }
}
