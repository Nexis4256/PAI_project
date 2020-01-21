<?php

require_once "backend/repository/repository.php";
require_once "backend/models/user.php";

class userRepository extends repository
{

    public function get_user_from_login_page(string $email, string $password): ?bool
    {
        $stmt = $this->database->connect()->prepare('
            SELECT email FROM users WHERE email = :email and password=:password
        ');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->execute();
        $this->database->disconnect();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false)
        {
            return false;
        }
        return true;
    }

    public function add_user_to_database(string $email, string $password, string $role, string $nickname)
    {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO `users` (`user_id`, `role`, `nickname`, `email`, `password`) VALUES (NULL, :role, :nickname, :email, :password);
        ');
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
}