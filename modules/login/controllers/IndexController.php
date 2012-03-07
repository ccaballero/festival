<?php

class Login_IndexController extends Application_Action
{
    public function inAction() {
        global $CONFIG;
        global $USER;

        if ($USER->ident != 0) {
            $this->_redirect($CONFIG->wwwroot);
        }

        $request = $this->getRequest();
        if ($request->isPost()) {
            $session = new Zend_Session_Namespace();

            $model_users = new Users();

            $email = $request->getParam('login_email');
            $password = $request->getParam('login_password');

            $user = $model_users->findByEmailAndPassword($email, md5($CONFIG->key . $password));
            if (!empty($user)) {
                $session->user = $user;
                $this->_redirect($CONFIG->wwwroot);
            } else {
                $session->messages->addMessage('Datos incorrectos');
            }
        }

        $this->view->active = 'login';
    }

    public function outAction() {
        global $CONFIG;
        global $USER;

        $session = new Zend_Session_Namespace();
        $user = $session->user;
        if (!empty($user)) {
            $session->user = null;
        }

        $session->messages->addMessage('Usted salió del sistema');

        $this->_redirect($CONFIG->wwwroot);
    }
}
