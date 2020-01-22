<?php

require_once 'backend/controllers/appController.php';


class galleriesController extends appController
{

    public function print_galleries_board()
    {
        $this->render('galleries');
    }

}