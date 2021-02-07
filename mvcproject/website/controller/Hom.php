<?php
class Hom extends Controller{
    function __construct()
    {
        parent::__construct();
        session_start();
        if($_SESSION['usertype']!="hom"){
            session_destroy();
            header('location: '.URL.'Login/log'); 
            exit;
        }
    }

    function home(){
    	$this->view->render('HOM/HOM_home');
    }

    function dealers(){
    	$this->view->render('HOM/dealerDetails');
    }

    function latePayments(){
    	$this->view->render('HOM/latePayments');
    }

    function newOrders(){
    	$this->view->render('HOM/newOrders');
    }

    function settings(){
    	$this->view->render('HOM/profile');
    }

    
    
}
?>