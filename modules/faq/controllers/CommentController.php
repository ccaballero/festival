<?php

class Faq_CommentController extends Application_Action
{
    public function addAction() {
        global $USER;

        if ($USER->ident == 0) {
            $this->_redirect($CONFIG->wwwroot);
        }

        $request = $this->getRequest();
        if ($request->isPost()) {
            $session = new Zend_Session_Namespace();

            $id = $request->getParam('post');
            $comment = $request->getParam('faq_post_comment');

            $model_faq_post = new Faq();
            $model_faq_post_comment = new Faq_Comments();

            $post = $model_faq_post->findByIdent($id);

            if (!empty($post)) {
                $post_comment = $model_faq_post_comment->createRow();
                $post_comment->post = $post->ident;
                $post_comment->author = $USER->ident;
                $post_comment->comment = $comment;
                $post_comment->tsregister = time();

                $post_comment->save();

                $mail = new Application_Helpers_Mail();
                $mail->mail('Comentario en el foro festivalero', "{$post->text}\n\n{$comment}", 'text');

                $session->messages->addMessage('Comentario añadido');
            }
        }

        $this->_redirect($CONFIG->wwwroot . 'faq');
    }

    public function deleteAction() {
        global $USER;

        if ($USER->ident == 0) {
            $this->_redirect($CONFIG->wwwroot);
        }

        $session = new Zend_Session_Namespace();
        $request = $this->getRequest();

        $id_post = $request->getParam('post');
        $id_comment = $request->getParam('comment');

        $model_faq_comments = new Faq_Comments();
        $comment = $model_faq_comments->findByIdent($id_comment);

        if ($comment->author <> $USER->ident) {
            $session->messages->addMessage('No puedes eliminar ese recurso');
        } else {
            $comment->delete();
            $session->messages->addMessage('Comentario eliminado');
        }
        $this->_redirect($CONFIG->wwwroot . 'faq');
    }
}
