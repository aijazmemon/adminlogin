<?php 
class connection{

    public $localhost;
    public $username;
    public $password;
    public $database;
    public $conn;
    public $data;
    
    public function connect(){
        $this->localhost = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->database = "loginpage";


        $conn = mysqli_connect($this->localhost,$this->username,$this->password,$this->database);

        if($conn){
            $result = "Connected";
        }else{
            $result = "Failed to connect";
        }

        return $result;
    }

    public function insert($table_name, $data)  
      {  
           $string = "INSERT INTO ".$table_name." (";            
           $string .= implode(",", array_keys($data)) . ') VALUES (';            
           $string .= "'" . implode("','", array_values($data)) . "')";  
           if(mysqli_query($this->conn, $string))  
           {  
                return true;  
           }  
           else  
           {  
                echo mysqli_error($this->conn);  
           }  
    
}
}

?>