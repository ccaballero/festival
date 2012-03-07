<?php

class Faq_Post extends Application_Model_Validation
{
    protected $_validationRules = array(
        'text' => array(
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

    public function getComments() {
        $model_post_comments = new Faq_Comments();
        return $model_post_comments->selectByPost($this->ident);
    }
}
