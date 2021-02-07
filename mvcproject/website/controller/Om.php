<?php
class Om extends Controller{
    function __construct()
    {
        parent::__construct();
        session_start();
        if($_SESSION['usertype']!="op_manager"){
            session_destroy();
            header('location: '.URL.'Login/log'); 
            exit;
        }
    }

    function home(){
    	$this->view->render('OM/OM_home');
    }

    function orders(){
    	$this->view->render('OM/approvedOrders');
    }

    function settings(){
    	$this->view->render('OM/profile');
    }

    function invoice(){
    	$this->view->render('OM/issueInvoice');
    }

    function report(){
    	$this->view->render('OM/reportGeneration');
    }

    function stockMomali(){
        $this->view->data=$this->model->getMomali();
    	$this->view->render('OM/stockMomali');
    }
    
    function stockFerroli(){
        $this->view->data=$this->model->getFerroli();
    	$this->view->render('OM/stockFerroli');
    }

    function stockAqua(){
        $this->view->data=$this->model->getAqua();
    	$this->view->render('OM/stockAquaflex');
    }

    function sparePartMomali(){
        $this->view->data=$this->model->getSMomali();
    	$this->view->render('OM/sparePartStock');
    }

    function sparePartFerroli(){
        $this->view->data=$this->model->getSFerroli();
    	$this->view->render('OM/sparePartStock1');
    }

    function sparePartAqua(){
        $this->view->data=$this->model->getSAqua();
    	$this->view->render('OM/sparePartStock2');
    }

    function operationMomali(){
		
		if(isset($_POST['add']))
		{
            
            $id= $_POST['id'];
            $name=$_POST['name'];
            $quantity=$_POST['quantity'];
            $price=$_POST['price'];
            $photoTmpPath=$_FILES['image']['tmp_name'];
            $data = file_get_contents($photoTmpPath);
            $img = 'data:image/' . $_FILES['image']['type'] . ';base64,' . base64_encode($data);
            
            if($this->model->insert($id,$name,$quantity,$price,$img,'item','Momali')){
                $this->view->data=$this->model->getMomali();
                //$this->view->alert="<script> $(window).ready(addSuccess()); </script>";
                //$this->view->render('OM/stockMomali');
                header('location: '.URL.'OM/stockMomali?alert=success');
            }else{
                $this->view->data=$this->model->getMomali();
                //$this->view->alert="<script> alert(' ADDING FAILED')</script>";
                //$this->view->render('OM/stockMomali');
                header('location: '.URL.'OM/stockMomali?alert=fail');
            }
        }

        if(isset($_POST['add']))
		{
            
            $id= $_POST['id'];
            
            $this->model->insertcart($id,'cart');
        }

        else if(isset($_POST['search']))
        {
            $this->view->data=$this->model->getMomali();
            $id= $_POST['id'];
            $name= $_POST['name'];
			if($this->view->value=$this->model->fetch($id,'item','Momali')){
                $this->view->render('Om/stockMomali');
            }elseif($this->view->value=$this->model->fetchName($name,'item','Momali')){
                $this->view->render('Om/stockMomali');
            }else{
                $this->view->alert="<script> alert(' UNDEFINED ID')</script>";
                $this->view->render('Om/stockMomali');
            }
            
        }   
            
        else if(isset($_POST['delete']))
        {
            $id= $_POST['id'];
            if($this->model->delete($id,'item','Momali')){
                $this->view->data=$this->model->getMomali();
                //$this->view->alert="<script> alert(' DELETED SUCESSFULLY')</script>";
                //$this->view->render('OM/stockMomali');
                header('location: '.URL.'OM/stockMomali?alert=deletesuccess');
            }else{
                $this->view->data=$this->model->getMomali();
                //$this->view->alert="<script> alert(' DELETING FAILED')</script>";
                //$this->view->render('OM/stockMomali');
                header('location: '.URL.'OM/stockMomali?alert=deletefail');
            }
        }

        else if(isset($_POST['clear']))
        {
            $this->view->data=$this->model->getMomali();
            $this->view->render('Om/stockMomali');
            
        }

        else if(isset($_POST['update']))
        {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $quantity = $_POST['quantity'];
            $price = $_POST['price'];
            $photoTmpPath = $_FILES['image']['tmp_name'];

            if($this->model->update($id,$name,$quantity,$price,$photoTmpPath,'item','Momali')){
                $this->view->data=$this->model->getMomali();
               // $this->view->alert="<script> alert(' UPDATED SUCESSFULLY')</script>";
                //$this->view->render('OM/stockMomali');
                header('location: '.URL.'OM/stockMomali?alert=updatesuccess');
            }else{
                $this->view->data=$this->model->getMomali();
                //$this->view->alert="<script> alert(' UPDATING FAILED')</script>";
                //$this->view->render('OM/stockMomali');
                header('location: '.URL.'OM/stockMomali?alert=updatefail');
            }
          
        }
        
    }
    
