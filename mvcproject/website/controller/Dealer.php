<?php
class Dealer extends Controller{
    function __construct(){
        parent::__construct();
        session_start();
        if($_SESSION['usertype']!="dealer"){
            session_destroy();
            header('location: '.URL.'Login/log'); 
            exit;
        }
    }

    function home(){
    	$this->view->render('Dealer/Dealer_home');
    }

    function category(){
    	$this->view->render('Dealer/itemCategory');
    }

    function history(){
    	$this->view->render('Dealer/orderHistory');
    }

    function momali(){
        $this->view->data=$this->model->getItems("Category='Momali'");
        $this->view->render('Dealer/momaliItems');
    }

    function ferroli(){
        $this->view->data=$this->model->getItems("Category='Ferroli'");
        $this->view->render('Dealer/ferroliItems');
    }

    function aquaflex(){
        $this->view->data=$this->model->getItems("Category='Aquaflex'");
        $this->view->render('Dealer/aquaflexItems');
    }

    function addCart(){
        $data = array();
        $data['amount'] = $_POST['quantity'];
        $data['ID'] = $_POST['var'];

        $this->model->cartItem($data);
        header('location: '.URL.'Dealer/momali');
    }

    function complaint(){
        $this->view->render('Dealer/complaint');
    }

    function profile(){
        $this->view->render('Dealer/profile');
    }

    function cart(){
        $this->view->data=$this->model->getCart();
        if($this->view->data!=0){
            foreach($this->view->data as $key=>$values){
                $this->view->data[$key]['details']=$this->model->getDetails($values["ID"]);
            }
        }else{
            
        }    
        $this->view->render('Dealer/cart');
    }

   
}
?>