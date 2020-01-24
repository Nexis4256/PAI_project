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

    public function print_news_long_board()
    {
//        die(print $_POST['news_id']);

        $this->render('newsLongPost', [
            'id'=>$_POST['news_id'],
            'nickname'=>$_POST['news_nickname'],
            'description'=>$_POST['news_short_post'],
            'post_directory'=>$_POST['news_file_dir'],
            'flag_directory'=>$_POST['news_country_flag_dir']
            ]);
    }



}