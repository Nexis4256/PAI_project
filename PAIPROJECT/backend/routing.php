<?php

require_once 'backend/controllers/securityController.php';
require_once 'backend/controllers/newsController.php';
require_once 'backend/controllers/galleriesController.php';
require_once 'backend/controllers/statsController.php';
require_once 'backend/controllers/eventsController.php';
require_once 'backend/controllers/resultsController.php';
require_once 'backend/controllers/matchesController.php';
require_once 'backend/controllers/moderatorController.php';
require_once 'backend/controllers/adminController.php';
require_once 'backend/controllers/uploadController.php';


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
            ],
            'nicknameValidation'=>[
                'controller'=>'securityController',
                'action'=>'check_nickname_exist'
            ],
            'logout'=>[
                'controller'=>'securityController',
                    'action'=>'logout'
            ],
            'galleries'=>[
                'controller'=>'galleriesController',
                'action'=>'print_galleries_board'
            ],
            'events'=>[
                'controller'=>'eventsController',
                'action'=>'print_events_board'
            ],
            'results'=>[
                'controller'=>'resultsController',
                'action'=>'print_results_board'
            ],
            'stats'=>[
                'controller'=>'statsController',
                'action'=>'print_stats_board'
            ],
            'matches'=>[
                'controller'=>'matchesController',
                'action'=>'print_matches_board'
            ],
            'noAccess'=>[
                'controller'=>'securityController',
                'action'=>'logout_noaccess'
            ],
            'moderator_news'=>[
                'controller'=>'moderatorController',
                'action'=>'print_moderator_news_board'
            ],
            'moderator_events'=>[
                'controller'=>'moderatorController',
                'action'=>'print_moderator_events_board'
            ],
            'moderator_galleries'=>[
                'controller'=>'moderatorController',
                'action'=>'print_moderator_galleries_board'
            ],
            'moderator_panel'=>[
                'controller'=>'moderatorController',
                'action'=>'print_moderator_panel'
            ],
            'admin_panel'=>[
                'controller'=>'adminController',
                'action'=>'print_admin_panel'
            ],
            'add_news_post'=>[
                'controller'=>'moderatorController',
                    'action'=>'add_news_post'
            ],
            'displayNewsLongPost'=>[
                'controller'=>'newsController',
                'action'=>'print_news_long_board'
            ],
            'deleteNewsPost'=>[
                'controller'=>'moderatorController',
                'action'=>'delete_news_post'
            ],
            'gallery_image_swap_left'=>[
                'controller'=>'galleriesController',
                'action'=>'print_swap_left_image'
            ],
            'add_galleries_image'=>[
                'controller'=>'uploadController',
                'action'=>'upload_image'
            ],
            'getUsersByRole'=>[
                'controller'=>'adminController',
                'action'=>'get_all_users_by_role'
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