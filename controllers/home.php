<?php

require_once 'controller.php';
class home extends controller
{
    public function index($param = ''){

        $user=$this->model('Name');
        $user->$param();

    }




}