<?php

/**
 * Created by PhpStorm.
 * User: Anton
 * Date: 05.09.2016
 * Time: 12:00
 */
class view
{
    function generate($content_view, $template_view = template, $data = null){

        include 'app/views/'.$template_view;

    }
}