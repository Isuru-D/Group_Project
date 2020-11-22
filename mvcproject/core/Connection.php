<?php
    class Connection{
        function __construct(){
            $this->conn=new mysqli('localhost', 'root', '', 'project', 3308);
            if($this->conn->connect_error){
                die("Connecction failed: ".$conn->connect_error);
            }
        }

        public function selectWhere($table,$fields,$where){
            $fieldNames = NULL;

            if($fields=='*'){
                $fieldNames = $fields;
            } else{
                foreach ($fields as $name) {
                $fieldNames .= "$name,";
                }
                $fieldNames = rtrim($fieldNames,',');
            }

            $sql="SELECT $fieldNames FROM $table WHERE $where";
            $result = mysqli_query($this->conn, $sql);
            $finale=array();
            if (mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    array_push($finale, $row);
                }
                return $finale;                
            }
            mysqli_close($this->conn);
        }

        public function updateCart($table,$data,$where){
            $fieldNames = NULL;
            $fieldValues = NULL;

            foreach ($data as $key => $value) {
                $fieldNames = $key;
                $fieldValues = $value;
            }
    
            $sql="UPDATE $table SET $fieldNames = $fieldNames+? WHERE $where";
            $result=mysqli_prepare($this->conn, $sql);
            mysqli_stmt_bind_param($result, "i", $fieldValues);
            mysqli_stmt_execute($result);
		    mysqli_stmt_close($result);
        }
    }
?>

