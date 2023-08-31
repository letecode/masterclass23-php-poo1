<?php

class Connexion {

    public $connexion;
    function __construct()
    {
        include __DIR__.'/constants.php';

        try {
            $this->connexion = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
        } catch (Exception $e) {
            die("Error".$e->getMessage());
        }
    }
}

?>