    function operationFerroli(){
		
		if(isset($_POST['add']))
		{
            
            $id= $_POST['id'];
            $name=$_POST['name'];
            $quantity=$_POST['quantity'];
            $price=$_POST['price'];
            $photoTmpPath=$_FILES['image']['tmp_name'];
            $data = file_get_contents($photoTmpPath);
            $img = 'data:image/' . $_FILES['image']['type'] . ';base64,' . base64_encode($data);
            
            if($this->model->insert($id,$name,$quantity,$price,$img,'item','Ferroli')){
                $this->view->data=$this->model->getFerroli();
                //$this->view->alert="<script> alert(' ADDED SUCESSFULLY')</script>";
                //$this->view->render('OM/stockFerroli');
                header('location: '.URL.'OM/stockFerroli?alert=success');
            }else{
                $this->view->data=$this->model->getFerroli();
                //$this->view->alert="<script> alert(' ADDING FAILED')</script>";
                //$this->view->render('OM/stockFerroli');
                header('location: '.URL.'OM/stockFerroli?alert=fail');
            }
        }

        if(isset($_POST['add']))
		{
            
            $id= $_POST['id'];
            
            $this->model->insertcart($id,'cart');
        }

        else if(isset($_POST['search']))
        {
            $this->view->data=$this->model->getFerroli();
            $id= $_POST['id'];
            $name= $_POST['name'];
			if($this->view->value=$this->model->fetch($id,'item','Ferroli')){
                $this->view->render('Om/stockFerroli');
            }elseif($this->view->value=$this->model->fetchName($name,'item','Ferroli')){
                $this->view->render('Om/stockFerroli');
            }else{
                $this->view->alert="<script> alert(' UNDEFINED ID')</script>";
                $this->view->render('Om/stockFerroli');
            }
            
        }   
            
        else if(isset($_POST['delete']))
        {
            $id= $_POST['id'];
            if($this->model->delete($id,'item','Ferroli')){
                $this->view->data=$this->model->getFerroli();
                //$this->view->alert="<script> alert(' DELETED SUCESSFULLY')</script>";
                //$this->view->render('OM/stockFerroli');
                header('location: '.URL.'OM/stockFerroli?alert=deletesuccess');
            }else{
                $this->view->data=$this->model->getFerroli();
                //$this->view->alert="<script> alert(' DELETING FAILED')</script>";
                //$this->view->render('OM/stockFerroli');
                header('location: '.URL.'OM/stockFerroli?alert=deletefail');
            }
            
        }

        else if(isset($_POST['clear']))
        {
            $this->view->data=$this->model->getFerroli();
            $this->view->render('Om/stockFerroli');
            
        }

        else if(isset($_POST['update']))
        {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $quantity = $_POST['quantity'];
            $price = $_POST['price'];
            $photoTmpPath = $_FILES['image']['tmp_name'];

            if($this->model->update($id,$name,$quantity,$price,$photoTmpPath,'item','Ferroli')){
                $this->view->data=$this->model->getFerroli();
                //$this->view->alert="<script> alert(' UPDATED SUCESSFULLY')</script>";
                //$this->view->render('OM/stockFerroli');
                header('location: '.URL.'OM/stockFerroli?alert=updatesuccess');
            }else{
                $this->view->data=$this->model->getFerroli();
                //$this->view->alert="<script> alert(' UPDATING FAILED')</script>";
                //$this->view->render('OM/stockFerroli');
                header('location: '.URL.'OM/stockFerroli?alert=updatefail');
            }
          
        }
        
    }
    
