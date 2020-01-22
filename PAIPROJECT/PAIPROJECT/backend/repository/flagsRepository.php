<?php

require_once "backend/repository/repository.php";
require_once "backend/models/User.php";
require_once "backend/models/News.php";
require_once "backend/models/Flags.php";

class flagsRepository extends repository
{
    public function getFlagsAll() // :Array
    {
        $stmt = $this->database->connect()->prepare('
            SELECT country_flag_id,country_name,directory FROM country_flags;
        ');
        $stmt->execute();
        $this->database->disconnect();
        $flags = $stmt->fetchall(PDO::FETCH_ASSOC);


        $array = [];
        //        print_r($news);
        //        die();
        foreach ($flags as $flags_example)
        {
            array_push($array,new Flags($flags_example['country_flag_id'],$flags_example['country_name'],$flags_example['directory']));
        }

        if($array==NULL)
        {
            return false;
        }

        return $array;
    }


}