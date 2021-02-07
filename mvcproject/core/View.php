<?php
    class View{
        function __construct(){    
            
        }

        public function render($name){
            require 'website/view/'.$name.'.php'; 
        }
    }
?>