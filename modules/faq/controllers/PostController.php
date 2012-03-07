<?php

class Faq_PostController extends Application_Action
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

            $model_faq = new Faq();

            $faq_post = $request->getParam('faq_post');

            $post = $model_faq->createRow();
            $post->author = $USER->ident;
            $post->text = $faq_post;
            $post->tsregister = time();

            $post->save();

            $mail = new Application_Helpers_Mail();
            $mail->mail('Consulta en el foro festivalero', $faq_post, 'text');

            $session->messages->addMessage('Consulta enviada');
            $this->_redirect($CONFIG->wwwroot . 'faq');
        }

        $this->view->active = 'faq';
    }

    public function deleteAction() {
        global $USER;

        if ($USER->ident == 0) {
            $this->_redirect($CONFIG->wwwroot);
        }

        $session = new Zend_Session_Namespace();
        $request = $this->getRequest();

        $id_post = $request->getParam('post');

        $model_faq = new Faq();
        $post = $model_faq->findByIdent($id_post);

        if ($post->author <> $USER->ident) {
            $session->messages->addMessage('No puedes eliminar ese recurso');
        } else {
            $post->delete();
            $session->messages->addMessage('Recurso eliminado');
        }
        $this->_redirect($CONFIG->wwwroot . 'faq');
    }
}