    function operationAqua(){
		
		if(isset($_POST['add']))
		{
            
            $id= $_POST['id'];
            $name=$_POST['name'];
            $quantity=$_POST['quantity'];
            $price=$_POST['price'];
            $photoTmpPath=$_FILES['image']['tmp_name'];
            $data = file_get_contents($photoTmpPath);
            $img = 'data:image/' . $_FILES['image']['type'] . ';base64,' . base64_encode($data);
            
            if($this->model->insert($id,$name,$quantity,$price,$img,'item','Aquaflex')){
                $this->view->data=$this->model->getAqua();
                //$this->view->alert="<script> alert(' ADDED SUCESSFULLY')</script>";
                //$this->view->render('OM/stockAquaflex');
                header('location: '.URL.'OM/stockAqua?alert=success');
            }else{
                $this->view->data=$this->model->getAqua();
                //$this->view->alert="<script> alert(' ADDING FAILED')</script>";
                //$this->view->render('OM/stockAquaflex');
                header('location: '.URL.'OM/stockAqua?alert=fail');
            }
        }

        if(isset($_POST['add']))
		{
            
            $id= $_POST['id'];
            
            $this->model->insertcart($id,'cart');
        }

        else if(isset($_POST['search']))
        {
            $this->view->data=$this->model->getAqua();
            $id= $_POST['id'];
            $name= $_POST['name'];
			if($this->view->value=$this->model->fetch($id,'item','Aquaflex')){
                $this->view->render('Om/stockAquaflex');
            }elseif($this->view->value=$this->model->fetchName($name,'stock','aquaflex')){
                $this->view->render('Om/stockAquaflex');
            }else{
                $this->view->alert="<script> alert(' UNDEFINED ID')</script>";
                $this->view->render('Om/stockAquaflex');
            }
            
        }   
            
        else if(isset($_POST['delete']))
        {
            $id= $_POST['id'];
            if($this->model->delete($id,'item','Aquaflex')){
                $this->view->data=$this->model->getAqua();
                //$this->view->alert="<script> alert(' DELETED SUCESSFULLY')</script>";
                //$this->view->render('OM/stockAquaflex');
                header('location: '.URL.'OM/stockAqua?alert=deletesuccess');
            }else{
                $this->view->data=$this->model->getAqua();
                //$this->view->alert="<script> alert(' DELETING FAILED')</script>";
               // $this->view->render('OM/stockAquaflex');
               header('location: '.URL.'OM/stockAqua?alert=deletefail');
            }
            
        }

        else if(isset($_POST['clear']))
        {
            $this->view->data=$this->model->getAqua();
            $this->view->render('Om/stockAquaflex');
            
        }

        else if(isset($_POST['update']))
        {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $quantity = $_POST['quantity'];
            $price = $_POST['price'];
            $photoTmpPath = $_FILES['image']['tmp_name'];

            if($this->model->update($id,$name,$quantity,$price,$photoTmpPath,'item','Aquaflex')){
                $this->view->data=$this->model->getAqua();
                //$this->view->alert="<script> alert(' UPDATED SUCESSFULLY')</script>";
                //$this->view->render('OM/stockAquaflex');
                header('location: '.URL.'OM/stockAqua?alert=updatesuccess');
            }else{
                $this->view->data=$this->model->getAqua();
                //$this->view->alert="<script> alert(' UPDATING FAILED')</script>";
                //$this->view->render('OM/stockAquaflex');
                header('location: '.URL.'OM/stockAqua?alert=updatefail');
            }
        }
    }

