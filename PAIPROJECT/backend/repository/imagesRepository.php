<?php

require_once "backend/repository/repository.php";
require_once "backend/models/User.php";
require_once "backend/models/News.php";
require_once "backend/models/Flags.php";
require_once "backend/models/Images.php";

class imagesRepository extends repository
{
    public function getImagesAll() // :Array
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM images;
        ');
        $stmt->execute();
        $this->database->disconnect();
        $image = $stmt->fetchall(PDO::FETCH_ASSOC);


        $array = [];
        //        print_r($news);
        //        die();
        foreach ($image as $image_example)
        {
            array_push($array,new Images($image_example['images_id'],$image_example['gallery_id'],$image_example['image_name'],$image_example['image_dir']));
        }

        if($array==NULL)
        {
            return false;
        }

        return $array;
    }

    public function getImageId($gallery_id,$actuall,$swap_direction)
    {
        $stmt=$this->database->connect()->prepare('
            SELECT images_id FROM images WHERE gallery_id=:gallery_id 
            
            ');

        $stmt->bindParam(':gallery_id',$gallery_id,PDO::PARAM_INT);
        $stmt->execute();
        $this->database->disconnect();
        $image = $stmt->fetchall(PDO::FETCH_ASSOC);
//        print_r($image);
        $i=0;
        $image_id=NULL;
        $amount=count($image)-1;

        if(($swap_direction==='left') && ($actuall!=0))
        {
            $actuall--;
//            echo $actuall;
//            die();
        }
        else
        {
            if(($amount !=$actuall) && ($swap_direction==='right') )
            {
                $actuall++;
            }
        }

        foreach($image as $image_example)
        {
            if($i==$actuall)
            {
                $image_id=$image_example;
                break;
            }
            $i++;
        }
        $image_id_2=$image_id['images_id'];
//        print($image_id);
//        print_r($image_id_2);
//        die();

        if($image_id_2==NULL)
        {
            return false;
        }

        return $image_id_2;



    }

    public function getImageSourceById($image_id)
    {
        $stmt=$this->database->connect()->prepare('
            SELECT image_dir FROM images WHERE images_id=:image_id 
            
            ');

        $stmt->bindParam(':image_id',$image_id,PDO::PARAM_INT);
        $stmt->execute();
        $this->database->disconnect();
        $image = $stmt->fetchall();
//        print_r($image);
        $dupa=$image[0];

        return $dupa[0];

    }

    public function add_image_to_database($gallery_id,$image_name,$image_dir)
    {
        $stmt=$this->database->connect()->prepare('
            INSERT INTO `images` (`images_id`, `gallery_id`, `image_name`, `image_dir`) 
            VALUES (NULL,:gallery_id,:image_name,:image_dir);        
        ');

        $stmt->bindParam(':gallery_id',$gallery_id,PDO::PARAM_INT);
        $stmt->bindParam(':image_name',$image_name,PDO::PARAM_STR);
        $stmt->bindParam(':image_dir',$image_dir,PDO::PARAM_STR);

        $stmt->execute();
        $this->database->disconnect();

    }


}