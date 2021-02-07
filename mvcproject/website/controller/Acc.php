<?php
class Acc extends Controller{
    function __construct(){
        parent::__construct();
        session_start();
        if($_SESSION['usertype']!="accountant"){
            session_destroy();
            header('location: '.URL.'Login/log'); 
            exit;
        }
    }

    function home(){
    	$this->view->render('Acc/Acc_home');
    }

    function report(){
    	$this->view->render('Acc/reportGeneration');
    }

    function history(){
        $this->view->render('Acc/paymentHistory');
    }

    function collection(){
        $this->view->render('Acc/SEcollection');
    }

    function settings(){
        $this->view->render('Acc/profile');
    }
}