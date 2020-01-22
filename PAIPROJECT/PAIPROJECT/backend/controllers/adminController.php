<?php

require_once 'backend/controllers/appController.php';


class adminController extends appController
{

    public function print_admin_panel()
    {
        $this->render('admin_panel');
    }

}