<?php
class register extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function register(){
    	$this->view->render('register/register');
    }

    function registerfrm(){
        
        
            $name = $_POST['fullname'];
            $username = $_POST['username'];
            $email= $_POST['Email'];
            $address = $_POST['Address'];
            $tp = $_POST['tp'];
            $pass = password_hash ($_POST['pass'] , PASSWORD_DEFAULT);

            // $this->view->value = $this->model->namecheck();
            // print_r($this->model->namecheck());
            // foreach($this->view->value as $values){
            //     if($username==$values){
            //         $this->view->render('register/register');
            //         echo "<script>swal('Username Allready Exists', 'Enrer a valid user name', 'error');</script>";
            //     }
            // }

            if($this->model->registerDealer($name,$username,$email,$address,$tp,$pass)){
                $this->view->render('register/register');
                echo "<script>swal('Registration Successfull', '', 'success');</script>";
            }else{
                $this->view->render('register/register');
                echo "<script>swal('Registration Failed', '', 'error');</script>";
            }
        
    }
}

?>