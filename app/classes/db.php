<?php

/**
 * Created by PhpStorm.
 * User: Anton
 * Date: 12.09.2016
 * Time: 13:50
 */
class db
{
    private $pdo;

    function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=playon' , 'admin', '1111' );
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->exec('SET NAMES "utf8"');
    }
    public function getPdo()
    {
        return $this->pdo;
    }
    public function checkValue($item,$value){
        $sql = "SELECT $value FROM users";
        try{
            $result = $this->pdo->query($sql);

            foreach($result as $one){
                if($one[$value] == $item){

                    return true;
                    break;
                }


            }

        } catch (PDOException $e){
            echo $e;

        }
        return false;
    }
}