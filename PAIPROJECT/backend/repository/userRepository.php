<?php

require_once "backend/repository/repository.php";
require_once "backend/models/User.php";

class userRepository extends repository
{

    public function get_user_from_login_page(string $email, string $password)
    {
        $stmt = $this->database->connect()->prepare('
            SELECT email,nickname,user_id,role FROM users WHERE email = :email and password=:password
        ');
        $password=md5($password);
//        echo $password;
//        die();
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->execute();
        $this->database->disconnect();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user == NULL)
        {
            return false;
        }
        $nickname=$user['nickname'];
        $email=$user['email'];
        $id=$user['user_id'];
        $role=$user['role'];
        $user_example=new User($id,$email,$role,$nickname);
        return $user_example;
    }

    public function add_user_to_database(string $email, string $password, string $role, string $nickname)
    {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO `users` (`user_id`, `role`, `nickname`, `email`, `password`) VALUES (NULL, :role, :nickname, :email, :password);
        ');
//        echo $password;
//        die();

        $password=md5($password);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->bindParam(':nickname', $nickname, PDO::PARAM_STR);
        $stmt->bindParam(':role', $role, PDO::PARAM_STR);
        $stmt->execute();
        $this->database->disconnect();
        //        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function email_is_empty($email)
    {
        $stmt=$this->database->connect()->prepare('
        SELECT email FROM users where email=:email');

        $stmt->bindParam(':email',$email,PDO::PARAM_STR);
        $stmt->execute();
        $this->database->disconnect();
        $email=null;
        $email=$stmt->fetch(PDO::FETCH_ASSOC);

        if($email==null)
        {

            return "true";
        }

            return "false";
    }

    public function nickname_is_empty($nickname)
    {
        $stmt=$this->database->connect()->prepare('
        SELECT nickname FROM users where nickname=:nickname');

        $stmt->bindParam(':nickname',$nickname,PDO::PARAM_STR);
        $stmt->execute();
        $this->database->disconnect();
        $nickname=null;
        $nickname=$stmt->fetch(PDO::FETCH_ASSOC);

        if($nickname==null)
        {

            return "true";
        }

        return "false";
    }

    public function get_all_users_by_role($role)
    {
        $stmt=$this->database->connect()->prepare('
        SELECT users.user_id id, users.role, users.nickname, users.email FROM users WHERE role=:role');

        $stmt->bindParam(':role',$role,PDO::PARAM_STR);
        $stmt->execute();
        $this->database->disconnect();
        $users=null;
        $users=$stmt->fetchall(PDO::FETCH_ASSOC);

        if($users==null)
        {
            return false;
        }

        return $users;
    }

}