<?php

    class Contact {

        // proprietes
        public $name;
        public $prenom;
        public $phone;
        public $email;

        function __construct($name, $prenom, $phone, $email)
        {
            $this->name = $name;
            $this->prenom = $prenom;
            $this->phone = $phone;
            $this->email = $email;
        }

        function setName($name) {
            $this->name = $name;
        }
    }
?>