    function operationSMomali(){
		
		if(isset($_POST['add']))
		{
            
            $id= $_POST['id'];
            $name=$_POST['name'];
            $quantity=$_POST['quantity'];
            $price=$_POST['price'];
            $photoTmpPath=$_FILES['image']['tmp_name'];
            $data = file_get_contents($photoTmpPath);
            $img = 'data:image/' . $_FILES['image']['type'] . ';base64,' . base64_encode($data);
            
            if($this->model->insertS($id,$name,$quantity,$price,$img,'spareparts_stock','momali')){
                $this->view->data=$this->model->getSMomali();
                //$this->view->alert="<script> alert(' ADDED SUCESSFULLY')</script>";
                //$this->view->render('OM/sparePartStock');
                header('location: '.URL.'OM/sparePartMomali?alert=success');
            }else{
                $this->view->data=$this->model->getSMomali();
                //$this->view->alert="<script> alert(' ADDING FAILED')</script>";
                //$this->view->render('OM/sparePartStock');
                header('location: '.URL.'OM/sparePartMomali?alert=fail');
            }
        }

        else if(isset($_POST['search']))
        {
            $this->view->data=$this->model->getSMomali();
            $id= $_POST['id'];
            $name= $_POST['name'];
			if($this->view->value=$this->model->fetch($id,'spareparts_stock','momali')){
                $this->view->render('Om/sparePartStock');
            }else{
                header('location: '.URL.'OM/sparePartMomali?alert=searchFail');
            }
            
        }   
            
        else if(isset($_POST['delete']))
        {
            $id= $_POST['id'];
            if($this->model->delete($id,'spareparts_stock','momali')){
                $this->view->data=$this->model->getSMomali();
                //$this->view->alert="<script> alert(' DELETED SUCESSFULLY')</script>";
                //$this->view->render('OM/sparePartStock');
                header('location: '.URL.'OM/sparePartMomali?alert=deletesuccess');
            }else{
                $this->view->data=$this->model->getSMomali();
                //$this->view->alert="<script> alert(' DELETING FAILED')</script>";
                //$this->view->render('OM/sparePartStock');
                header('location: '.URL.'OM/sparePartMomali?alert=deletefail');
            }
        }

        else if(isset($_POST['clear']))
        {
            $this->view->data=$this->model->getSMomali();
            $this->view->render('Om/sparePartStock');
            
        }

        else if(isset($_POST['update']))
        {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $quantity = $_POST['quantity'];
            $price = $_POST['price'];
            $photoTmpPath = $_FILES['image']['tmp_name'];

            if($this->model->updateS($id,$name,$quantity,$price,$photoTmpPath,'spareparts_stock','momali')){
                $this->view->data=$this->model->getSMomali();
                //$this->view->alert="<script> alert(' UPDATED SUCESSFULLY')</script>";
                //$this->view->render('OM/sparePartStock1');
                header('location: '.URL.'OM/sparePartMomali?alert=updatesuccess');
            }else{
                $this->view->data=$this->model->getSMomali();
                //$this->view->alert="<script> alert(' UPDATING FAILED')</script>";
                //$this->view->render('OM/sparePartStock1');
                header('location: '.URL.'OM/sparePartMomali?alert=updatefail');
            }
          
        }
        
    }

    function operationSFerroli(){
		
		if(isset($_POST['add']))
		{
            
            $id= $_POST['id'];
            $name=$_POST['name'];
            $quantity=$_POST['quantity'];
            $price=$_POST['price'];
            $photoTmpPath=$_FILES['image']['tmp_name'];
            $data = file_get_contents($photoTmpPath);
            $img = 'data:image/' . $_FILES['image']['type'] . ';base64,' . base64_encode($data);
            
            if($this->model->insertS($id,$name,$quantity,$price,$img,'spareparts_stock','ferroli')){
                $this->view->data=$this->model->getSFerroli();
                //$this->view->alert="<script> alert(' ADDED SUCESSFULLY')</script>";
                //$this->view->render('OM/sparePartStock1');
                header('location: '.URL.'OM/sparePartFerroli?alert=success');
            }else{
                $this->view->data=$this->model->getSFerroli();
                //$this->view->alert="<script> alert(' ADDING FAILED')</script>";
                //$this->view->render('OM/sparePartStock1');
                header('location: '.URL.'OM/sparePartFerroli?alert=fail');
            }
        }

        else if(isset($_POST['search']))
        {
            $this->view->data=$this->model->getSFerroli();
            $id= $_POST['id'];
            $name= $_POST['name'];
			if($this->view->value=$this->model->fetch($id,'spareparts_stock','ferroli')){
                $this->view->render('Om/sparePartStock1');
            }else{
                header('location: '.URL.'OM/sparePartMomali?alert=searchFail');
            }
            
        }   
            
        else if(isset($_POST['delete']))
        {
            $id= $_POST['id'];
            if($this->model->deleteS($id,'spareparts_stock','ferroli')){
                $this->view->data=$this->model->getSFerroli();
                //$this->view->alert="<script> alert(' DELETED SUCESSFULLY')</script>";
                //$this->view->render('OM/sparePartStock1');
                header('location: '.URL.'OM/sparePartFerroli?alert=deletesuccess');
            }else{
                $this->view->data=$this->model->getSFerroli();
                //$this->view->alert="<script> alert(' DELETING FAILED')</script>";
                //$this->view->render('OM/sparePartStock1');
                header('location: '.URL.'OM/sparePartFerroli?alert=deletefail');
            }
            
        }

        else if(isset($_POST['clear']))
        {
            $this->view->data=$this->model->getSFerroli();
            $this->view->render('Om/sparePartStock1');
            
        }

        else if(isset($_POST['update']))
        {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $quantity = $_POST['quantity'];
            $price = $_POST['price'];
            $photoTmpPath = $_FILES['image']['tmp_name'];

            if($this->model->updateS($id,$name,$quantity,$price,$photoTmpPath,'spareparts_stock','ferroli')){
                $this->view->data=$this->model->getSFerroli();
                //$this->view->alert="<script> alert(' UPDATED SUCESSFULLY')</script>";
                //$this->view->render('OM/sparePartStock1');
                header('location: '.URL.'OM/sparePartFerroli?alert=updatesuccess');
            }else{
                $this->view->data=$this->model->getSFerroli();
                //$this->view->alert="<script> alert(' UPDATING FAILED')</script>";
                //$this->view->render('OM/sparePartStock1');
                header('location: '.URL.'OM/sparePartFerroli?alert=updatefail');
            }
          
        }
        
    }

