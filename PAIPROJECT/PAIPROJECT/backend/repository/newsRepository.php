<?php

require_once "backend/repository/repository.php";
require_once "backend/models/User.php";
require_once "backend/models/News.php";

class newsRepository extends repository
{
    public function getNewsAll() // :Array
    {
        $stmt = $this->database->connect()->prepare('
             SELECT users.nickname,news.news_id,country_flags.directory,news.news_short_post,news.news_file_dir
             FROM news 
             INNER JOIN users ON users.user_id=news.user_id
             INNER JOIN country_flags ON country_flags.country_flag_id=news.country_flag_id;
        ');
        $stmt->execute();
        $this->database->disconnect();
        $news = $stmt->fetchall(PDO::FETCH_ASSOC);

        $array = [];
//        print_r($news);
//        die();
        foreach ($news as $news_example)
        {
            array_push($array,new News($news_example['news_id'], $news_example['nickname'], $news_example['news_short_post'], $news_example['directory'], $news_example['news_file_dir']));
        }

        if ($array == NULL)
        {
            return false;
        }

//            print_r($array);
//            die();
        return $array;

    }

    //            INSERT INTO `users` (`user_id`, `role`, `nickname`, `email`, `password`) VALUES (NULL, :role, :nickname, :email, :password);

    public function add_news_post_to_database(string $country_name,string $news_short_post,string $directory)
    {
        $stmt = $this->database->connect()->prepare('
                INSERT INTO `news` (`news_id`, `user_id`, `news_short_post`,`country_flag_id`, `news_file_dir`) 
                VALUES (NULL,:user_id,:news_short_post,(SELECT country_flags.country_flag_id FROM country_flags WHERE country_flags.country_name=:country_name),:news_file_dir);
        ');
        $stmt->bindParam(':user_id', $_SESSION['id'], PDO::PARAM_STR);
        $stmt->bindParam(':news_short_post', $news_short_post, PDO::PARAM_STR);
        $stmt->bindParam(':news_file_dir', $directory, PDO::PARAM_STR);
        $stmt->bindParam(':country_name', $country_name, PDO::PARAM_STR);

        $stmt->execute();
        $this->database->disconnect();

    }


}