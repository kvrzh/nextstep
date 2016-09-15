<?php

/**
 * Created by PhpStorm.
 * User: Anton
 * Date: 07.09.2016
 * Time: 15:45
 */
class baseException extends Exception{
    function __construct($message = '', $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

}
class NotFoundException extends  baseException{
    function __construct()
    {
        parent::__construct('', 404);
    }
}