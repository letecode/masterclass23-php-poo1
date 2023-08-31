<?php

    if(isset($_POST["name"]) and
        isset($_POST["prenom"]) and
        isset($_POST["phone"]) and
        isset($_POST["email"])
    ) {
        include __DIR__.'/../controller/contactController.php';

        $controller = new ContactController();
        $created = $controller->createContact($_POST["name"], $_POST["prenom"], $_POST["phone"], $_POST["email"]);

        if($created) {
            header('location: ../../index.php');
        } else {
            header('location: ../../create.php');
        }
    } else {

    }

?>