<?php

require_once 'backend/controllers/appController.php';


class matchesController extends appController
{

    public function print_matches_board()
    {
        $this->render('matches');
    }

}