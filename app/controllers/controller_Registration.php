<?php
/**
 * Created by PhpStorm.
 * User: Anton
 * Date: 12.09.2016
 * Time: 9:38
 */
class controller_registration extends controller{
    function action_index()
    {
        if(isset($_POST['goreg'])){
            if(isset($_POST['login']) && isset($_POST['password']) && isset($_POST['repeatpass']) && isset($_POST['email'])){

                    if($_POST['repeatpass'] != $_POST['password']) {
                    $_SESSION['failregistration'] = 'Введеные пароли не совпадают';
                    }
                    $pdo = new db();
                    if($pdo->checkValue($_POST['login'],'login')){
                        $_SESSION['failregistration'] = 'Такой логин  уже занят';
                    }elseif($pdo->checkValue($_POST['email'],'email')){
                    $_SESSION['failregistration'] = 'Такой e-mail уже занят';
                }



            }
        }

       $this->view->generate('registration_view.php','template_view.php');
    }
}