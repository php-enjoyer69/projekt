<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class MainViewCtrl {

    public function generateView()
    {
        App::getSmarty()->display('MainView.tpl');
    }

    public function action_MainView() {

        App::getSmarty()->display('MainView.tpl');
    }

}