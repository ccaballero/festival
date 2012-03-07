<?php

class Faq_Comments extends Application_Model_Table
{
    protected $_name = 'festival_faq_post_comment';
    protected $_primary = 'ident';
    protected $_rowClass = 'Faq_Comments_Comment';

    // Find uniques indexes
    public function findByIdent($ident) {
        return $this->fetchRow($this->getAdapter()->quoteInto('ident = ?', $ident));
    }

    // Selects in table
    public function selectAll() {
        return $this->fetchAll($this->select()->order('tsregister ASC'));
    }

    public function selectByPost($post) {
        return $this->fetchAll($this->select()->where('post = ?', $post)->order('tsregister ASC'));
    }

    public function selectByAuthor($author) {
        return $this->fetchAll($this->select()->where('author = ?', $author)->order('tsregister ASC'));
    }
}
