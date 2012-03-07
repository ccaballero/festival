<?php

class Users_User extends Application_Model_Validation
{
    protected $_validationRules = array(
        'email' => array(
            'filters' => array('StringTrim', 'StringToLower'),
            'validators' => array(
                array(
                    'validator' => 'StringLength',
                    'options'   => array(0, 64),
                    'message'   => 'El correo electronico del usuario debe tener entre 0 y 64 caracteres',
                ),
                array(
                    'validator' => 'EmailAddress',
                    'options'   => array(),
                    'message'   => 'El correo electronico del usuario debe ser valido y existir',
                ),
                array(
                    'validator' => 'UniqueEmail',
                    'options'   => array('Users'),
                    'message'   => 'El correo electronico seleccionado para el usuario ya existe o no puede utilizarse',
                    'namespace' => 'Application_Validators',
                ),
            ),
        ),
        'fullname' => array(
            'filters' => array('StringTrim'),
            'validators' => array(
                array(
                    'validator' => 'StringLength',
                    'options'   => array(1, 128),
                    'message'   => 'El nombre completo debe tener entre 1 y 128 caracteres',
                ),
            ),
        ),
    );

    public function getAvatar() {
        global $CONFIG;

        if ($this->avatar) {
            return $CONFIG->wwwroot . 'media/users/' . $this->ident . '.jpg';
        } else {
            return $CONFIG->wwwroot . 'media/users/' . '0.jpg';
        }
    }
}
