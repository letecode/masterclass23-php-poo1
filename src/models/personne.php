<?php

    class Person extends Animal {

        function __construct($name, $race, $cris)
        {
            parent::__construct($name, $race, $cris);
        }

        public function deplacer(){
            return "Marche";
        }
    }

?>