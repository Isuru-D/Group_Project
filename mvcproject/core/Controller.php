<?php
    class Controller{
        function __construct(){
            $this->view = new View();  
        }

        public function loadModel($name){ 
            $path = 'website/model/'.$name.'_Model.php';

            if(file_exists($path)){
                require 'website/model/'.$name.'_Model.php';  
                $modelName = $name.'_Model';
                $this->model = new $modelName();
            }
        }    
    }
?>