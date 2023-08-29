<?php
    include_once __DIR__."/../src/controller/contactController.php";
    $controller = new ContactController();
    $contacts = $controller->getContactList();
?>