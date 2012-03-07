<?php

class Settings_IndexController extends Application_Action
{
    public function indexAction() {
        global $CONFIG;
        global $USER;

        if ($USER->ident == 0) {
            $this->_redirect($CONFIG->wwwroot);
        }

        $request = $this->getRequest();
        if ($request->isPost()) {
            $session = new Zend_Session_Namespace();
            $model_users = new Users();

            $fullname = $request->getParam('settings_fullname');
            $email = $request->getParam('settings_email');
            $password = $request->getParam('settings_password');
            $password_confirm = $request->getParam('settings_password_confirm');

            $user = $model_users->findByIdent($USER->ident);

            $user->fullname = $fullname;
            $user->email = $email;

            if (!empty($password) || !empty($password_confirm)) {
                if ($password === $password_confirm) {
                    $user->password = md5($CONFIG->key . $password);
                } else {
                    $session->messages->addMessage('Las contraseñas no son iguales');
                    $this->_redirect($CONFIG->wwwroot . 'settings');
                }
            }

            if ($user->isValid()) {
                $upload = new Zend_File_Transfer_Adapter_Http();
                $upload->setDestination($CONFIG->dirroot . 'media/upload');
                $upload->addValidator('Size', false, 2097152)
                       ->addValidator('Extension', false, array('jpg', 'png', 'gif'));
                if ($upload->receive()) {
                    $filename = $upload->getFileName('settings_photo');
                    $extension = strtolower(substr($filename, -3));
                    switch ($extension) {
                        case 'jpg':
                            $uploaded = imagecreatefromjpeg($filename);
                            break;
                        case 'png':
                            $uploaded = imagecreatefrompng($filename);
                            break;
                        case 'gif':
                            $uploaded = imagecreatefromgif($filename);
                            break;
                    }

                    $width = imagesx($uploaded);
                    $height = imagesy($uploaded);

                    // creo y redimensiono la imagen grande
                    $maxwidth = 64;
                    $maxheight = 64;
                    $newwidth = $maxwidth;
                    $newheight = $maxheight;

                    $ratio = $width / $height;
                    if ($ratio == 1) {
                        $newwidth = $maxwidth;
                        $newheigth = $maxwidth;
                    } else if ($ratio > 1) {
                        $newwidth = $maxwidth;
                        $newheight = $maxwidth / $ratio;
                    } else if ($ratio < 1) {
                        $newwidth = $maxheight * $ratio;
                        $newheight = $maxheight;
                    }

                    $thumb = imagecreatetruecolor($newwidth, $newheight);
                    imagecopyresized($thumb, $uploaded, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
                    imagejpeg($thumb, $CONFIG->dirroot . 'media/users/' . $user->ident . '.jpg', 100);

                    unlink($filename);
                    $user->avatar = true;
                }

                $user->save();
                $session->user = $user;
                $session->messages->addMessage('Preferencias guardadas');
            } else {
                foreach ($user->getMessages() as $message) {
                    $session->messages->addMessage($message);
                }
            }
        }

        $this->view->active = 'settings';
        $this->view->user = $USER;
    }
}
