<?php

require_once 'backend/controllers/appController.php';


class resultsController extends appController
{

    public function print_results_board()
    {
        $this->render('results');
    }

}