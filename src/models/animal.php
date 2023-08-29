<?php

    class Animal {
        public $name;
        public $race;
        public $cris;

        function __construct(
            $name, $race, $cris
        ){
           $this->name = $name;
           $this->race = $race;
           $this->cris = $cris;
        }

        public function deplacer(){
            return "JE me deplace";
        }
    }

?>