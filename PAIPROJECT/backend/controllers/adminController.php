<?php

require_once 'backend/controllers/appController.php';
require_once 'backend/repository/userRepository.php';



class adminController extends appController
{

    public function print_admin_panel()
    {
        $this->render('admin_panel');
    }

    public function get_all_users_by_role()
    {
        $user_repository=new userRepository();
        header('Content-type: application/json');
        http_response_code(200);
//        echo $_POST['role'];
//        die();

        $users=$user_repository->get_all_users_by_role($_POST['role']);
//        print_r($users);
//        die();

        echo json_encode($users);
    }

}