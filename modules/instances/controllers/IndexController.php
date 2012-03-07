<?php

class Instances_IndexController extends Application_Action
{
    public function indexAction() {
        global $CONFIG;
        global $USER;

        if ($USER->ident == 0) {
            $this->_redirect($CONFIG->wwwroot);
        }

        $model_instances = new Instances();
        $list_instances = $model_instances->selectByOwner($USER->ident);

        $this->view->active = 'instances';
        $this->view->list_instances = $list_instances;
    }
}
