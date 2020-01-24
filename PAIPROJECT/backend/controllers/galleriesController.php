<?php

require_once 'backend/controllers/appController.php';
require_once 'backend/repository/galleryRepository.php';
require_once 'backend/repository/imagesRepository.php';
require_once 'backend/models/Gallery.php';




class galleriesController extends appController
{

    public function print_galleries_board()
    {
        $galleryRepository=new galleryRepository();
        $gallery=$galleryRepository->getGalleryAll();

        $this->render('galleries',['gallery'=>$gallery]);
    }


    public function print_swap_left_image()
    {
        if($this->isPost())
        {
            $imageRepository=new imagesRepository();
            $image_id=$imageRepository->getImageId($_POST['gallery_id'],$_POST['actuall'],$_POST['swap_direction']);
            $image_dir=$imageRepository->getImageSourceById($image_id);


            header('Content-type: application/json');
            http_response_code(200);

            echo json_encode($image_dir);


        }
    }


}