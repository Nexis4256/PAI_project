<?php

require_once 'backend/controllers/securityController.php';
require_once 'backend/controllers/newsController.php';


class Routing {
    private $routes = [];

    public function __construct()
    {
        $this->routes = [
            'login' => [
                'controller' => 'securityController',
                'action' => 'login'
            ],
            'news'=>[
                'controller'=>'newsController',
                    'action'=>'print_news_board'
            ],
            'registration'=>[
                'controller'=>'securityController',
                'action'=>'registration'
            ],
            'displayRegistration'=>[
                'controller'=>'securityController',
                'action'=>'displayRegistration'
            ],
            'displayLogin'=>[
                'controller'=>'securityController',
                'action'=>'displayLogin'
            ],
            'emailValidation'=>[
                'controller'=>'securityController',
                'action'=>'check_email_exist'
            ]
        ];
    }


    public function run()
        {

        $page = isset($_GET['page']) ? $_GET['page'] : 'login';

        if (isset($this->routes[$page])) {
            $controller = $this->routes[$page]['controller'];
            $action = $this->routes[$page]['action'];

            $object = new $controller;
            $object->$action();
        }
    }
}