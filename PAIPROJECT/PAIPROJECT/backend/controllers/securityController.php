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
            $loaded_user=$repository->get_user_from_login_page($_POST['login'],$_POST['password']);
//            if($repository->get_user_from_login_page($_POST['login'],$_POST['password']) instanceof User)
            if($loaded_user instanceof User)
            {
                $_SESSION["id"] = $loaded_user->getId();
                $_SESSION["nickname"] = $loaded_user->getNickname();
                $_SESSION["email"] = $loaded_user->getEmail();
                $_SESSION["role"]= $loaded_user->getRole();
                header("Location: ?page=news");
                return;
            }

        }


        $this->render('login',['messages'=>[]]);
    }

    public function logout()
    {
        $_SESSION = array();
        session_destroy();
        $this->render('login',["messages"=>["Logout: Successful"]]);
    }

    public function logout_noaccess()
    {
        $this->render('login',["messages"=>["Logout: No access to this area"]]);
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
        $this->render('login',['messages'=>[]]);
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

    public function check_nickname_exist()
    {
        if ($this->isPost())
        {

            $repository = new userRepository();

            $result = $repository->nickname_is_empty($_POST['nickname']);
            //            die($_POST['email']);
            http_response_code(200);
            echo json_encode($result);

        }
    }




}