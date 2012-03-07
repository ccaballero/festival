<?php

class Faq_IndexController extends Application_Action
{
    public function indexAction() {
        global $CONFIG;
        global $USER;

        $model_faq = new Faq();
        $list_posts = $model_faq->selectAll();

        $this->view->active = 'faq';
        $this->view->list_posts = $list_posts;
    }
}
