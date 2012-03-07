<?php

class Application_RouterMap
{
    public $routes = array (
        // frontpage module
        'frontpage'                 => array('',                           array('module' => 'frontpage', 'controller' => 'index',    'action' => 'index',)),
        // info module
        'info_linux'                => array('info/linux',                 array('module' => 'info',      'controller' => 'info',     'action' => 'linux',)),
        'info_debian'               => array('info/debian',                array('module' => 'info',      'controller' => 'info',     'action' => 'debian',)),
        // Register module
        'register'                  => array('register',                   array('module' => 'register',  'controller' => 'index',    'action' => 'index',)),
        // Login module
        'login_in'                  => array('login',                      array('module' => 'login',     'controller' => 'index',    'action' => 'in',)),
        'login_out'                 => array('logout',                     array('module' => 'login',     'controller' => 'index',    'action' => 'out',)),
        // Settings module
        'settings'                  => array('settings',                   array('module' => 'settings',  'controller' => 'index',    'action' => 'index',)),
        // Users module
        'user_info'                 => array('users/info',                 array('module' => 'users',     'controller' => 'user',     'action' => 'info')),
        // Instances module
        'instances_list'            => array('instances',                  array('module' => 'instances', 'controller' => 'index',    'action' => 'index')),
        'instances_add'             => array('instances/add',              array('module' => 'instances', 'controller' => 'instance', 'action' => 'add')),
        'instances_instance_delete' => array('instances/:instance/delete', array('module' => 'instances', 'controller' => 'instance', 'action' => 'delete')),
        // Posts module
        'faq_list'                  => array('faq',                          array('module' => 'faq',       'controller' => 'index',    'action' => 'index')),
        'faq_add'                   => array('faq/add',                      array('module' => 'faq',       'controller' => 'post',     'action' => 'add')),
        'faq_post_delete'           => array('faq/:post/delete',             array('module' => 'faq',       'controller' => 'post',     'action' => 'delete')),
        'faq_post_comment_add'      => array('faq/:post/comment/add',        array('module' => 'faq',       'controller' => 'comment',  'action' => 'add')),
        'faq_post_comment_delete'   => array('faq/:post/:comment/delete',    array('module' => 'faq',       'controller' => 'comment',  'action' => 'delete')),
    );
}
