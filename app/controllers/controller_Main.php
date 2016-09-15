<?php

/**
 * Created by PhpStorm.
 * User: Anton
 * Date: 05.09.2016
 * Time: 12:08
 */
class controller_Main extends controller
{


    function action_index()
    {
        if(!isset($_SESSION['firsttime'])){
            $_SESSION['firsttime'] = true;
        }
        if(!isset($_SESSION['log_in'])){
            $_SESSION['log_in'] = false ;
        }
        $this->view->generate('main_view.php','template_view.php');
        $_SESSION['firsttime'] = false;
    }
    function action_play(){
        $this->view->generate('test_view.php','template_view.php');
    }
    function action_time(){
        $this->view->generate('time.php','template_view.php');
    }
}