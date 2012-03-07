<?php

class Application_Helpers_Mail
{
    public function mail($subject, $body, $type = 'text', $recipient_email = 'scesi.reloaded@gmail.com', $recipient_name = 'Scesi') {
        // Send mail of confirmation and password details
        global $CONFIG;

        $transport = new Zend_Mail_Transport_Smtp($CONFIG->smtp_server, array(
            'username' => $CONFIG->smtp_username,
            'password' => $CONFIG->smtp_password,
            'ssl' => $CONFIG->smtp_ssl,
            'port' => $CONFIG->smtp_port,
            'auth' => $CONFIG->smtp_auth,
        ));
        Zend_Mail::setDefaultTransport($transport);

        $mail = new Zend_Mail('UTF-8');
        $mail->addTo($recipient_email, $recipient_name)
             ->setSubject($subject);

        if ($type == 'text') {
            $mail->setBodyText($body);
        } else if ($type == 'html') {
            $mail->setBodyHtml($body);
        }

        $mail->send($transport);
    }
}
