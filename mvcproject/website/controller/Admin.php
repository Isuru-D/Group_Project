<?php
class Admin extends Controller{
    function __construct(){
        parent::__construct();
        session_start();
        if($_SESSION['usertype']!="admin"){
            session_destroy();
            header('location: '.URL.'Login/log'); 
            exit;
        }
    }

    function home(){
      	$this->view->render('Admin/Admin_home');
    }

    function employees(){
    	$this->view->render('Admin/manageEmployees');
    }

    function pendingDealers(){
    	$this->view->render('Admin/pendingDealers');
    }

    function report(){
    	$this->view->render('Admin/reportGeneration');
    }

    function settings(){
    	$this->view->render('Admin/profile');
    }

    function manageDealers(){
        $this->view->data=$this->model->getDealer();
    	$this->view->render('Admin/ManageDealers');
    }

    function formAction(){
        if(isset($_POST['search'])){
            $id=$_POST['id'];
            $this->view->detail=$this->model->searchID($id);
            // $this->view->data=$this->model->getDealer();
            // $this->view->render('Admin/ManageDealers');

            if($this->view->detail!=0){
                $this->view->data=$this->model->getDealer();
                $this->view->render('Admin/ManageDealers');
            }else{
                header('location: '.URL.'Admin/ManageDealers?alert=invalid');
            }    
        }

        if(isset($_POST['update'])){
            $data = array();
            $data['id'] = $_POST['id'];
            $data['f_name'] = $_POST['name'];
            $data['address'] = $_POST['add'];
            $data['contact'] = $_POST['tp'];
            $data['email'] = $_POST['mail'];

            // $result = $this->model->updateDealer($data);
            if($this->model->updateDealer($data)){
                header('location: '.URL.'Admin/ManageDealers?alert=success');   
            }else{
                header('location: '.URL.'Admin/ManageDealers?alert=fail');   
            }
       }  
        
        if(isset($_POST['delete'])){
            $id=$_POST['id'];
            $result = $this->model->deleteDealer($id);
            if($result=='true'){
                header('location: '.URL.'Admin/ManageDealers?alert=deletesuccess');   
            }else{
                header('location: '.URL.'Admin/ManageDealers?alert=fail');   
            }
            $this->view->data=$this->model->getDealer();
            $this->view->render('Admin/ManageDealers');
        }
    }   
}
 

