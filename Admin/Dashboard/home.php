<?php
session_start(); //start session in order to obtain the user variable


//check if session['user'] is set
if(isset(($_SESSION['user']))){
  //echo session user set..
  //use this feauture purpose
}
//if fail go back to the login page
else{
  header('location:../login.html');
}
//feauture use to get IP address of users
//$ip = $_SERVER['REMOTE_ADDR'];
//echo "Hello from Admin page {$ip}";

if($_GET['logout']){
  session_destroy();
  unset($_SESSION);
  header('location:/index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
</head>
<body>
    
<p id="logout">
 <a href="home.php?logout=true"> <button name="logout" >Logout</button> </a>
</p>

<div class="order_container" >
  
    <table class="table">
      <!-- Top header column -->
      <thead class="thead-dark">
        <th scope="col">N/S</th>
        <th scope="col">artistName </th>
        <th scope="col">song_title</th>     
        <th scope="col"> song</th> 
        <th scope="col">songCover_Image</th>
        <th scope="col">Action</th>
       
      </thead>
   
  <!-- Display from the Order table -->
 
 <?php  

  require_once '/home/misheck/Desktop/TMC/app/conn.php';
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
<td> <?php echo $row["songUrl"]; ?> </td> 
<td>
    <img style="height: 10px; width: 25px;" src="Images/<?php echo $row['songCover']; ?> " alt="photo"> </td>  
 
<td> 
  <form>
    <input type="submit" name="ID" id="del" value="<?php echo $row['ID'];?>" style="color:red;">
  </form>  </td>

</tr>

<?php

      }
    }
  
?>
</tbody>
</table>

<a href="add_music.php" rel="add">
  <button class="btn btn-primary">Add song</button>
</a>


</body>

<script src="/Include/js/jquery-3.7.1.min.js.js"></script>

<script>

  $(document).ready(function(){

    $("#del").on('click',del);


  });

  function del(e){
    e.preventDefault();
     // let id = $(this).attr('del_ID');
     let id = $('#id').val;
      $.ajax({
        url:'del.php',
        type:"POST",
        data:{ID:id},
        success:function(text){
          console.log(text)
        }
      });
  }

</script>
</html>