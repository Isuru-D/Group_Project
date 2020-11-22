<?php
    class Brandweb{
        private $_url = null;
        private $_controller = null;

        function __construct(){
            $this->_getUrl(); 
            if(empty($this->_url[0])){
                $this->_loadDefaultController();
                return false;
            }
            $this->_loadExistingController();
            $this->_callControllerMethod(); 
        }

        private function _getUrl(){
            $url = isset($_GET['url'])?$_GET['url']:null;
            $url = rtrim($url,'/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $this->_url = explode('/', $url);
        }

        private function _loadDefaultController(){
            require 'website/controller/Home.php';
            $this->_controller = new HomeController();
            $this->_controller->index();
        }

        private function _loadExistingController(){
            $file = 'website/controller/'.$this->_url[0].'.php';
            if(file_exists($file)){
                require $file;
                $this->_controller = new $this->_url[0];
                $this->_controller->loadModel($this->_url[0]);
            } else{
                echo 'Opzz! Requested page does not exist.';
                return false;
            }  
        }

        private function _callControllerMethod(){
            $length = count($this->_url);

            if($length>1){
                if(!method_exists($this->_controller, $this->_url[1])){
                    //echo 'Opzz! Requested method does not exist.';
                    return false;
                }

                switch ($length){
                    case 5:
                        $this->_controller->{$this->_url[1]}($this->_url[2],$this->_url[3],$this->_url[4]);
                        break;
                    case 4:
                        $this->_controller->{$this->_url[1]}($this->_url[2],$this->_url[3]);
                        break;
                    case 3:
                        $this->_controller->{$this->_url[1]}($this->_url[2]);
                        break;
                    case 2:
                        $this->_controller->{$this->_url[1]}();
                        break;
                }
            }
            // else{
            //     $this->_controller->index();
            // }
        }
    }
?>