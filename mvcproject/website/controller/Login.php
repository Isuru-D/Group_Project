<?php
class Login extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function log(){
    	$this->view->render('Login/login');
    }

    function check(){
        if(isset($_POST['login'])){
            $data = array();
            $data['username'] = $_POST['username'];
            $data['password'] = $_POST['password'];
            $this->view->data = $this->model->check($data);   
            if($this->view->data==0){
                $this->view->render('Login/login');
                echo "<script>swal('Incorrect User name or Password!', 'Please check the user name and password again!!!!', 'error');</script>";  
            }   
            }
        }
    function logout(){
        	Session::destroy();
        	header('location: ../');
        	exit;
    }
}
?>