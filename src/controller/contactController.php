<?php


    class ContactController {

        function __construct()
        {
            
        }
       
        public function getContactList(){
            include_once __DIR__. '/../contact.php';

           $contact = new Contact("Kilolo", "Michee", "0873763663", "email@email.com");

        //    $contact = [
        //     "name" => "Kilolo",
        //     "prenom" => "Michee",
        //     "phone" => "0873763663",
        //     "email" =>"email@email.com"];

            $contacts = [];

            for($i =0;$i < 20;$i++) {
                array_push($contacts, $contact);
            }

            return $contacts;
        }
    }
?>