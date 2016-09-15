<?php
/**
 * Created by PhpStorm.
 * User: Anton
 * Date: 07.09.2016
 * Time: 18:14
 */
class controller_rules extends controller{
    function action_index()
    {
        $this->view->generate('rules_view.php','template_view.php');
    }
}