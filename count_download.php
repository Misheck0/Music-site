<?php
$db = new mysqli('localhost','misheck','5283','tmc');

//$stmt = " UPDATE `music` SET `downloads` = '1' WHERE `music`.`ID` = 1"; 


$id = $_POST['id'];
$old_value = $_POST['old_value'];
if($db) {
    $new_value= $old_value + 1;
    $stmt = " UPDATE music SET downloads =? WHERE ID =?";
    $pre = $db->prepare($stmt);
    $pre->bind_param('ii',$db,$new_value);
       // if($db->query($stmt)){
           if($pre->execute()){
            echo "Downloading in Progress ...";
           // $db->commit();
        } else{
            $db->rollback();
            echo "not found";
        }
       
 


}
