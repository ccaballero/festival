<?php

class Register_IndexController extends Application_Action
{
    public function indexAction() {
        global $CONFIG;
        global $USER;

        if ($USER->ident != 0) {
            $this->_redirect($CONFIG->wwwroot);
        }

        $request = $this->getRequest();
        if ($request->isPost()) {
            $session = new Zend_Session_Namespace();

            $model_users = new Users();

            $fullname = $request->getParam('register_fullname');
            $email = $request->getParam('register_email');

            $password_generator = new Application_Helpers_Password();
            $password = $password_generator->password();

            $user = $model_users->createRow();
            $user->email = $email;
            $user->password = md5($CONFIG->key . $password);
            $user->fullname = $fullname;
            $user->tsregister = time();

            if ($user->isValid()) {
                $user->save();

                $view = new Zend_View();
                $view->setScriptPath($CONFIG->dirroot . 'modules/register/views/scripts/');
                $view->user = $user;
                $view->password = $password;
                $view->config = $CONFIG;

                $mail = new Application_Helpers_Mail();
                $mail->mail('Registro para el festival', $view->render('mail/register.php'), 'html', $user->email, $user->fullname);

                $session->messages->addMessage('Se envió un correo electronico con la contraseña de acceso');

                $this->_redirect($CONFIG->wwwroot . 'login');
            } else {
                foreach ($user->getMessages() as $message) {
                    $session->messages->addMessage($message);
                }
            }
        }

        $this->view->active = 'register';
    }
}
