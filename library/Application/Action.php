<?php

abstract class Application_Action extends Zend_Controller_Action
{
    public function preDispatch() {
        global $CONFIG;
        global $USER;

        $this->getRequest()->setBaseUrl($CONFIG->wwwroot);

        // add the views in path
        $this->view->addHelperPath($CONFIG->dirroot . 'library/Application/Helpers', 'Application_Helpers');

        // add the media directory for module
        $this->view->config = $CONFIG;
        $this->view->user = $USER;
    }

    public function postDispatch() {}
}
