<?php

require_once 'backend/controllers/appController.php';


class newsController extends appController
{

    public function print_news_board()
    {
        $this->render('news');
    }

}