    function operationSAqua(){
		
		if(isset($_POST['add']))
		{
            
            $id= $_POST['id'];
            $name=$_POST['name'];
            $quantity=$_POST['quantity'];
            $price=$_POST['price'];
            $photoTmpPath=$_FILES['image']['tmp_name'];
            $data = file_get_contents($photoTmpPath);
            $img = 'data:image/' . $_FILES['image']['type'] . ';base64,' . base64_encode($data);
            
            if($this->model->insertS($id,$name,$quantity,$price,$img,'spareparts_stock','aquaflex')){
                $this->view->data=$this->model->getSAqua();
                //$this->view->alert="<script> alert(' ADDED SUCESSFULLY')</script>";
                //$this->view->render('OM/sparePartStock2');
                header('location: '.URL.'OM/sparePartAqua?alert=success');
            }else{
                $this->view->data=$this->model->getSAqua();
                //$this->view->alert="<script> alert(' ADDING FAILED')</script>";
                //$this->view->render('OM/sparePartStock2');
                header('location: '.URL.'OM/sparePartAqua?alert=fail');
            }
        }

        else if(isset($_POST['search']))
        {
            $this->view->data=$this->model->getSAqua();
            $id= $_POST['id'];
            $name= $_POST['name'];
			if($this->view->value=$this->model->fetch($id,'spareparts_stock','aquaflex')){
                $this->view->render('Om/sparePartStock2');
            }else{
                header('location: '.URL.'OM/sparePartMomali?alert=searchFail');
            }
        }   
            
        else if(isset($_POST['delete']))
        {
            $id= $_POST['id'];
            if($this->model->deleteS($id,'spareparts_stock','aquaflex')){
                $this->view->data=$this->model->getSAqua();
                //$this->view->alert="<script> alert(' DELETED SUCESSFULLY')</script>";
                //$this->view->render('OM/sparePartStock2');
                header('location: '.URL.'OM/sparePartAqua?alert=deletesuccess');
            }else{
                $this->view->data=$this->model->getSAqua();
                //$this->view->alert="<script> alert(' DELETING FAILED')</script>";
                //$this->view->render('OM/sparePartStock2');
                header('location: '.URL.'OM/sparePartAqua?alert=deletefail');
            }
            
        }

        else if(isset($_POST['clear']))
        {
            $this->view->data=$this->model->getSAqua();
            $this->view->render('Om/sparePartStock2');
            
        }

        else if(isset($_POST['update']))
        {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $quantity = $_POST['quantity'];
            $price = $_POST['price'];
            $photoTmpPath = $_FILES['image']['tmp_name'];

            if($this->model->updateS($id,$name,$quantity,$price,$photoTmpPath,'spareparts_stock','aquaflex')){
                $this->view->data=$this->model->getSAqua();
                //$this->view->alert="<script> alert(' UPDATED SUCESSFULLY')</script>";
                //$this->view->render('OM/sparePartStock2');
                header('location: '.URL.'OM/sparePartAqua?alert=updatesuccess');
            }else{
                $this->view->data=$this->model->getSAqua();
                //$this->view->alert="<script> alert(' UPDATING FAILED')</script>";
                //$this->view->render('OM/sparePartStock2');
                header('location: '.URL.'OM/sparePartAqua?alert=updatefail');
            }
        }
    }
    
    
    


    
}
?>