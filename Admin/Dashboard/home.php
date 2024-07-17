<?php
//session_start();
//header('Access-Control-Allow-Origin: *');


//$ip = $_SERVER['REMOTE_ADDR'];
//echo "Hello from Admin page {$ip}";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
</head>
<body>
    
<div class="order_container" >
  
    <table class="table">
      <!-- Top header column -->
      <thead>
        <th scope="col">N/S</th>
        <th scope="col">artistName </th>
        <th scope="col">song_title</th>     
        <th scope="col"> song</th> 
        <th scope="col">songCover_Image</th>
       
      </thead>
   
  <!-- Display from the Order table -->
 
 <?php  
  require_once'/home/misheck/Desktop/TMC/app/conn.php';
  //require_once("../TMC/app/conn.php");
  $query = "SELECT * from music";
  $result = $db->query($query);
  if($result->num_rows > 0) {
    while ($row = $result->fetch_assoc())
  
        {  ?>
  <tbody class="table-primary">
<tr class='table-secondary'>
<td> <?php echo $row["ID"]; ?> </td>       
<td> <?php echo $row["artistName"]; ?> </td>    
<td> <?php echo $row["song_title"]; ?> </td> 
<td>
    <img style="height: 10px; width: 25px;" src="/Images/<?php echo $row['songCover']; ?> " alt="photo"> </td>  
 
  

</tr>

<?php

      }
    }
  
?>
</tbody>
</table>



</body>
</html>