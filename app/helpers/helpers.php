<?php
/**
 * Created by PhpStorm.
 * User: Anton
 * Date: 07.09.2016
 * Time: 11:48
 */
function headerlog()
{
    if (isset($_SESSION['log_in'])) {
        if ($_SESSION['log_in'] && isset($_SESSION['login'])) {
            $loginheader = '<span> Вы вошли как <b>' . $_SESSION['login'] . '</b></span>';
        } else {
            $loginheader = '<a href="/login">Вход</a>
		<a href="/registration" style="background:#34495e; " onmouseover="this.style.backgroundColor=\'#22303e\';" onmouseout="this.style.backgroundColor=\'#34495e\';" >Регистрация</a>';
        }
        return $loginheader;
    }
}
