<?php

require_once 'backend/controllers/appController.php';


class statsController extends appController
{

    public function print_stats_board()
    {
        $this->render('stats');
    }

}