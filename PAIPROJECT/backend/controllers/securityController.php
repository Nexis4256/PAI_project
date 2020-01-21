<?php

require_once 'backend/controllers/appController.php';
require_once 'backend/repository/userRepository.php';


class securityController extends appController
{

    public function login()
    {
        if ($this->isPost())
        {
            $repository = new userRepository();
//            die();
            if($repository->get_user_from_login_page($_POST['login'],$_POST['password'])=='true')
            {
                header("Location: ?page=news");

                return;
            }

        }


        $this->render('login');
    }
    public function registration()
    {
        if($this->isPost())
        {
            $repository = new userRepository();
            $repository->add_user_to_database($_POST['email'],$_POST['password'],'user',$_POST['nickname']);
            $this->clear_request();
            $this->login();
        }

        $this->render('registration');
    }
    public function displayRegistration()
    {
        $this->render('registration');
    }

    public function displayLogin()
    {
        $this->render('login');
    }

    public function check_email_exist()
    {
        if ($this->isPost())
        {

            $repository = new userRepository();

            $result = $repository->email_is_empty($_POST['email']);
//            die($_POST['email']);
            http_response_code(200);
            echo json_encode($result);

        }
    }



}