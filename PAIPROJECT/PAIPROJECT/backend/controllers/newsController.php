<?php

require_once 'backend/controllers/appController.php';
require_once 'backend/repository/newsRepository.php';


class newsController extends appController
{

    public function print_news_board()
    {

        $repository = new newsRepository();
        $array=$repository->getNewsAll();
        $this->render('news',['news'=>$array]);
    }




}