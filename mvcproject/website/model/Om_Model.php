<?php

class Om_Model extends Model{
    function __construct(){
        parent::__construct(); 
    }

    function getMomali(){
        return $this->db->selectWhere('item', '*' , "Category='Momali'"); 
    }

    function getFerroli(){
        return $this->db->selectWhere('item', '*' , "Category='Ferroli'"); 
    }

    function getAqua(){
        return $this->db->selectWhere('item', '*' , "Category='Aquaflex'"); 
    }

    function getSMomali(){
        return $this->db->selectWhere('spareparts_stock', '*' , "category='momali'"); 
    }
 
    function getSFerroli(){
        return $this->db->selectWhere('spareparts_stock', '*' , "category='ferroli'"); 
    }

    function getSAqua(){
        return $this->db->selectWhere('spareparts_stock', '*' , "category='aquaflex'"); 
    }
    
    function insert($item,$name,$quantity,$price,$img,$table,$category)
    {
        $query = "insert into $table (`ItemID`,`ItemName`,`Quantity`,`Price`,`Image`,`Category`) values('$item','$name','$quantity','$price','$img','$category')";
        $result = mysqli_query($this->db->conn,$query);
        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function insertS($item,$name,$quantity,$price,$img,$table,$category)
    {
        $query = "insert into $table (`itemNo`,`name`,`quantity`,`unitPrice`,`photo`,`category`) values('$item','$name','$quantity','$price','$img','$category')";
        $result = mysqli_query($this->db->conn,$query);
        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function insertcart($item,$table)
    {
        $query = "insert into $table (`ID`) values('$item')";
        $result = mysqli_query($this->db->conn,$query);
        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }
    }


    function fetch($id,$table,$category)
    {
        $query = "SELECT * FROM $table WHERE itemNo='$id' && category='$category' LIMIT 1";
        $result = mysqli_query($this->db->conn,$query);
        $finale=array();
        if (mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    array_push($finale, $row);
                }
                return $finale;                
        }
        
    }

    function fetchS($id,$table,$category)
    {
        $query = "SELECT * FROM $table WHERE itemNo='$id' && category='$category' LIMIT 1";
        $result = mysqli_query($this->db->conn,$query);
        $finale=array();
        if (mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    array_push($finale, $row);
                }
                return $finale;                
        }
        
    }

    function fetchName($name,$table,$category)
    {
        $query = "SELECT * FROM $table WHERE ItemName='$name' && Category='$category' LIMIT 1";
        $result = mysqli_query($this->db->conn,$query);
        $finale=array();
        if (mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    array_push($finale, $row);
                }
                return $finale;                
        }
        
    }

    public function update($id,$name,$quantity,$price,$photoTmpPath,$table,$category)
    {
        if($photoTmpPath != ""){
            $data = file_get_contents($photoTmpPath);
            $image = 'data:image/' . $_FILES['image']['type'] . ';base64,' . base64_encode($data);
            $query = "UPDATE $table SET itemNo = '".$id."', name = '".$name."',quantity = '".$quantity."',unitPrice = '".$price."', photo='$image' WHERE itemNo =$id && category='$category'";
            $result = mysqli_query($this->db->conn,$query);
        } else{
            $query = "UPDATE $table SET itemNo = '".$id."', name = '".$name."',quantity = '".$quantity."',unitPrice = '".$price."' WHERE itemNo =$id && ategory='$category'";
            $result = mysqli_query($this->db->conn,$query);   
        }

        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }
        
    }

    public function updateS($id,$name,$quantity,$price,$photoTmpPath,$table,$category)
    {
        if($photoTmpPath != ""){
            $data = file_get_contents($photoTmpPath);
            $image = 'data:image/' . $_FILES['image']['type'] . ';base64,' . base64_encode($data);
            $query = "UPDATE $table SET name = '".$name."',itemNo = '".$id."',quantity = '".$quantity."',unitPrice = '".$price."', photo='$image' WHERE itemNo ='".$id."' && category='$category'";
            $result = mysqli_query($this->db->conn,$query);
        } else{
            $query = "UPDATE $table SET name = '".$name."',itemNo = '".$id."',quantity = '".$quantity."',unitPrice = '".$price."' WHERE itemNo ='".$id."' && category='$category'";
            $result = mysqli_query($this->db->conn,$query);   
        }

        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }
        
    }

    public function delete($id,$table,$category)
    {
        $query = "delete from `$table` where itemNo = $id && category='$category'";
        $result = mysqli_query($this->db->conn,$query);
            
            
        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }
       
    }

    public function deleteS($id,$table,$category)
    {
        $query = "delete from `$table` where itemNo = $id && category='$category'";
        $result = mysqli_query($this->db->conn,$query);
            
            
        if($result)
        {
            return true;
        }
        else
        {
            return false;
        }
       
    }

}

?>