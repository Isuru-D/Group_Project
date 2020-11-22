<?php
class Dealer extends Controller{
    function __construct(){
        parent::__construct();
    }

    function index(){
    	$this->view->render('Dealer/itemCategory');
    }

    function category(){
    	$this->view->render('Dealer/itemCategory');
    }

    function history(){
    	$this->view->render('Dealer/orderHistory');
    }

    function momali(){
        $this->view->data=$this->model->getMomali();
        $this->view->render('Dealer/momaliItems');
    }

    function addCart(){
        $data = array();
        $data['amount'] = $_POST['quantity'];
        $data['ID'] = $_POST['var'];

        $this->model->cartItem($data);
        header('location: '.URL.'Dealer/momali');
    }
}
?>