<?php
require_once("../app/conn.php");
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $useName = $_POST["Username"];
    $passwd =  $_POST["passwd"];
    $qry = "SELECT * FROM Admin " ;
    #$qry = "SELECT * FROM ADMIN WHERE username=? AND passwd=? limit=1 " ;
    $ready = $db->query($qry);
   
    if($ready->num_rows > 0){
        //do this....
        while($row = $ready->fetch_assoc()) {
           //var_dump($passwd);
           //var_dump($row ["username"]);  
            //check if username exists in the DATABASE
            if($useName == $row["username"]) {
              
                if(password_verify($passwd,$row['passwd'])){
                   $_SESSION['user'] = $useName;
                    echo "1";
                    
                } else{
                    echo "Password incorrect";
                } 
            }else{
                echo "Username not found "; 
            }
        }
        
    }
    else{
        echo "Error found";
    }
}

function validate( $data)
 /**gfdgf */{  
   
    $clean_data = filter_var($data,FILTER_SANITIZE_SPECIAL_CHARS);
    
    return $clean_data;

}

?>