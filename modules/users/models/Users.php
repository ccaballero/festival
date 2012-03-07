<?php

class Users extends Application_Model_Table
{
    protected $_name = 'festival_user';
    protected $_primary = 'ident';
    protected $_rowClass = 'Users_User';

    // Especial method
    public function findByEmailAndPassword($email, $password) {
        return $this->fetchRow($this->select()->where('email = ?', $email)->where('password = ?', $password));
    }

    // Find uniques indexes
    public function findByIdent($ident) {
        return $this->fetchRow($this->getAdapter()->quoteInto('ident = ?', $ident));
    }

    public function findByEmail($email) {
        return $this->fetchRow($this->getAdapter()->quoteInto('email = ?', $email));
    }

    // Selects in table
    public function selectAll() {
        return $this->fetchAll($this->select()->order('fullname ASC'));
    }

    public function selectByStatus($status) {
        return $this->fetchAll($this->select()->where('status = ?', $status)->order('fullname ASC'));
    }
}
