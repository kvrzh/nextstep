<?php

/**
 * Created by PhpStorm.
 * User: Anton
 * Date: 05.09.2016
 * Time: 11:59
 */
class controller
{
    public $model;
    public $view;

    function __construct()
    {
        $this->view = new view();
    }
    function action_index(){

    }
}