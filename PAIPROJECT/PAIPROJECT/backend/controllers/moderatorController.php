<?php

require_once 'backend/controllers/appController.php';
require_once 'backend/repository/newsRepository.php';
require_once 'backend/repository/flagsRepository.php';


class   moderatorController extends appController
{

    public function print_moderator_news_board()
    {
        $repository = new newsRepository();
        $array=$repository->getNewsAll();
        $flags_repository=new flagsRepository();
        $flags_array=$flags_repository->getFlagsAll();
        $this->render('moderator_news',['news'=>$array,'flags'=>$flags_array]);
    }

    public function print_moderator_events_board()
    {
        $this->render('moderator_events');
    }

    public function print_moderator_galleries_board()
    {
        $this->render('moderator_news');
    }

    public function print_moderator_panel()
    {
        $this->render('moderator_panel');
    }

    public function add_news_post()
    {
        if($this->isPost())
        {
//            die(dirname(__DIR__));
            $repository=new newsRepository();
//            $name="../";
//            $name.="sources/news/".=$_POST['news_short_post'].=date("M.d.Y-h-:i:s").=".php";
            $name="C:/XAMPP/htdocs/PAIPROJECT/sources/news/";
            //$name.=$_POST['news_short_post'];

            $name.=$_SESSION['id'];

            $name.=date("M_d_Y_h_i_s");
            $name.=".php";

            $myfile=fopen($name,"w") or die("Unable to open file!");
            fwrite($myfile,$_POST['news_long_post']);
            fclose($myfile);


            $repository->add_news_post_to_database($_POST['country'],$_POST['news_short_post'],$name);



        }
        $this->print_moderator_news_board();
    }


}