<?php
class SC extends Controller{
    function __construct(){
        parent::__construct();
        session_start();
        if($_SESSION['usertype']!="sales_co"){
            session_destroy();
            header('location: '.URL.'Login/log'); 
            exit;
        }
    }

    function home(){
    	$this->view->render('SC/SC_home');
    }

    function priceList(){
        if(isset($_POST['momali'])){
            $this->view->data=$this->model->getPrice("Category='Momali'");
            $this->view->render('SC/priceList');

        }else if(isset($_POST['ferroli'])){
            $this->view->data=$this->model->getPrice("Category='Ferroli'");
            $this->view->render('SC/priceList');

        }else if(isset($_POST['aquaflex'])){
            $this->view->data=$this->model->getPrice("Category='Aquaflex'");
            $this->view->render('SC/priceList');

        }else{
            $this->view->data=$this->model->getPrice("Category='Momali'");
            $this->view->render('SC/priceList');
        }
    }

    function itemDetails(){
        if(isset($_POST['searchP'])){
            $id=$_POST['id'];
            $this->view->detail=$this->model->searchID(array('ItemID','ItemName','Price', 'Category'), $id);
            if($this->view->detail!=0){
                $category=$this->view->detail[0]['Category'];
                $this->view->data=$this->model->getPrice("Category='$category'");
                $this->view->render('SC/priceList');
            }else{
                header('location: '.URL.'SC/priceList?alert=invalid');
            }    
        }

        if(isset($_POST['searchQ'])){
            $id=$_POST['id'];
            $this->view->detail=$this->model->searchID(array('ItemID','ItemName','Quantity', 'Category'), $id);
            if($this->view->detail!=0){
                $category=$this->view->detail[0]['Category'];
                $this->view->data=$this->model->getStock("Category='$category'");
                $this->view->render('SC/stock');
            }else{
                header('location: '.URL.'SC/stock?alert=invalid');
            }    
        }
    }

    function formAction(){
        $data = array();
        $data['Price'] = $_POST['price'];
        $data['ItemID'] = $_POST['id'];

        $result=$this->model->updatePrice($data);
        if($result=='true'){
            header('location: '.URL.'SC/priceList?alert=success');   
        }else{
            header('location: '.URL.'SC/priceList?alert=fail');   
        }
           
    }   

    function orders(){
        $this->view->render('SC/newOrders');
    }

    function stock(){
        if(isset($_POST['momali'])){
            $this->view->data=$this->model->getStock("Category='Momali'");
            $this->view->render('SC/stock');

        }else if(isset($_POST['ferroli'])){
            $this->view->data=$this->model->getStock("Category='Ferroli'");
            $this->view->render('SC/stock');

        }else if(isset($_POST['aquaflex'])){
            $this->view->data=$this->model->getStock("Category='Aquaflex'");
            $this->view->render('SC/stock');

        }else{
            $this->view->data=$this->model->getStock("Category='Momali'");
            $this->view->render('SC/stock');
        }
    }

    function complaint(){
        $this->view->render('SC/complaints');
    }

    function notify(){
        $this->view->render('SC/notifyDealers');
    }

    function profile(){
        $this->view->render('SC/profile');
    }
}
?>

    <!-- function priceList(){
        $this->view->data=$this->model->getPrice();
        $this->view->render('SC/priceList');
    }
    function getPrice(){
        if(isset($_POST['momali'])){
            $this->view->data=$this->model->getPrice();
            $this->view->render('SC/priceList');
        }

        if(isset($_POST['ferroli'])){
            $this->view->data=$this->model->getPrice1();
            $this->view->render('SC/priceList');
        }

        // header('location: '.URL.'SC/priceList'); not worked
    } -->

    <!-- $this->view->alert="Update success"; -->

    <!-- $this->view->alert="<script>alert('updated')</script>"; -->

    <!-- <?php 
        if(isset($this->alert)){
            echo $this->alert;
        }
    ?> -->