<?php

class Instances_InstanceController extends Application_Action
{
    public function addAction() {
        global $CONFIG;
        global $USER;

        if ($USER->ident == 0) {
            $this->_redirect($CONFIG->wwwroot);
        }

        $request = $this->getRequest();
        if ($request->isPost()) {
            $session = new Zend_Session_Namespace();

            $model_instances = new Instances();

            $processor = $request->getParam('instance_processor');
            $ram = $request->getParam('instance_ram');
            $hdd = $request->getParam('instance_hdd');
            $video = $request->getParam('instance_video');
            $comments = $request->getParam('instance_comments');

            $instance = $model_instances->createRow();
            $instance->owner = $USER->ident;
            $instance->processor = $processor;
            $instance->ram = $ram;
            $instance->hdd = $hdd;
            $instance->video = $video;
            $instance->tsregister = time();

            $instance->save();
            $session->messages->addMessage('Maquina registrada');
            $this->_redirect($CONFIG->wwwroot . 'instances');
        }

        $this->view->active = 'instances';
    }

    public function deleteAction() {
        if ($USER->ident == 0) {
            $this->_redirect($CONFIG->wwwroot);
        }

        $session = new Zend_Session_Namespace();
        $request = $this->getRequest();

        $id_instances = $request->getParam('instance');

        $model_instances = new Instances();
        $instance = $model_instances->findByIdent($id_instances);

        if ($instance->owner <> $USER->ident) {
            $session->messages->addMessage('No puedes eliminar ese recurso');
        } else {
            $instance->delete();
            $session->messages->addMessage('Maquina eliminada');
        }
        $this->_redirect($CONFIG->wwwroot . 'instances');
    }
}
