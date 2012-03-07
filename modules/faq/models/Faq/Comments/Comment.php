<?php

class Faq_Comments_Comment extends Application_Model_Validation
{
    protected $_validationRules = array(
        'comment' => array(
            'filters' => array('StringTrim'),
        ),
    );

    public function getAuthor() {
        $model_users = new Users();
        return $model_users->findByIdent($this->author);
    }

    public function amAuthor() {
        global $USER;
        return $USER->ident == $this->author;
    }
}
