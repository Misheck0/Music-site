<?php
/**
 *  /**
    * 10815
   

    * Class will be used to coonect to the Database for this site 
    *will class will have all function and attribute used for this music App
     
    */
      /*
  
*/


class Database {
  
      protected $hostname= "localhost";
      protected $username = "misheck";
      protected $passwd = "5283";
      protected $db_name = "tmc";
      protected $db;
      function __construct(){
         $this->db = new mysqli($this->hostname,$this->username,$this->passwd,$this->db_name);
      }

function getAllsong() {

   $query = "SELECT * from music";
   $result = $this->db->query($query);
   if($result->num_rows > 0) {
     /*while($row = $result->fetch_assoc());
         {
            echo $row['ID'];
         } */
          foreach( $result->fetch_assoc() as $row) {
            echo $row["artistName"];
          }
         }

}

}

