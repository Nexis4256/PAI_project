<?php

require_once 'backend/controllers/appController.php';
require_once 'backend/repository/galleryRepository.php';
require_once 'backend/repository/imagesRepository.php';


class uploadController extends appController
{
    public function upload_image()
    {
        if($this->isPost())
        {
            $gallery_repository=new galleryRepository();
            $gallery_dir=$gallery_repository->getGalleryDirByName($_POST['gallery_name']);
            $gallery_id=$gallery_repository->getGalleryIdByName($_POST['gallery_name']);
            $name1=basename($_FILES['uploaded_file']['name']);



            $path=$gallery_dir . '/' . $_POST['wished_file_name'] . '.png';
            $is_file_ok=NULL;

            if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path))
            {
                $is_file_ok=1;
            }
            else
            {
                $is_file_ok=0;
            }

            $images_repository=new imagesRepository();
            $images_repository->add_image_to_database($gallery_id,$_POST['wished_file_name'],$path);
            header("Location: ?page=moderator_galleries");
//            $gallery=$gallery_repository->getGalleryAll();
//            $this->render('moderator_galleries',['gallery'=>$gallery]);

        }
    }

}