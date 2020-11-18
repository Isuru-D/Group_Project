<?php
class ItemCategoryController extends Controller{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
    	$this->view->render('Dealer/itemCategory');
    }
}
?>