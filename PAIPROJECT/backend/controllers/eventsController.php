<?php

require_once 'backend/controllers/appController.php';


class eventsController extends appController
{

    public function print_events_board()
    {
        $this->render('events');
    }

}