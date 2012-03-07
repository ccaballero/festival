<?php

class Instances extends Application_Model_Table
{
    protected $_name = 'festival_instance';
    protected $_primary = 'ident';

    // Find uniques indexes
    public function findByIdent($ident) {
        return $this->fetchRow($this->getAdapter()->quoteInto('ident = ?', $ident));
    }

    // Selects in table
    public function selectAll() {
        return $this->fetchAll($this->select()->order('tsregister ASC'));
    }

    public function selectByOwner($owner) {
        return $this->fetchAll($this->select()->where('owner = ?', $owner)->order('tsregister ASC'));
    }
}
