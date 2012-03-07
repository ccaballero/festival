<?php

class IndexController extends Application_Action
{
    public function indexAction () {
        $this->view->active = 'frontpage';
    }
}
