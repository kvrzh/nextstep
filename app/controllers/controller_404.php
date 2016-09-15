<?php

/**
 * Created by PhpStorm.
 * User: Anton
 * Date: 05.09.2016
 * Time: 12:22
 */
class controller_404 extends controller
{
    function action_index()
    {
        $this->view->generate('404_view.php');
    }
}