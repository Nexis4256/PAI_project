<?php

require_once "backend/repository/repository.php";
require_once "backend/models/User.php";
require_once "backend/models/News.php";
require_once "backend/models/Flags.php";
require_once "backend/models/Images.php";
require_once "backend/models/Gallery.php";

class galleryRepository extends repository
{
    public function getGalleryAll()
    {
        $stmt=$this->database->connect()->prepare('
            SELECT gallery.gallery_id,gallery.gallery_name,gallery.gallery_dir FROM gallery'
        );

        $stmt->execute();
        $this->database->disconnect();
        $gallery = $stmt->fetchall(PDO::FETCH_ASSOC);
        $array = [];
        $array2=[];

        foreach($gallery as $gallery_example)
        {
            $stmt = $this->database->connect()->prepare('
            SELECT * FROM images WHERE images.gallery_id=:gallery_id;
        ');
            $stmt->bindParam(':gallery_id',$gallery_example['gallery_id'],PDO::PARAM_INT);
            $stmt->execute();
            $this->database->disconnect();
            $image = $stmt->fetchall(PDO::FETCH_ASSOC);
            $array = [];
            foreach ($image as $image_example)
            {
                array_push($array,new Images($image_example['images_id'],$image_example['gallery_id'],$image_example['image_name'],$image_example['image_dir']));
            }
            array_push($array2,new Gallery($gallery_example['gallery_id'],$gallery_example['gallery_name'],$array,$gallery_example['gallery_dir']));
            $array=NULL;
        }

//        print_r($array2);

        if ($array2 == NULL)
        {
            return false;
        }

        return $array2;

    }

    public function getGalleryDirByName($gallery_name)
    {
        $stmt=$this->database->connect()->prepare('
            SELECT gallery_dir FROM gallery WHERE gallery_name=:gallery_name
        ');

        $stmt->bindParam(':gallery_name',$gallery_name,PDO::PARAM_STR);
        $stmt->execute();
        $this->database->disconnect();

        $gallery_dir=$stmt->fetch(PDO::FETCH_ASSOC);

        return $gallery_dir['gallery_dir'];



    }

    public function getGalleryIdByName($gallery_name)
    {
        $stmt=$this->database->connect()->prepare('
            SELECT gallery_id FROM gallery WHERE gallery_name=:gallery_name
        ');

        $stmt->bindParam(':gallery_name',$gallery_name,PDO::PARAM_STR);
        $stmt->execute();
        $this->database->disconnect();

        $gallery_id=$stmt->fetch(PDO::FETCH_ASSOC);

        return $gallery_id['gallery_id'];

    }





}