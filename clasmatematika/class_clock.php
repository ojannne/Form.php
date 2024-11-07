<?php 
    class clock{
        // properties atau variable 
        public $name;
        public $merk;

        function set_name($name){
            $this->name = $name;
        }
        function set_merk($merk){
            $this->merk = $merk;
        }
        function get_name(){
            return $this->name;
        }
        function get_merk(){
            return $this->merk;
        }
}
?>