<?php
class Se extends Controller{
    function __construct()
    {
        parent::__construct();
        session_start();
        if($_SESSION['usertype']!="sales_executive"){
            session_destroy();
            header('location: '.URL.'Login/log'); 
            exit;
        }
    }

    function home(){
    	$this->view->render('SE/SE_home');
    }

    function payment(){
    	$this->view->render('SE/collectPayment');
    }

    function complaint(){
    	$this->view->render('SE/complaints');
    }

    function dealer(){
    	$this->view->render('SE/dealerInfo');
    }

    function newOrder(){
    	$this->view->render('SE/newOrders');
    }

    function notEligible(){
    	$this->view->render('SE/notEligible');
    }

    function settings(){
    	$this->view->render('SE/profile');
    }
    
}
?>