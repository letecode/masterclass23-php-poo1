<?php


    class ContactController {

        // function __construct()
        // {
            
        // }
       
        public function getContactList(){
            include_once __DIR__. '/../contact.php';
            include_once __DIR__. '/../models/personne.php';

           $contact = new Contact("Kilolo", "Michee", "0873763663", "email@email.com");

           $personne = new Person("Jean", "Humaine", "Parler");
           $personne->deplacer();

            $contacts = [];

            for($i =0;$i < 20;$i++) {
                array_push($contacts, $contact);
            }

            return $contacts;
        }
    }
?>