<?php 

namespace App;

use Model\Membre;

session_start();
 
abstract class Session {


    public static function getUser(){
        if(isset($_SESSION['membre']) && $_SESSION['membre'] !== null){
            return $_SESSION['membre'];
        }
        return false;

    }

    public static function setUser($membre){
        $_SESSION['membre'] = $membre;
    }

    public static function removeUser(){
        if(self::getUser()){
            unset($_SESSION['membre']);
        }
        return;
    }









}