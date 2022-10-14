<?php
    class Promotion{
        private $id;
        private $name;

        function setId($id){
            $this->id = $id;    
        }
        
        function setName($name){
            $this->name = $name;
        }

        function getId(){
            return $this->id;
        }

        function getName(){
            return $this->name;
        }
    }
?>