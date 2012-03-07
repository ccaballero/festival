<?php

class Info_InfoController extends Application_Action
{
    public function linuxAction () {
        $this->view->active = 'linux';
    }

    public function debianAction() {
        $this->view->active = 'debian';
    }
}
