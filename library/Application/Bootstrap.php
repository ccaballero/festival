<?php

// Basic elements
global $CONFIG;
global $USER;

// Database connector
global $DB;

class Application_Bootstrap
{
    public function initialize() {
        error_reporting(E_ALL | E_STRICT);
        ini_set('include_path', ini_get('include_path') . PATH_SEPARATOR . 'library' . PATH_SEPARATOR . 'modules');

        // PHP's settings for encoding
        mb_internal_encoding('UTF-8');
        mb_http_output('UTF-8');

        // Settings for classes autoloading
        require_once 'Zend/Loader/Autoloader.php';
        $loader = Zend_Loader_Autoloader::getInstance();
        $loader->registerNamespace('Zend_');
        $loader->registerNamespace('Application_');

        // Set of fundamental element
        global $CONFIG;
        $CONFIG = new Application_Config();

        $loader->pushAutoloader(new Application_Loader());

        // Initialization and recover of the session
        Zend_Session::start();
        $session = new Zend_Session_Namespace();

        // Set for debugging level
        ini_set('display_startup_errors', $CONFIG->startup_errors);
        ini_set('display_errors', $CONFIG->display_errors);

        // Set connector database
        global $DB;
        $DATABASE = new Application_Database();
        $DB = Zend_Db::factory(
            $DATABASE->type,
            array(
                'host'     => $DATABASE->hostname,
                'username' => $DATABASE->username,
                'password' => $DATABASE->password,
                'dbname'   => $DATABASE->database,
            )
        );

        // Set for user information, if exists
        global $USER;
        if (isset($session->user)) {
            $USER = $session->user;
        } else {
            $USER = new Users_Visitor();
        }

        // Set for localization
        setlocale(LC_CTYPE, $CONFIG->locale);
        Zend_Locale::setDefault($CONFIG->locale);

        // Setting logging system
        date_default_timezone_set($CONFIG->time_zone);

        // Set region for messages
        if (!isset($session->messages)) {
            $session->messages = new Application_Message();
        }
    }

    public function run() {
        global $CONFIG;
        global $TEMPLATE;

        $front = Zend_Controller_Front::getInstance();
        $front->throwExceptions(true)
              ->addModuleDirectory($CONFIG->dirroot . 'modules/')
              ->setDefaultModule('frontpage')
              ->returnResponse(true);

        // Routes join
        $mapping = new Application_RouterMap();
        $router = $front->getRouter();
        foreach ($mapping->routes as $key => $route) {
            $router->addRoute($key, new Zend_Controller_Router_Route($route[0], $route[1]));
        }

        // Change the suffix of phtml to php
        $renderer = new Zend_Controller_Action_Helper_ViewRenderer();
        $renderer->setViewSuffix('php');
        Zend_Controller_Action_HelperBroker::addHelper($renderer);

        $layoutoptions = array(
            'layout'     => 'default',
            'layoutPath' => $CONFIG->dirroot . 'templates/',
            'viewSuffix' => 'php',
        );

        include_once $CONFIG->dirroot . 'library/Application/Action.php';
        Zend_Layout::startMvc($layoutoptions);

        try {
            $response = $front->dispatch();
            $response->sendResponse();
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
    }
}
